<?php

App::uses('Controller', 'Controller');

/**
 * App Controller
 */
class AppController extends Controller
{
    /**
     * Helper
     *
     * @var array
     */
    public $helpers = array(
        'Form',
        'Html',
        'Session'
    );

    /**
     * Components
     *
     * @var array
     */
    public $components = array(
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email'
                    )
                )
            )
        ),
        'RequestHandler',
        'Session'
    );
}
