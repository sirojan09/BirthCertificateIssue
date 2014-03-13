<?php
App::uses('AppController', 'Controller');
/**
 * Pendingapplications Controller
 *
 * @property Pendingapplication $Pendingapplication
 * @property PaginatorComponent $Paginator
 */
class PendingapplicationsController extends AppController {

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
		$this->Pendingapplication->recursive = 0;
		$this->set('pendingapplications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pendingapplication->hasAny(array('Pendingapplication.application_id'=>$id))) {
			throw new NotFoundException(__('Invalid application'));
		}
		$options = array('conditions' => array('Pendingapplication.application_id'=> $id));
		$result= $this->Pendingapplication->find('first', $options);
		$this->Session->write('applicationDetails',$result);
		if($result['Pendingapplication']['birth_certificate_id']!=null){
			return $this->redirect(array('controller'=>'processedRegistrations','action'=>'view',$result['Pendingapplication']['birth_certificate_id']));
		}else{
			
			//print_r($this->Session->read('applicationDetails'));
			return $this->redirect(array('controller'=>'processedRegistrations','action'=>'view'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pendingapplication->create();
			if ($this->Pendingapplication->save($this->request->data)) {
				$this->Session->setFlash(__('The pendingapplication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pendingapplication could not be saved. Please, try again.'));
			}
		}
		$birthCertificates = $this->Pendingapplication->BirthCertificate->find('list');
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
		if (!$this->Pendingapplication->exists($id)) {
			throw new NotFoundException(__('Invalid pendingapplication'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pendingapplication->save($this->request->data)) {
				$this->Session->setFlash(__('The pendingapplication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pendingapplication could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pendingapplication.' . $this->Pendingapplication->primaryKey => $id));
			$this->request->data = $this->Pendingapplication->find('first', $options);
		}
		$birthCertificates = $this->Pendingapplication->BirthCertificate->find('list');
		$this->set(compact('birthCertificates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pendingapplication->id = $id;
		if (!$this->Pendingapplication->exists()) {
			throw new NotFoundException(__('Invalid pendingapplication'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pendingapplication->delete()) {
			$this->Session->setFlash(__('The pendingapplication has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pendingapplication could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
