<?php
App::uses('AppController', 'Controller');
/**
 * Informants Controller
 *
 * @property Informant $Informant
 * @property PaginatorComponent $Paginator
 */
class InformantsController extends AppController {

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
		if ($this->request->is('post')) {
			$this->Session->write('radioField',$this->request->data['InformerId']);
			return $this->redirect(array('controller'=>'persons','action' => 'addInformer'));
		
		}else{
			$this->Informant->recursive = 0;
			$this->set('informants', $this->Paginator->paginate());
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Informant->hasAny(array('informer_id'=>$id))) {
			throw new NotFoundException(__('Invalid informant'));
		}
		$options = array('conditions' => array('Informant.informer_id'=> $id));
		$this->set('informant', $this->Informant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Informant->create();
			$temData=array();
			$temData['Informant']['first_name']=$this->request->data['Informant']['first_name'];
			$temData['Informant']['last_name']=$this->request->data['Informant']['last_name'];
			$temData['Informant']['street_no']=$this->request->data['Informant']['street_no'];
			$temData['Informant']['street_name']=$this->request->data['Informant']['street_name'];
			$temData['Informant']['city']=$this->request->data['Informant']['city'];
			$temData['Informant']['designation']=$this->request->data['Informant']['designation'];
			$temData['Informant']['home_telephone']=$this->request->data['Informant']['home_telephone'];
			$temData['Informant']['office_telephone']=$this->request->data['Informant']['office_telephone'];
			$temData['Informant']['mobile']=$this->request->data['Informant']['mobile'];
			//print_r($temData);
			
			//print_r($this->request->data);
			
			if ($this->Informant->save($temData)) {
				$this->Session->setFlash(__('The informant has been saved.'));
				
				$this->Session->write('informerid',$this->Informant->getLastInsertID());
				return $this->redirect(array('controller'=>'persons','action' => 'addInformer'));
			} else {
				$this->Session->setFlash(__('The informant could not be saved. Please, try again.'));
		}
		}
		//$informers = $this->Informant->Informer->find('list');
		$this->set(compact('informers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	
	public function edit($id = null) {
		if (!$this->Informant->exists($id)) {
			throw new NotFoundException(__('Invalid informant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Informant->save($this->request->data)) {
				$this->Session->setFlash(__('The informant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The informant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Informant.' . $this->Informant->primaryKey => $id));
			$this->request->data = $this->Informant->find('first', $options);
		}
		$informers = $this->Informant->Informer->find('list');
		$this->set(compact('informers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Informant->id = $id;
		if (!$this->Informant->exists()) {
			throw new NotFoundException(__('Invalid informant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Informant->delete()) {
			$this->Session->setFlash(__('The informant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The informant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
