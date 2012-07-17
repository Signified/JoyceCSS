<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Stylesheet $Stylesheet
 */
class User extends AppModel
{
    /**
     * Has Many
     *
     * @var array
     */
    public $hasMany = array(
        'Stylesheet'
    );

    /**
     * Validate
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter your name',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Please enter a valid email address',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'That email address is already in use',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
            'between' => array(
                'rule' => array('minLength', 4),
                'message' => 'Passwords must be at least 4 characters long',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    /**
     * After Find
     *
     * @param array $results
     * @param boolean $primary
     * @return array $results
     */
    public function afterFind($results, $primary)
    {
        foreach ($results as $i => $result) {
            if (isset($result[$this->alias]['email'])) {
                $results[$i][$this->alias]['gravatar'] = 'http://www.gravatar.com/avatar/' . md5(strtolower(trim($result[$this->alias]['email'])));
            }
        }
        return $results;
    }
}
