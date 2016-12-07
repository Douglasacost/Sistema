<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SolicituddeConstancias Controller
 *
 * @property \App\Model\Table\SolicituddeConstanciasTable $SolicituddeConstancias
 */
class SolicituddeConstanciasController extends AppController
{
      /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $solicituddeConstancias = $this->paginate($this->SolicituddeConstancias);

        $this->set(compact('solicituddeConstancias'));
        $this->set('_serialize', ['solicituddeConstancias']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudde Constancia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicituddeConstancia = $this->SolicituddeConstancias->get($id, [
            'contain' => []
        ]);

        $this->set('solicituddeConstancia', $solicituddeConstancia);
        $this->set('_serialize', ['solicituddeConstancia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicituddeConstancia = $this->SolicituddeConstancias->newEntity();
        if ($this->request->is('post')) {
            $solicituddeConstancia = $this->SolicituddeConstancias->patchEntity($solicituddeConstancia, $this->request->data);
            if ($this->SolicituddeConstancias->save($solicituddeConstancia)) {
                $this->Flash->success(__('The solicitudde constancia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitudde constancia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('solicituddeConstancia'));
        $this->set('_serialize', ['solicituddeConstancia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudde Constancia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicituddeConstancia = $this->SolicituddeConstancias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicituddeConstancia = $this->SolicituddeConstancias->patchEntity($solicituddeConstancia, $this->request->data);
            if ($this->SolicituddeConstancias->save($solicituddeConstancia)) {
                $this->Flash->success(__('The solicitudde constancia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitudde constancia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('solicituddeConstancia'));
        $this->set('_serialize', ['solicituddeConstancia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudde Constancia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicituddeConstancia = $this->SolicituddeConstancias->get($id);
        if ($this->SolicituddeConstancias->delete($solicituddeConstancia)) {
            $this->Flash->success(__('The solicitudde constancia has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudde constancia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
