<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 */
class PersonsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $components = array('Paginator');
    
	public function index() {
        $this->Person->recursive = 0;
		$this->set('persons', $this->Paginator->paginate());
    }
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->save($this->request->data)) {
				//$this->Session->setFlash(__('The person has been saved.'));
				$this->Session->write('id',$this->Person->getLastInsertID());
				return $this->redirect(array('controller'=>'informants','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		}
	}
	public function view(){
	
	}
	public function edit(){
	
	}
	public function delete(){
	
	}
	public function addInformer(){
		if ($this->request->is(array('post', 'get'))) {
			$id=$this->Session->read('id');
			$informer_id=$this->Session->read('informerid');
			$result=$this->Person->find('first',array('conditions'=>array('birth_certificate_id'=>$id)));
			$result['Person']['informer_id']=$informer_id;
			if ($this->Person->save($result)) {
				$this->Session->setFlash(__('Birth is Registered.'));
				//return $this->redirect(array('controller'=>'PendingRegistrations','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Birth registration could not be processed. Please, try again.'));
			}
		}
	}
	public function approve($id=null){
		if (!$this->Person->hasAny(array('Person.birth_certificate_id'=>$id))) {
			throw new NotFoundException(__('Invalid pending registration'));
		}
		if ($this->request->is(array('post', 'get'))) {
			$result=$this->Person->find('first',array('conditions'=>array('birth_certificate_id'=>$id)));
			$result['Person']['status']='Processed';
			
			if ($this->Person->save($result)) {
				$this->Session->setFlash(__('The pending registration has been approved.'));
				return $this->redirect(array('controller'=>'PendingRegistrations','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pending registration could not be approved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Person.birth_certificate_id'  => $id));
			$this->request->data = $this->Person->find('first', $options);
		}
	}
	public function reject($id=null){
		if (!$this->Person->hasAny(array('Person.birth_certificate_id'=>$id))) {
			throw new NotFoundException(__('Invalid pending registration'));
		}
		if ($this->request->is(array('post', 'get'))) {
			$result=$this->Person->find('first',array('conditions'=>array('birth_certificate_id'=>$id)));
			$result['Person']['status']='Rejected';
			print_r ($result);
			if ($this->Person->save($result)) {
				$this->Session->setFlash(__('The pending registration has been rejected.'));
				return $this->redirect(array('controller'=>'PendingRegistrations','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pending registration could not be rejected. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Person.birth_certificate_id'  => $id));
			$this->request->data = $this->Person->find('first', $options);
		}
	}
}
