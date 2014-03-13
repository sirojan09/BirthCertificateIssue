<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 * @property PaginatorComponent $Paginator
 */
class ApplicationsController extends AppController {

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
		$this->Application->recursive = 0;
		$this->set('applications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Application->hasAny(array('application.application_id'=>$id))) {
			throw new NotFoundException(__('Invalid application'));
		}
		$options = array('conditions' => array('Application.application_id'=> $id));
		$result= $this->Application->find('first', $options);
		if($result['Application']['birth_certificate_id']!=null){
			return $this->redirect(array('controller'=>'processedRegistrations','action'=>'view',$result['Application']['birth_certificate_id']));
		}else{
			$this->Session->write('applicationDetails',$result);
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
			$this->Application->create();
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		}
		//$applications = $this->Application->Application->find('list');
		//$birthCertificates = $this->Application->BirthCertificate->find('list');
		//$this->set(compact('applications', 'birthCertificates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
			$this->request->data = $this->Application->find('first', $options);
		}
		$applications = $this->Application->Application->find('list');
		$birthCertificates = $this->Application->BirthCertificate->find('list');
		$this->set(compact('applications', 'birthCertificates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('The application has been deleted.'));
		} else {
			$this->Session->setFlash(__('The application could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function process($id=null){
		if (!$this->Application->hasAny(array('Application.application_id'=>$id))) {
			throw new NotFoundException(__('Invalid pending registration'));
		}
		if ($this->request->is(array('post', 'get'))) {
			$result=$this->Application->find('first',array('conditions'=>array('application_id'=>$id)));
			$result['Application']['status']='Processed';
			
			if ($this->Application->save($result)) {
				$this->Session->setFlash(__('The application has been processed.'));
				return $this->redirect(array('controller'=>'Pendingapplications','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be approved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Application.application_id'  => $id));
			$this->request->data = $this->Application->find('first', $options);
		}
	
	
	}
	public function sendMail($id=null){
		
	
	}
	
	
	}
