<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiptrab Controller
 *
 * @property \App\Model\Table\TiptrabTable $Tiptrab
 */
class TiptrabController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiptrab = $this->paginate($this->Tiptrab);

        $this->set(compact('tiptrab'));
        $this->set('_serialize', ['tiptrab']);
    }

    /**
     * View method
     *
     * @param string|null $id Tiptrab id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiptrab = $this->Tiptrab->get($id, [
            'contain' => []
        ]);

        $this->set('tiptrab', $tiptrab);
        $this->set('_serialize', ['tiptrab']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiptrab = $this->Tiptrab->newEntity();
        if ($this->request->is('post')) {
            $tiptrab = $this->Tiptrab->patchEntity($tiptrab, $this->request->data);
            if ($this->Tiptrab->save($tiptrab)) {
                $this->Flash->success(__('The tiptrab has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tiptrab could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiptrab'));
        $this->set('_serialize', ['tiptrab']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiptrab id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiptrab = $this->Tiptrab->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiptrab = $this->Tiptrab->patchEntity($tiptrab, $this->request->data);
            if ($this->Tiptrab->save($tiptrab)) {
                $this->Flash->success(__('The tiptrab has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tiptrab could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiptrab'));
        $this->set('_serialize', ['tiptrab']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiptrab id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiptrab = $this->Tiptrab->get($id);
        if ($this->Tiptrab->delete($tiptrab)) {
            $this->Flash->success(__('The tiptrab has been deleted.'));
        } else {
            $this->Flash->error(__('The tiptrab could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
