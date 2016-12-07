<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TEsp Controller
 *
 * @property \App\Model\Table\TEspTable $TEsp
 */
class TEspController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tEsp = $this->paginate($this->TEsp);

        $this->set(compact('tEsp'));
        $this->set('_serialize', ['tEsp']);
    }

    /**
     * View method
     *
     * @param string|null $id T Esp id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tEsp = $this->TEsp->get($id, [
            'contain' => []
        ]);

        $this->set('tEsp', $tEsp);
        $this->set('_serialize', ['tEsp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tEsp = $this->TEsp->newEntity();
        if ($this->request->is('post')) {
            $tEsp = $this->TEsp->patchEntity($tEsp, $this->request->data);
            if ($this->TEsp->save($tEsp)) {
                $this->Flash->success(__('The t esp has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t esp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tEsp'));
        $this->set('_serialize', ['tEsp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id T Esp id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tEsp = $this->TEsp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tEsp = $this->TEsp->patchEntity($tEsp, $this->request->data);
            if ($this->TEsp->save($tEsp)) {
                $this->Flash->success(__('The t esp has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t esp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tEsp'));
        $this->set('_serialize', ['tEsp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id T Esp id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tEsp = $this->TEsp->get($id);
        if ($this->TEsp->delete($tEsp)) {
            $this->Flash->success(__('The t esp has been deleted.'));
        } else {
            $this->Flash->error(__('The t esp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
