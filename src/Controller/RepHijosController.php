<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RepHijos Controller
 *
 * @property \App\Model\Table\RepHijosTable $RepHijos
 */
class RepHijosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $repHijos = $this->paginate($this->RepHijos);

        $this->set(compact('repHijos'));
        $this->set('_serialize', ['repHijos']);
    }

    /**
     * View method
     *
     * @param string|null $id Rep Hijo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repHijo = $this->RepHijos->get($id, [
            'contain' => []
        ]);

        $this->set('repHijo', $repHijo);
        $this->set('_serialize', ['repHijo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repHijo = $this->RepHijos->newEntity();
        if ($this->request->is('post')) {
            $repHijo = $this->RepHijos->patchEntity($repHijo, $this->request->data);
            if ($this->RepHijos->save($repHijo)) {
                $this->Flash->success(__('The rep hijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rep hijo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('repHijo'));
        $this->set('_serialize', ['repHijo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rep Hijo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repHijo = $this->RepHijos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repHijo = $this->RepHijos->patchEntity($repHijo, $this->request->data);
            if ($this->RepHijos->save($repHijo)) {
                $this->Flash->success(__('The rep hijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rep hijo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('repHijo'));
        $this->set('_serialize', ['repHijo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rep Hijo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repHijo = $this->RepHijos->get($id);
        if ($this->RepHijos->delete($repHijo)) {
            $this->Flash->success(__('The rep hijo has been deleted.'));
        } else {
            $this->Flash->error(__('The rep hijo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
