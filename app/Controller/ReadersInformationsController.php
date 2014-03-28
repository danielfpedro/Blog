<?php
App::uses('AppController', 'Controller');
/**
 * ReadersInformations Controller
 *
 * @property ReadersInformation $ReadersInformation
 * @property PaginatorComponent $Paginator
 */
class ReadersInformationsController extends AppController {

public $layout = 'admin';	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReadersInformation->recursive = 0;
		$this->set('readersInformations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReadersInformation->exists($id)) {
			throw new NotFoundException(__('Invalid readers information'));
		}
		$options = array('conditions' => array('ReadersInformation.' . $this->ReadersInformation->primaryKey => $id));
		$this->set('readersInformation', $this->ReadersInformation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReadersInformation->create();
			if ($this->ReadersInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The readers information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readers information could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ReadersInformation->exists($id)) {
			throw new NotFoundException(__('Invalid readers information'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReadersInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The readers information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readers information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReadersInformation.' . $this->ReadersInformation->primaryKey => $id));
			$this->request->data = $this->ReadersInformation->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ReadersInformation->id = $id;
		if (!$this->ReadersInformation->exists()) {
			throw new NotFoundException(__('Invalid readers information'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReadersInformation->delete()) {
			$this->Session->setFlash(__('The readers information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The readers information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
