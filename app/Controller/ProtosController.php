<?php
App::uses('AppController', 'Controller');
/**
 * Protos Controller
 *
 * @property Proto $Proto
 * @property PaginatorComponent $Paginator
 */
class ProtosController extends AppController {

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
		$this->Proto->recursive = 0;
		$this->set('protos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proto->exists($id)) {
			throw new NotFoundException(__('Invalid proto'));
		}
		$options = array('conditions' => array('Proto.' . $this->Proto->primaryKey => $id));
		$this->set('proto', $this->Proto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proto->create();
			if ($this->Proto->save($this->request->data)) {
				$this->Session->setFlash(__('The proto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proto could not be saved. Please, try again.'));
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
		if (!$this->Proto->exists($id)) {
			throw new NotFoundException(__('Invalid proto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proto->save($this->request->data)) {
				$this->Session->setFlash(__('The proto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proto.' . $this->Proto->primaryKey => $id));
			$this->request->data = $this->Proto->find('first', $options);
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
		$this->Proto->id = $id;
		if (!$this->Proto->exists()) {
			throw new NotFoundException(__('Invalid proto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proto->delete()) {
			$this->Session->setFlash(__('The proto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
