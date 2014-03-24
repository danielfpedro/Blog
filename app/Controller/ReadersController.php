<?php
App::uses('AppController', 'Controller');
/**
 * Readers Controller
 *
 * @property Reader $Reader
 * @property PaginatorComponent $Paginator
 */
class ReadersController extends AppController {

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
		$this->Reader->recursive = 0;
		$this->set('readers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reader->exists($id)) {
			throw new NotFoundException(__('Invalid reader'));
		}
		$options = array('conditions' => array('Reader.' . $this->Reader->primaryKey => $id));
		$this->set('reader', $this->Reader->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reader->create();
			if ($this->Reader->save($this->request->data)) {
				$this->Session->setFlash(__('The reader has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reader could not be saved. Please, try again.'));
			}
		}
		$readersProfiles = $this->Reader->ReadersProfile->find('list');
		$profiles = $this->Reader->Profile->find('list');
		$this->set(compact('readersProfiles', 'profiles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reader->exists($id)) {
			throw new NotFoundException(__('Invalid reader'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reader->save($this->request->data)) {
				$this->Session->setFlash(__('The reader has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reader could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reader.' . $this->Reader->primaryKey => $id));
			$this->request->data = $this->Reader->find('first', $options);
		}
		$readersProfiles = $this->Reader->ReadersProfile->find('list');
		$profiles = $this->Reader->Profile->find('list');
		$this->set(compact('readersProfiles', 'profiles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reader->id = $id;
		if (!$this->Reader->exists()) {
			throw new NotFoundException(__('Invalid reader'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reader->delete()) {
			$this->Session->setFlash(__('The reader has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reader could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Reader->recursive = 0;
		$this->set('readers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Reader->exists($id)) {
			throw new NotFoundException(__('Invalid reader'));
		}
		$options = array('conditions' => array('Reader.' . $this->Reader->primaryKey => $id));
		$this->set('reader', $this->Reader->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reader->create();
			if ($this->Reader->save($this->request->data)) {
				$this->Session->setFlash(__('The reader has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reader could not be saved. Please, try again.'));
			}
		}
		$readersProfiles = $this->Reader->ReadersProfile->find('list');
		$profiles = $this->Reader->Profile->find('list');
		$this->set(compact('readersProfiles', 'profiles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Reader->exists($id)) {
			throw new NotFoundException(__('Invalid reader'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reader->save($this->request->data)) {
				$this->Session->setFlash(__('The reader has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reader could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reader.' . $this->Reader->primaryKey => $id));
			$this->request->data = $this->Reader->find('first', $options);
		}
		$readersProfiles = $this->Reader->ReadersProfile->find('list');
		$profiles = $this->Reader->Profile->find('list');
		$this->set(compact('readersProfiles', 'profiles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Reader->id = $id;
		if (!$this->Reader->exists()) {
			throw new NotFoundException(__('Invalid reader'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reader->delete()) {
			$this->Session->setFlash(__('The reader has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reader could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
