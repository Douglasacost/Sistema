<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TitulosPrinc Controller
 *
 * @property \App\Model\Table\TitulosPrincTable $TitulosPrinc
 */
class TitulosPrincController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $titulosPrinc = $this->paginate($this->TitulosPrinc);

        $this->set(compact('titulosPrinc'));
        $this->set('_serialize', ['titulosPrinc']);
    }

    /**
     * View method
     *
     * @param string|null $id Titulos Princ id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $titulosPrinc = $this->TitulosPrinc->get($id, [
            'contain' => []
        ]);

        $this->set('titulosPrinc', $titulosPrinc);
        $this->set('_serialize', ['titulosPrinc']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $titulosPrinc = $this->TitulosPrinc->newEntity();
        if ($this->request->is('post')) {
            $titulosPrinc = $this->TitulosPrinc->patchEntity($titulosPrinc, $this->request->data);
            if ($this->TitulosPrinc->save($titulosPrinc)) {
                $this->Flash->success(__('The titulos princ has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The titulos princ could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('titulosPrinc'));
        $this->set('_serialize', ['titulosPrinc']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Titulos Princ id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $titulosPrinc = $this->TitulosPrinc->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $titulosPrinc = $this->TitulosPrinc->patchEntity($titulosPrinc, $this->request->data);
            if ($this->TitulosPrinc->save($titulosPrinc)) {
                $this->Flash->success(__('The titulos princ has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The titulos princ could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('titulosPrinc'));
        $this->set('_serialize', ['titulosPrinc']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Titulos Princ id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $titulosPrinc = $this->TitulosPrinc->get($id);
        if ($this->TitulosPrinc->delete($titulosPrinc)) {
            $this->Flash->success(__('The titulos princ has been deleted.'));
        } else {
            $this->Flash->error(__('The titulos princ could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
