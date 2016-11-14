<?php
namespace App\Controller;

/**
 * Maven2 Controller
 *
 * @property \App\Model\Table\Maven2Table $Maven2
 */
class Maven2Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->autoRender = false;
//        echo $this->request->url;
        return $this->redirect("http://120.52.73.22/repo.maven.apache.org/" . $this->request->url);
    }

    public function repo()
    {
        $this->autoRender = false;
//        echo $this->request->url;
        return $this->redirect("http://120.52.73.22/clojars.org/" . $this->request->url);
    }

    /**
     * View method
     *
     * @param string|null $id Maven2 id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maven2 = $this->Maven2->get($id, [
            'contain' => []
        ]);

        $this->set('maven2', $maven2);
        $this->set('_serialize', ['maven2']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maven2 = $this->Maven2->newEntity();
        if ($this->request->is('post')) {
            $maven2 = $this->Maven2->patchEntity($maven2, $this->request->data);
            if ($this->Maven2->save($maven2)) {
                $this->Flash->success(__('The maven2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maven2 could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maven2'));
        $this->set('_serialize', ['maven2']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maven2 id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maven2 = $this->Maven2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maven2 = $this->Maven2->patchEntity($maven2, $this->request->data);
            if ($this->Maven2->save($maven2)) {
                $this->Flash->success(__('The maven2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maven2 could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maven2'));
        $this->set('_serialize', ['maven2']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maven2 id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maven2 = $this->Maven2->get($id);
        if ($this->Maven2->delete($maven2)) {
            $this->Flash->success(__('The maven2 has been deleted.'));
        } else {
            $this->Flash->error(__('The maven2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
