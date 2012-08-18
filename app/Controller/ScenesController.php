<?php
App::uses('AppController', 'Controller');
/**
 * Scenes Controller
 *
 * @property Scene $Scene
 */
class ScenesController extends AppController {

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
	public function add() {
		if ($this->request->is('post')) {
			$this->Scene->create();
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		}
		$parties = $this->Scene->Party->find('list');
		$characters = $this->Scene->Character->find('list');
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
		if ($this->Scene->delete()) {
			$this->Session->setFlash(__('Scene deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Scene was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
