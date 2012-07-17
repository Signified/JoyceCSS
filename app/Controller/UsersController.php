<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController
{
    /**
     * Add
     *
     * @return void
     */
    public function add()
    {
        if ($this->Auth->loggedIn()) {
            $this->redirect('/');
        }
        if ($this->request->is('post')) {
            $this->User->set($this->request->data);
            if ($this->User->validates()) {
                $this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
            }
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $user = $this->User->read();
                $this->Auth->login($user['User']);
                $this->redirect(array('action' => 'view', $this->User->id));
            } else {
                $this->Session->setFlash(__('Your account could not be saved. Please, try again.'));
            }
        }
        $title_for_layout = __('Sign Up');
        $this->set(compact('title_for_layout'));
    }

    /**
     * Before Filter
     *
     * @return void
     */
    public function beforeFilter()
    {
        $this->Auth->allow(array(
            'add',
            'login',
            'logout',
            'view'
        ));
    }

    /**
     * Edit
     *
     * @return void
     */
    public function edit()
    {
        $id = (int) $this->Auth->user('id');
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException();
        }
        $user = $this->User->read(null, $id);
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Your profile has been saved'));
                $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('Your profile could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $user;
        }
        $title_for_layout = $user['User']['name'];
        $this->set(compact('title_for_layout'));
    }

    /**
     * Login
     *
     * @return void
     */
    public function login()
    {
        if ($this->Auth->loggedIn()) {
            $this->redirect('/');
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Email or Password is incorrect'));
            }
        }
        $title_for_layout = __('Login');
        $this->set(compact('title_for_layout'));
    }

    /**
     * Logout
     *
     * @return void
     */
    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }

    /**
     * View
     *
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException();
        }
        $user = $this->User->read(null, $id);
        $title_for_layout = $user['User']['name'];
        $this->set(compact('title_for_layout', 'user'));
    }
}
