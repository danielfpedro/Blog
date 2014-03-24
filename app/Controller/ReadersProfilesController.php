<?php
App::uses('AppController', 'Controller');
/**
 * ReadersProfiles Controller
 *
 * @property ReadersProfile $ReadersProfile
 * @property PaginatorComponent $Paginator
 */
class ReadersProfilesController extends AppController {

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
		$this->ReadersProfile->recursive = 0;
		$this->set('readersProfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReadersProfile->exists($id)) {
			throw new NotFoundException(__('Invalid readers profile'));
		}
		$options = array('conditions' => array('ReadersProfile.' . $this->ReadersProfile->primaryKey => $id));
		$this->set('readersProfile', $this->ReadersProfile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReadersProfile->create();
			if ($this->ReadersProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The readers profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readers profile could not be saved. Please, try again.'));
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
		if (!$this->ReadersProfile->exists($id)) {
			throw new NotFoundException(__('Invalid readers profile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReadersProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The readers profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readers profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReadersProfile.' . $this->ReadersProfile->primaryKey => $id));
			$this->request->data = $this->ReadersProfile->find('first', $options);
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
		$this->ReadersProfile->id = $id;
		if (!$this->ReadersProfile->exists()) {
			throw new NotFoundException(__('Invalid readers profile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReadersProfile->delete()) {
			$this->Session->setFlash(__('The readers profile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The readers profile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ReadersProfile->recursive = 0;
		$this->set('readersProfiles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ReadersProfile->exists($id)) {
			throw new NotFoundException(__('Invalid readers profile'));
		}
		$options = array('conditions' => array('ReadersProfile.' . $this->ReadersProfile->primaryKey => $id));
		$this->set('readersProfile', $this->ReadersProfile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ReadersProfile->create();
			if ($this->ReadersProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The readers profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readers profile could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ReadersProfile->exists($id)) {
			throw new NotFoundException(__('Invalid readers profile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReadersProfile->save($this->request->data)) {
				$this->Session->setFlash(__('The readers profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readers profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReadersProfile.' . $this->ReadersProfile->primaryKey => $id));
			$this->request->data = $this->ReadersProfile->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ReadersProfile->id = $id;
		if (!$this->ReadersProfile->exists()) {
			throw new NotFoundException(__('Invalid readers profile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReadersProfile->delete()) {
			$this->Session->setFlash(__('The readers profile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The readers profile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
