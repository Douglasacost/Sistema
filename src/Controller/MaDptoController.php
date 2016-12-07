<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaDpto Controller
 *
 * @property \App\Model\Table\MaDptoTable $MaDpto
 */
class MaDptoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $maDpto = $this->paginate($this->MaDpto);

        $this->set(compact('maDpto'));
        $this->set('_serialize', ['maDpto']);
    }

    /**
     * View method
     *
     * @param string|null $id Ma Dpto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maDpto = $this->MaDpto->get($id, [
            'contain' => []
        ]);

        $this->set('maDpto', $maDpto);
        $this->set('_serialize', ['maDpto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maDpto = $this->MaDpto->newEntity();
        if ($this->request->is('post')) {
            $maDpto = $this->MaDpto->patchEntity($maDpto, $this->request->data);
            if ($this->MaDpto->save($maDpto)) {
                $this->Flash->success(__('The ma dpto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ma dpto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maDpto'));
        $this->set('_serialize', ['maDpto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ma Dpto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maDpto = $this->MaDpto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maDpto = $this->MaDpto->patchEntity($maDpto, $this->request->data);
            if ($this->MaDpto->save($maDpto)) {
                $this->Flash->success(__('The ma dpto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ma dpto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maDpto'));
        $this->set('_serialize', ['maDpto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ma Dpto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maDpto = $this->MaDpto->get($id);
        if ($this->MaDpto->delete($maDpto)) {
            $this->Flash->success(__('The ma dpto has been deleted.'));
        } else {
            $this->Flash->error(__('The ma dpto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
