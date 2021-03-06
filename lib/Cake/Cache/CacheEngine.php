<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Cache
 * @since         CakePHP(tm) v 1.2.0.4933
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Storage engine for CakePHP caching
 *
 * @package       Cake.Cache
 */
abstract class CacheEngine {

/**
 * Settings of current engine instance
 *
 * @var array
 */
	public $settings = array();

/**
 * Initialize the cache engine
 *
 * Called automatically by the cache frontend
 *
 * @param array $settings Associative array of parameters for the engine
 * @return boolean True if the engine has been successfully initialized, false if not
 */
	public function init($settings = array()) {
		$this->settings = array_merge(
			array('prefix' => 'cake_', 'duration' => 3600, 'probability' => 100),
			$this->settings,
			$settings
		);
		if (!is_numeric($this->settings['duration'])) {
			$this->settings['duration'] = strtotime($this->settings['duration']) - time();
		}
		return true;
	}

/**
 * Garbage collection
 *
 * Permanently remove all expired and deleted data
 * @return void
 */
	public function gc() { }

/**
 * Write value for a key into cache
 *
 * @param string $key Identifier for the data
 * @param mixed $value Data to be cached
 * @param mixed $duration How long to cache for.
 * @return boolean True if the data was successfully cached, false on failure
 */
	abstract public function write($key, $value, $duration);

/**
 * Read a key from the cache
 *
 * @param string $key Identifier for the data
 * @return mixed The cached data, or false if the data doesn't exist, has expired, or if there was an error fetching it
 */
	abstract public function read($key);

/**
 * Increment a number under the key and return incremented value
 *
 * @param string $key Identifier for the data
 * @param integer $offset How much to add
 * @return New incremented value, false otherwise
 */
	abstract public function increment($key, $offset = 1);

/**
 * Decrement a number under the key and return decremented value
 *
 * @param string $key Identifier for the data
 * @param integer $offset How much to subtract
 * @return New incremented value, false otherwise
 */
	abstract public function decrement($key, $offset = 1);

/**
 * Delete a key from the cache
 *
 * @param string $key Identifier for the data
 * @return boolean True if the value was successfully deleted, false if it didn't exist or couldn't be removed
 */
	abstract public function delete($key);

/**
 * Delete all keys from the cache
 *
 * @param boolean $check if true will check expiration, otherwise delete all
 * @return boolean True if the cache was successfully cleared, false otherwise
 */
	abstract public function clear($check);

/**
 * Cache Engine settings
 *
 * @return array settings
 */
	public function settings() {
		return $this->settings;
	}

/**
 * Generates a safe key for use with cache engine storage engines.
 *
 * @param string $key the key passed over
 * @return mixed string $key or false
 */
	public function key($key) {
		if (empty($key)) {
			return false;
		}
		$key = Inflector::underscore(str_replace(array(DS, '/', '.'), '_', strval($key)));
		return $key;
	}
}
