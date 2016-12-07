<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jefepersonal Controller
 *
 * @property \App\Model\Table\JefepersonalTable $Jefepersonal
 */
class JefepersonalController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $jefepersonal = $this->paginate($this->Jefepersonal);

        $this->set(compact('jefepersonal'));
        $this->set('_serialize', ['jefepersonal']);
    }

    /**
     * View method
     *
     * @param string|null $id Jefepersonal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jefepersonal = $this->Jefepersonal->get($id, [
            'contain' => []
        ]);

        $this->set('jefepersonal', $jefepersonal);
        $this->set('_serialize', ['jefepersonal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jefepersonal = $this->Jefepersonal->newEntity();
        if ($this->request->is('post')) {
            $jefepersonal = $this->Jefepersonal->patchEntity($jefepersonal, $this->request->data);
            if ($this->Jefepersonal->save($jefepersonal)) {
                $this->Flash->success(__('The jefepersonal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jefepersonal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jefepersonal'));
        $this->set('_serialize', ['jefepersonal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jefepersonal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jefepersonal = $this->Jefepersonal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jefepersonal = $this->Jefepersonal->patchEntity($jefepersonal, $this->request->data);
            if ($this->Jefepersonal->save($jefepersonal)) {
                $this->Flash->success(__('The jefepersonal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The jefepersonal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jefepersonal'));
        $this->set('_serialize', ['jefepersonal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jefepersonal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jefepersonal = $this->Jefepersonal->get($id);
        if ($this->Jefepersonal->delete($jefepersonal)) {
            $this->Flash->success(__('The jefepersonal has been deleted.'));
        } else {
            $this->Flash->error(__('The jefepersonal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
