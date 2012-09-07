<?php

App::uses('AppController', 'Controller');

/**
 * Scenes Controller
 *
 * @property Scene $Scene
 */
class ScenesController extends AppController {

  public function isAuthorized($user = null) {
    if (!parent::isAuthorized()) {
      if (in_array($this->request->params['action'], array('index'))) { //Acciones para cualquier jugador.
        return true;
      }
      if ($this->request->params['action'] == 'add'  //Si se quiere agregar un personaje a una partida
              && !empty($this->request->params['pass'][0])
              && $this->Acl->check(array('User' => array('id' => $this->Session->read('Auth.User.id'))), array('Party' => array('id' => $this->request->params['pass'][0])))) {
        return true;
      }
      if (in_array($this->request->params['action'], array('edit', 'delete', 'view'))  //Si se quiere agregar un personaje a una partida
              && !empty($this->request->params['pass'][0])
              && $this->Acl->check(array('User' => array('id' => $this->Session->read('Auth.User.id'))), array('Scene' => array('id' => $this->request->params['pass'][0])))) {
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
    $this->Scene->recursive = 0;
    $this->set('scenes', $this->paginate());
  }

  /**
   * view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function view($id = null) {
    $this->Scene->id = $id;
    if (!$this->Scene->exists()) {
      throw new NotFoundException(__('Invalid scene'));
    }
    $this->set('scene', $this->Scene->read(null, $id));
  }

  /**
   * add method
   *
   * @return void
   */
  public function add($partyId = false) {
    if ($this->request->is('post')) {
      $this->request->data['Scene']['party_id'] = $partyId;

      $this->Scene->create();
      debug($this->request->data);
      if ($this->Scene->save($this->request->data)) {
        foreach ($this->request->data['Character']['Character'] as $characterId) {
          $user = array('User' => array('id' => $this->Scene->Character->field('user_id', array('id' => $characterId))));
          $scene = array('Scene' => array('id' => $this->Scene->id), 'view');
          $this->Acl->allow($user, $scene, 'read');
        }
        $this->Session->setFlash(__('The scene has been saved'));
        $this->redirect(array('controller' => 'parties', 'action' => 'view', $partyId));
      } else {
        $this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
      }
    }
    $parties = $this->Scene->Party->find('list');
    $characters = $this->Scene->Character->find('list', array('conditions' => array('Character.party_id' => $partyId)));
    $this->set(compact('parties', 'characters'));
  }

  /**
   * edit method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function edit($id = null) {
    $this->Scene->id = $id;
    if (!$this->Scene->exists()) {
      throw new NotFoundException(__('Invalid scene'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Scene->save($this->request->data)) {
        $this->Session->setFlash(__('The scene has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
      }
    } else {
      $this->request->data = $this->Scene->read(null, $id);
    }
    $parties = $this->Scene->Party->find('list');
    $characters = $this->Scene->Character->find('list');
    $this->set(compact('parties', 'characters'));
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
    $this->Scene->id = $id;
    if (!$this->Scene->exists()) {
      throw new NotFoundException(__('Invalid scene'));
    }
    $partyId = $this->Scene->field('party_id');
    if ($this->Scene->delete()) {
      $this->Session->setFlash(__('Scene deleted'));
      $this->redirect(array('controller' => 'parties', 'action' => 'view', $partyId));
    }
    $this->Session->setFlash(__('Scene was not deleted'));
    $this->redirect(array('action' => 'index'));
  }

}
