<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carro Controller
 *
 * @property \App\Model\Table\CarroTable $Carro
 */
class CarroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Carro->find()
            ->contain(['Cliente']);
        $carros = $this->paginate($query);

        $this->set(compact('carros'));
    }

    /**
     * View method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carro = $this->Carro->get($id, contain: ['Cliente']);
        $this->set(compact('carro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carro = $this->Carro->newEmptyEntity();
        if ($this->request->is('post')) {
            $carro = $this->Carro->patchEntity($carro, $this->request->getData());
            if ($this->Carro->save($carro)) {
                $this->Flash->success(__('The carro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carro could not be saved. Please, try again.'));
        }
        $clientes = $this->Carro->Cliente->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
            'limit' => 200
        ])->all()->toArray();
        $this->set(compact('carro', 'clientes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carro = $this->Carro->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carro = $this->Carro->patchEntity($carro, $this->request->getData());
            if ($this->Carro->save($carro)) {
                $this->Flash->success(__('The carro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carro could not be saved. Please, try again.'));
        }
        $clientes = $this->Carro->Cliente->find('list', [
            'keyField' => 'id',
            'valueField' => 'nome',
            'limit' => 200
        ])->all()->toArray();
        $this->set(compact('carro', 'clientes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carro = $this->Carro->get($id);
        if ($this->Carro->delete($carro)) {
            $this->Flash->success(__('The carro has been deleted.'));
        } else {
            $this->Flash->error(__('The carro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
