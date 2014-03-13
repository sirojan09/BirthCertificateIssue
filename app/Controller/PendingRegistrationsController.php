<?php
App::uses('AppController', 'Controller');

/**
 * PendingRegistrations Controller
 *
 * @property PendingRegistration $PendingRegistration
 * @property PaginatorComponent $Paginator
 */
class PendingRegistrationsController extends AppController {

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
	public function isAuthorized($user) {
    
    if (isset($user['role']) && $user['role'] === 'Registrar') {
        return true;
    }

    // Default deny
    return false;
}
	public function index() {
		$this->PendingRegistration->recursive = 0;
		$this->set('pendingRegistrations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PendingRegistration->hasAny(array('pendingregistration.birth_certificate_id'=>$id))) {
			throw new NotFoundException(__('Invalid pending registration'));
		}
		$options = array('conditions' => array('PendingRegistration.birth_certificate_id'  => $id));
		$this->set('pendingRegistration', $this->PendingRegistration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PendingRegistration->create();
			if ($this->PendingRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The pending registration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pending registration could not be saved. Please, try again.'));
			}
		}
		$birthCertificates = $this->PendingRegistration->BirthCertificate->find('list');
		$this->set(compact('birthCertificates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PendingRegistration->hasAny(array('pendingregistration.birth_certificate_id'=>$id))) {
			throw new NotFoundException(__('Invalid pending registration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PendingRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The pending registration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pending registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PendingRegistration.birth_certificate_id'  => $id));
			$this->request->data = $this->PendingRegistration->find('first', $options);
		}
		//$birthCertificates = $this->PendingRegistration->BirthCertificate->find('list');
		//$this->set(compact('birthCertificates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PendingRegistration->id = $id;
		if (!$this->PendingRegistration->exists()) {
			throw new NotFoundException(__('Invalid pending registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PendingRegistration->delete()) {
			$this->Session->setFlash(__('The pending registration has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pending registration could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	}
