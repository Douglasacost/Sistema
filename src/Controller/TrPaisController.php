<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrPais Controller
 *
 * @property \App\Model\Table\TrPaisTable $TrPais
 */
class TrPaisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trPais = $this->paginate($this->TrPais);

        $this->set(compact('trPais'));
        $this->set('_serialize', ['trPais']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Pai id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $tSexo = $this->TSexo->get($id, [
          'contain' => ['datPerDocAdm']
        ]);

        $this->set('trPai', $trPai);
        $this->set('_serialize', ['trPai']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trPai = $this->TrPais->newEntity();
        if ($this->request->is('post')) {
            $trPai = $this->TrPais->patchEntity($trPai, $this->request->data);
            if ($this->TrPais->save($trPai)) {
                $this->Flash->success(__('The tr pai has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr pai could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trPai'));
        $this->set('_serialize', ['trPai']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Pai id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trPai = $this->TrPais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trPai = $this->TrPais->patchEntity($trPai, $this->request->data);
            if ($this->TrPais->save($trPai)) {
                $this->Flash->success(__('The tr pai has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr pai could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trPai'));
        $this->set('_serialize', ['trPai']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Pai id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trPai = $this->TrPais->get($id);
        if ($this->TrPais->delete($trPai)) {
            $this->Flash->success(__('The tr pai has been deleted.'));
        } else {
            $this->Flash->error(__('The tr pai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
