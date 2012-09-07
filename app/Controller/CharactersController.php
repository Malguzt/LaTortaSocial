<?php

App::uses('AppController', 'Controller');

/**
 * Characters Controller
 *
 * @property Character $Character
 */
class CharactersController extends AppController {

  public function isAuthorized($user = null) {
    if (!parent::isAuthorized()) {
      if (in_array($this->request->params['action'], array('index', 'view'))) { //Acciones para cualquier jugador.
        return true;
      }
      if ($this->request->params['action'] == 'add'  //Si se quiere agregar un personaje a una partida
              && !empty($this->request->params['pass'][0])
              && $this->Acl->check(array('User' => array('id' => $this->Session->read('Auth.User.id'))), array('Party' => array('id' => $this->request->params['pass'][0])))) {
        return true;
      }
      if (in_array($this->request->params['action'], array('edit', 'delete'))  //Si se quiere agregar un personaje a una partida
              && !empty($this->request->params['pass'][0])
              && $this->Acl->check(array('User' => array('id' => $this->Session->read('Auth.User.id'))), array('Character' => array('id' => $this->request->params['pass'][0])))) {
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
    $this->Character->recursive = 0;
    $this->set('characters', $this->paginate());
  }

  /**
   * view method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function view($id = null) {
    $this->Character->id = $id;
    if (!$this->Character->exists()) {
      throw new NotFoundException(__('Invalid character'));
    }
    $this->set('character', $this->Character->read(null, $id));
  }

  /**
   * add method
   *
   * @return void
   */
  public function add($partyId = false) {
    if (!$partyId) {
      $this->Session->setFlash(__('No podes crear un personaje sin partida, gil.'));
      $this->redirect(array('controller' => 'Parties', 'action' => 'index'));
    }
    if ($this->request->is('post')) {
      $this->request->data['Character']['party_id'] = $partyId;
      $this->Character->create();
      if ($this->Character->save($this->request->data)) {
        $this->Acl->allow(array(
            'User' => array(
                'id' => $this->request->data['Character']['user_id']
                )), array(
            'Character' => array(
                'id' => $this->Character->id
            )
        ));
        $this->Session->setFlash(__('The character has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The character could not be saved. Please, try again.'));
      }
    }
    $parties = $this->Character->Party->find('list');
    $users = $this->Character->User->find('list');
    $scenes = $this->Character->Scene->find('list');
    $this->set(compact('parties', 'users', 'scenes'));
  }

  /**
   * edit method
   *
   * @throws NotFoundException
   * @param string $id
   * @return void
   */
  public function edit($id = null) {
    $this->Character->id = $id;
    if (!$this->Character->exists()) {
      throw new NotFoundException(__('Invalid character'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Character->save($this->request->data)) {
        $this->Session->setFlash(__('The character has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The character could not be saved. Please, try again.'));
      }
    } else {
      $this->request->data = $this->Character->read(null, $id);
    }
    $parties = $this->Character->Party->find('list');
    $users = $this->Character->User->find('list');
    $scenes = $this->Character->Scene->find('list');
    $this->set(compact('parties', 'users', 'scenes'));
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
    $this->Character->id = $id;
    if (!$this->Character->exists()) {
      throw new NotFoundException(__('Invalid character'));
    }
    if ($this->Character->delete()) {
      $this->Session->setFlash(__('Character deleted'));
      $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Character was not deleted'));
    $this->redirect(array('action' => 'index'));
  }

}
