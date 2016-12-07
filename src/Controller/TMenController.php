<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TMen Controller
 *
 * @property \App\Model\Table\TMenTable $TMen
 */
class TMenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tMen = $this->paginate($this->TMen);

        $this->set(compact('tMen'));
        $this->set('_serialize', ['tMen']);
    }

    /**
     * View method
     *
     * @param string|null $id T Man id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tMan = $this->TMen->get($id, [
            'contain' => []
        ]);

        $this->set('tMan', $tMan);
        $this->set('_serialize', ['tMan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tMan = $this->TMen->newEntity();
        if ($this->request->is('post')) {
            $tMan = $this->TMen->patchEntity($tMan, $this->request->data);
            if ($this->TMen->save($tMan)) {
                $this->Flash->success(__('The t man has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t man could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tMan'));
        $this->set('_serialize', ['tMan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id T Man id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tMan = $this->TMen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tMan = $this->TMen->patchEntity($tMan, $this->request->data);
            if ($this->TMen->save($tMan)) {
                $this->Flash->success(__('The t man has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t man could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tMan'));
        $this->set('_serialize', ['tMan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id T Man id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tMan = $this->TMen->get($id);
        if ($this->TMen->delete($tMan)) {
            $this->Flash->success(__('The t man has been deleted.'));
        } else {
            $this->Flash->error(__('The t man could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
