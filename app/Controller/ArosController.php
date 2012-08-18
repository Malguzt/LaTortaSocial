<?php
App::uses('AppController', 'Controller');
/**
 * Aros Controller
 *
 * @property Aro $Aro
 */
class ArosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aro->recursive = 0;
		$this->set('aros', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aro->id = $id;
		if (!$this->Aro->exists()) {
			throw new NotFoundException(__('Invalid aro'));
		}
		$this->set('aro', $this->Aro->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aro->create();
			if ($this->Aro->save($this->request->data)) {
				$this->Session->setFlash(__('The aro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aro could not be saved. Please, try again.'));
			}
		}
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('acos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aro->id = $id;
		if (!$this->Aro->exists()) {
			throw new NotFoundException(__('Invalid aro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aro->save($this->request->data)) {
				$this->Session->setFlash(__('The aro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aro could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aro->read(null, $id);
		}
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('acos'));
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
		$this->Aro->id = $id;
		if (!$this->Aro->exists()) {
			throw new NotFoundException(__('Invalid aro'));
		}
		if ($this->Aro->delete()) {
			$this->Session->setFlash(__('Aro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
