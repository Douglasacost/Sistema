<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Planteles2 Controller
 *
 * @property \App\Model\Table\Planteles2Table $Planteles2
 */
class Planteles2Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $planteles2 = $this->paginate($this->Planteles2);

        $this->set(compact('planteles2'));
        $this->set('_serialize', ['planteles2']);
    }

    /**
     * View method
     *
     * @param string|null $id Planteles2 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planteles2 = $this->Planteles2->get($id, [
            'contain' => []
        ]);

        $this->set('planteles2', $planteles2);
        $this->set('_serialize', ['planteles2']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planteles2 = $this->Planteles2->newEntity();
        if ($this->request->is('post')) {
            $planteles2 = $this->Planteles2->patchEntity($planteles2, $this->request->data);
            if ($this->Planteles2->save($planteles2)) {
                $this->Flash->success(__('The planteles2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The planteles2 could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('planteles2'));
        $this->set('_serialize', ['planteles2']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Planteles2 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planteles2 = $this->Planteles2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planteles2 = $this->Planteles2->patchEntity($planteles2, $this->request->data);
            if ($this->Planteles2->save($planteles2)) {
                $this->Flash->success(__('The planteles2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The planteles2 could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('planteles2'));
        $this->set('_serialize', ['planteles2']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Planteles2 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planteles2 = $this->Planteles2->get($id);
        if ($this->Planteles2->delete($planteles2)) {
            $this->Flash->success(__('The planteles2 has been deleted.'));
        } else {
            $this->Flash->error(__('The planteles2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
