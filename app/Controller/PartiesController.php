<?php

App::uses('AppController', 'Controller');

/**
 * Parties Controller
 *
 * @property Party $Party
 */
class PartiesController extends AppController {

  public function isAuthorized($user = null) {
    if (!parent::isAuthorized()) {
      if (in_array($this->request->params['action'], array('index', 'add', 'view'))) { //Acciones para cualquier jugador.
        return true;
      }
      if ($this->Acl->check(array('User' => array('id' => $this->Session->read('Auth.User.id'))), array('Party' => array('id' => $id)))) {
        return true;
      }
    } else {
      return true;
    }
    return false;
  }

  /**
   * index method
   *
   * @return void
   */
  public function index() {
    $this->Party->recursive = 0;
    $this->set('parties', $this->paginate());
  }

  /**
   * view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function view($id = null) {
    $this->Party->id = $id;
    if (!$this->Party->exists()) {
      throw new NotFoundException(__('No existe esta partida'));
    }
    $this->set('party', $this->Party->read(null, $id));

    $canEdit = $this->Acl->check(array(
        'model' => 'User',
        'foreign_key' => $this->Session->read('Auth.User.id')
            ), array(
        'model' => 'Party',
        'foreign_key' => $id
            ));
    $this->set('canEdit', $canEdit);
  }

  /**
   * add method
   *
   * @return void
   */
  public function add() {
    if ($this->request->is('post')) {
      $this->Party->create();
      if ($this->Party->save($this->request->data)) {
        $this->Acl->allow(array(
            'User' => array(
                'id' => $this->Session->read('Auth.User.id')
                )), array(
            'Party' => array(
                'id' => $this->Party->id
            )
        ));
        $this->Session->setFlash(__('Ahí esta, sentite el amo del juego.'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('Como que no che. No se pudo guardar tu partida.'));
      }
    }
    $spreadsheetModels = $this->Party->SpreadsheetModel->find('list');
    $users = $this->Party->User->find('list');
    $this->set(compact('spreadsheetModels', 'users'));
  }

  /**
   * edit method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function edit($id = null) {
    $this->Party->id = $id;
    if (!$this->Party->exists()) {
      throw new NotFoundException(__('Invalid party'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Party->save($this->request->data)) {
        $this->Session->setFlash(__('The party has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The party could not be saved. Please, try again.'));
      }
    } else {
      $this->request->data = $this->Party->read(null, $id);
    }
    $spreadsheetModels = $this->Party->SpreadsheetModel->find('list');
    $users = $this->Party->User->find('list');
    $this->set(compact('spreadsheetModels', 'users'));
  }

  /**
   * delete method
   *
   * @throws MethodNotAllowedException
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function delete($id = null) {
    if (!$this->request->is('post')) {
      throw new MethodNotAllowedException();
    }
    $this->Party->id = $id;
    if (!$this->Party->exists()) {
      throw new NotFoundException(__('Invalid party'));
    }
    if ($this->Party->delete()) {
      $this->Session->setFlash(__('Party deleted'));
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Party was not deleted'));
    $this->redirect(array('action' => 'index'));
  }

}
