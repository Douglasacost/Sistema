<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jefesalatecnica Controller
 *
 * @property \App\Model\Table\JefesalatecnicaTable $Jefesalatecnica
 */
class JefesalatecnicaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $jefesalatecnica = $this->paginate($this->Jefesalatecnica);

        $this->set(compact('jefesalatecnica'));
        $this->set('_serialize', ['jefesalatecnica']);
    }

    /**
     * View method
     *
     * @param string|null $id Jefesalatecnica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jefesalatecnica = $this->Jefesalatecnica->get($id, [
            'contain' => []
        ]);

        $this->set('jefesalatecnica', $jefesalatecnica);
        $this->set('_serialize', ['jefesalatecnica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jefesalatecnica = $this->Jefesalatecnica->newEntity();
        if ($this->request->is('post')) {
            $jefesalatecnica = $this->Jefesalatecnica->patchEntity($jefesalatecnica, $this->request->data);
            if ($this->Jefesalatecnica->save($jefesalatecnica)) {
                $this->Flash->success(__('The jefesalatecnica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jefesalatecnica could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jefesalatecnica'));
        $this->set('_serialize', ['jefesalatecnica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jefesalatecnica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jefesalatecnica = $this->Jefesalatecnica->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jefesalatecnica = $this->Jefesalatecnica->patchEntity($jefesalatecnica, $this->request->data);
            if ($this->Jefesalatecnica->save($jefesalatecnica)) {
                $this->Flash->success(__('The jefesalatecnica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jefesalatecnica could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jefesalatecnica'));
        $this->set('_serialize', ['jefesalatecnica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jefesalatecnica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jefesalatecnica = $this->Jefesalatecnica->get($id);
        if ($this->Jefesalatecnica->delete($jefesalatecnica)) {
            $this->Flash->success(__('The jefesalatecnica has been deleted.'));
        } else {
            $this->Flash->error(__('The jefesalatecnica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
