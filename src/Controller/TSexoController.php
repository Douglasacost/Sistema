<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TSexo Controller
 *
 * @property \App\Model\Table\TSexoTable $TSexo
 */
class TSexoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tSexo = $this->paginate($this->TSexo);

        $this->set(compact('tSexo'));
        $this->set('_serialize', ['tSexo']);
    }

    /**
     * View method
     *
     * @param string|null $id T Sexo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tSexo = $this->TSexo->get($id, [
            'contain' => ['datPerDocAdm']
        ]);

        $this->set('tSexo', $tSexo);
        $this->set('_serialize', ['tSexo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tSexo = $this->TSexo->newEntity();
        if ($this->request->is('post')) {
            $tSexo = $this->TSexo->patchEntity($tSexo, $this->request->data);
            if ($this->TSexo->save($tSexo)) {
                $this->Flash->success(__('The t sexo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t sexo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tSexo'));
        $this->set('_serialize', ['tSexo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id T Sexo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tSexo = $this->TSexo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tSexo = $this->TSexo->patchEntity($tSexo, $this->request->data);
            if ($this->TSexo->save($tSexo)) {
                $this->Flash->success(__('The t sexo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The t sexo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tSexo'));
        $this->set('_serialize', ['tSexo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id T Sexo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tSexo = $this->TSexo->get($id);
        if ($this->TSexo->delete($tSexo)) {
            $this->Flash->success(__('The t sexo has been deleted.'));
        } else {
            $this->Flash->error(__('The t sexo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
