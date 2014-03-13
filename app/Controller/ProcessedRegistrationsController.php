<?php
App::uses('AppController', 'Controller');
/**
 * ProcessedRegistrations Controller
 *
 * @property ProcessedRegistration $ProcessedRegistration
 * @property PaginatorComponent $Paginator
 */
class ProcessedRegistrationsController extends AppController {

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
		$this->ProcessedRegistration->recursive = 0;
		$this->set('processedRegistrations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$appDet=$this->Session->read('applicationDetails');
		$this->set('submitDetials',$appDet);
		$this->set('processedRegistration',null);
		if($id!=null){
			if (!$this->ProcessedRegistration->hasAny(array('processedregistration.birth_certificate_id'=>$id))) {
				throw new NotFoundException(__('Invalid processed registration'));
			}
			$options = array('conditions' => array('ProcessedRegistration.birth_certificate_id' => $id));
			$this->set('processedRegistration', $this->ProcessedRegistration->find('first', $options));
			
		}else{
			
			$result=$this->ProcessedRegistration->find('first',array('conditions'=>array('processedregistration.name'=>$appDet['Pendingapplication']['applicant_name'],
			'processedregistration.father_full_name'=>$appDet['Pendingapplication']['father_full_name'],
			'processedregistration.mother_full_name'=>$appDet['Pendingapplication']['mother_full_name'],
			'processedregistration.date_of_birth'=>$appDet['Pendingapplication']['date_of_birth']
			)));
			if($result!=null){
				$options = array('conditions' => array('ProcessedRegistration.birth_certificate_id' => $result['ProcessedRegistration']['birth_certificate_id']));
				$this->set('processedRegistration', $this->ProcessedRegistration->find('first', $options));
				
			}else{
				
				
				//print_r($appDet);
			}
		
		}
		}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProcessedRegistration->create();
			if ($this->ProcessedRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The processed registration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processed registration could not be saved. Please, try again.'));
			}
		}
		$birthCertificates = $this->ProcessedRegistration->BirthCertificate->find('list');
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
		if (!$this->ProcessedRegistration->exists($id)) {
			throw new NotFoundException(__('Invalid processed registration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProcessedRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The processed registration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processed registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProcessedRegistration.' . $this->ProcessedRegistration->primaryKey => $id));
			$this->request->data = $this->ProcessedRegistration->find('first', $options);
		}
		$birthCertificates = $this->ProcessedRegistration->BirthCertificate->find('list');
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
		$this->ProcessedRegistration->id = $id;
		if (!$this->ProcessedRegistration->exists()) {
			throw new NotFoundException(__('Invalid processed registration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProcessedRegistration->delete()) {
			$this->Session->setFlash(__('The processed registration has been deleted.'));
		} else {
			$this->Session->setFlash(__('The processed registration could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
