<?php

App::uses('AppController', 'Controller');

/**
 * Stylesheets Controller
 *
 * @property Stylesheet $Stylesheet
 */
class StylesheetsController extends AppController
{
    /**
     * Add
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Stylesheet->create();
            if ($this->Stylesheet->save($this->request->data)) {
                $this->redirect(array('action' => 'view', $this->Stylesheet->id));
            } else {
                $this->Session->setFlash(__('The stylesheet could not be saved. Please, try again.'));
            }
        }
        $title_for_layout = __('Create a New Stylesheet');
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
            'index',
            'preview',
            'view'
        ));
    }

    /**
     * Delete
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Stylesheet->id = $id;
        if (!$this->Stylesheet->exists()) {
            throw new NotFoundException();
        }
        $stylesheet = $this->Stylesheet->read(null, $id);
        if ($stylesheet['Stylesheet']['user_id'] !== $this->Auth->user('id')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Stylesheet->delete()) {
            $this->Session->setFlash(__('Your stylesheet has been deleted'));
        } else {
            $this->Session->setFlash(__('Your stylesheet could not be deleted'));
        }
        $this->redirect(array('controller' => 'users', 'action' => 'view', $stylesheet['Stylesheet']['user_id']));
    }

    /**
     * Edit
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->Stylesheet->id = $id;
        if (!$this->Stylesheet->exists()) {
            throw new NotFoundException();
        }
        $stylesheet = $this->Stylesheet->read(null, $id);
        if ($stylesheet['Stylesheet']['user_id'] !== $this->Auth->user('id')) {
            throw new MethodNotAllowedException();
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Stylesheet->save($this->request->data)) {
                $this->Session->setFlash(__('Your stylesheet has been saved'));
                $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('Your stylesheet could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $stylesheet;
        }
        $title_for_layout = __('Edit Stylesheet');
        $this->set(compact('stylesheet', 'title_for_layout'));
    }

    /**
     * Index
     *
     * @return void
     */
    public function index()
    {
        $this->Stylesheet->recursive = 0;
        $stylesheets = $this->paginate();
        $title_for_layout = __('Stylesheets');
        $this->set(compact('stylesheets', 'title_for_layout'));
    }

    /**
     * Preview
     *
     * @param string $id
     * @return void
     */
    public function preview($id = null)
    {
        $this->Stylesheet->id = $id;
        if (!$this->Stylesheet->exists()) {
            throw new NotFoundException();
        }
        $stylesheet = $this->Stylesheet->read(null, $id);
        $title_for_layout = __('%s by %s', $stylesheet['Stylesheet']['name'], $stylesheet['User']['name']);
        $this->layout = false;
        $this->set(compact('stylesheet', 'title_for_layout'));
    }

    /**
     * View
     *
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->Stylesheet->id = $id;
        if (!$this->Stylesheet->exists()) {
            throw new NotFoundException();
        }
        $stylesheet = $this->Stylesheet->read(null, $id);

        $units = array();
        $gridUnits = (int) $stylesheet['Stylesheet']['grid_units'];
        for ($i = 1; $i <= $gridUnits; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $key = '.size' . $j . 'of' . $i;
                $value = (string) ($j / $i);
                $units[$value][] = $key;
            }
        }
        $grids = array();
        foreach ($units as $value => $keys) {
            $grids[implode(',', $keys)] = $value * 100;
        }

        $url = Router::url(array('action' => 'view', $stylesheet['Stylesheet']['id'], 'ext' => 'css'), true);
        $title_for_layout = __('%s by %s', $stylesheet['Stylesheet']['name'], $stylesheet['User']['name']);
        $this->set(compact('grids', 'stylesheet', 'title_for_layout', 'url'));
    }
}
