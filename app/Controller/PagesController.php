<?php

App::uses('AppController', 'Controller');

/**
 * Pages Controller
 */
class PagesController extends AppController
{
    /**
     * Uses
     *
     * @var array
     */
    public $uses = array();

    /**
     * Before Filter
     *
     * @return void
     */
    public function beforeFilter()
    {
        $this->Auth->allow(array(
            'home'
        ));
    }

    /**
     * Home
     *
     * @return void
     */
    public function home()
    {
        $title_for_layout = __('The Custom CSS Framework Generator');
        $this->set(compact('title_for_layout'));
    }
}
