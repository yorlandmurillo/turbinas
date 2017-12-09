<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Turbina Controller
 *
 * @property \App\Model\Table\TurbinaTable $Turbina
 */
class TurbinaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $turbina = $this->paginate($this->Turbina);

        $this->set(compact('turbina'));
        $this->set('_serialize', ['turbina']);
    }

    /**
     * View method
     *
     * @param string|null $id Turbina id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turbina = $this->Turbina->get($id, [
            'contain' => []
        ]);

        $this->set('turbina', $turbina);
        $this->set('_serialize', ['turbina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turbina = $this->Turbina->newEntity();
        if ($this->request->is('post')) {
            $turbina = $this->Turbina->patchEntity($turbina, $this->request->data);
            if ($this->Turbina->save($turbina)) {
                $this->Flash->success(__('La turbina a sido salvada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La turbina no pudo ser guardada correctamente.'));
        }
        $this->set(compact('turbina'));
        $this->set('_serialize', ['turbina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Turbina id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turbina = $this->Turbina->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turbina = $this->Turbina->patchEntity($turbina, $this->request->data);
            if ($this->Turbina->save($turbina)) {
                $this->Flash->success(__('The turbina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turbina could not be saved. Please, try again.'));
        }
        $this->set(compact('turbina'));
        $this->set('_serialize', ['turbina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Turbina id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turbina = $this->Turbina->get($id);
        if ($this->Turbina->delete($turbina)) {
            $this->Flash->success(__('La turbina a sido eliminada correctamente.'));
        } else {
            $this->Flash->error(__('The turbina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
