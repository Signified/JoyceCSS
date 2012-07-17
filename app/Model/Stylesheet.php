<?php

App::uses('AppModel', 'Model');

/**
 * Stylesheet Model
 *
 * @property User $User
 */
class Stylesheet extends AppModel
{
    /**
     * Belongs To
     *
     * @var array
     */
    public $belongsTo = array(
        'User'
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
                'message' => 'Give your stylesheet a name',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'That name is already taken',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'description' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Describe your stylesheet',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'default_background_color' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a background color (sic)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'default_color' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter a color (sic)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'default_font_size' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the font size in pixels (must be greater than 0)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'default_line_height' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the line height (must be greater than 0)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'default_font_family' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please enter the font family',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'default_border_radius' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the border radius in pixels (must be greater than 0)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'template_page_width' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the template page width in pixels (must be greater than 0)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'template_left_column_width' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the template left column width in pixels (must be greater than 0)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'template_right_column_width' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the template right column width in pixels (must be greater than 0)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'grid_units' => array(
            'comparison' => array(
                'rule' => array('comparison', '>=', 5),
                'message' => 'Please enter the number of grid units (must be at least 5)',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'module_margin' => array(
            'comparison' => array(
                'rule' => array('comparison', '>', 0),
                'message' => 'Please enter the module margin size in pixels (must be greater than 0)',
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
            if (isset($result[$this->alias]['module_margin'])) {
                $results[$i][$this->alias]['module_margin_small'] = round($result[$this->alias]['module_margin'] / 2);
                $results[$i][$this->alias]['module_margin_large'] = round($result[$this->alias]['module_margin'] * 2);
            }
        }
        return $results;
    }
}
