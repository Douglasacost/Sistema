<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NivelTitulo Controller
 *
 * @property \App\Model\Table\NivelTituloTable $NivelTitulo
 */
class NivelTituloController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $nivelTitulo = $this->paginate($this->NivelTitulo);

        $this->set(compact('nivelTitulo'));
        $this->set('_serialize', ['nivelTitulo']);
    }

    /**
     * View method
     *
     * @param string|null $id Nivel Titulo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nivelTitulo = $this->NivelTitulo->get($id, [
            'contain' => []
        ]);

        $this->set('nivelTitulo', $nivelTitulo);
        $this->set('_serialize', ['nivelTitulo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nivelTitulo = $this->NivelTitulo->newEntity();
        if ($this->request->is('post')) {
            $nivelTitulo = $this->NivelTitulo->patchEntity($nivelTitulo, $this->request->data);
            if ($this->NivelTitulo->save($nivelTitulo)) {
                $this->Flash->success(__('The nivel titulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nivel titulo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nivelTitulo'));
        $this->set('_serialize', ['nivelTitulo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nivel Titulo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nivelTitulo = $this->NivelTitulo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nivelTitulo = $this->NivelTitulo->patchEntity($nivelTitulo, $this->request->data);
            if ($this->NivelTitulo->save($nivelTitulo)) {
                $this->Flash->success(__('The nivel titulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nivel titulo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nivelTitulo'));
        $this->set('_serialize', ['nivelTitulo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nivel Titulo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nivelTitulo = $this->NivelTitulo->get($id);
        if ($this->NivelTitulo->delete($nivelTitulo)) {
            $this->Flash->success(__('The nivel titulo has been deleted.'));
        } else {
            $this->Flash->error(__('The nivel titulo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
