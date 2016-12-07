<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrInstitu Controller
 *
 * @property \App\Model\Table\TrInstituTable $TrInstitu
 */
class TrInstituController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trInstitu = $this->paginate($this->TrInstitu);

        $this->set(compact('trInstitu'));
        $this->set('_serialize', ['trInstitu']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Institu id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trInstitu = $this->TrInstitu->get($id, [
            'contain' => []
        ]);

        $this->set('trInstitu', $trInstitu);
        $this->set('_serialize', ['trInstitu']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trInstitu = $this->TrInstitu->newEntity();
        if ($this->request->is('post')) {
            $trInstitu = $this->TrInstitu->patchEntity($trInstitu, $this->request->data);
            if ($this->TrInstitu->save($trInstitu)) {
                $this->Flash->success(__('The tr institu has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr institu could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trInstitu'));
        $this->set('_serialize', ['trInstitu']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Institu id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trInstitu = $this->TrInstitu->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trInstitu = $this->TrInstitu->patchEntity($trInstitu, $this->request->data);
            if ($this->TrInstitu->save($trInstitu)) {
                $this->Flash->success(__('The tr institu has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr institu could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trInstitu'));
        $this->set('_serialize', ['trInstitu']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Institu id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trInstitu = $this->TrInstitu->get($id);
        if ($this->TrInstitu->delete($trInstitu)) {
            $this->Flash->success(__('The tr institu has been deleted.'));
        } else {
            $this->Flash->error(__('The tr institu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
