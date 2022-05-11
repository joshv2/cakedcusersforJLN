<?php
declare(strict_types=1);

/**
 * Copyright 2010 - 2019, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2018, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace CakeDC\Users\Controller\Traits;

use Cake\Utility\Inflector;

/**
 * Covers the baked CRUD actions, note we could use Crud Plugin too
 *
 * @property \Cake\Http\ServerRequest $request
 */
trait SimpleCrudTrait
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $table = $this->loadModel();
        $tableAlias = $table->getAlias();
        $this->set($tableAlias, $this->paginate($table));
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Http\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $table = $this->loadModel();
        $tableAlias = $table->getAlias();
        $entity = $table->get($id, [
            'contain' => ['Types'],
        ]);
        $this->set($tableAlias, $entity);
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
    }

    /**
     * Add method
     *
     * @return mixed Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $table = $this->loadModel();
        $tableAlias = $table->getAlias();
        $entity = $table->newEmptyEntity();
        if (!empty($this->request->getData('role'))) {
            $entity->role = $this->request->getData('role');
        } else {
            $entity->role = '3';
        }
        $this->set($tableAlias, $entity);
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
        if (!$this->getRequest()->is('post')) {
            return;
        }
        $postData = $this->getRequest()->getData();
        if ('1' == $postData['role']){
            $postData['is_superuser'] = 1;
        } elseif ($postData['role'] > 0) {
            $postData['is_superuser'] = 0;
        }
        $entity = $table->patchEntity($entity, $postData);
        $singular = Inflector::singularize(Inflector::humanize($tableAlias));
        if ($table->save($entity)) {
            $this->Flash->success(__d('cake_d_c/users', 'The {0} has been saved', $singular));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__d('cake_d_c/users', 'The {0} could not be saved', $singular));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return mixed Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Http\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $table = $this->loadModel();
        $tableAlias = $table->getAlias();
        $entity = $table->get($id, [
            'contain' => [],
        ]);
        $this->set($tableAlias, $entity);
        $this->set('tableAlias', $tableAlias);
        $this->set('_serialize', [$tableAlias, 'tableAlias']);
        if (!$this->getRequest()->is(['patch', 'post', 'put'])) {
            return;
        }
        $postData = $this->getRequest()->getData();
        if ('0' == $postData['role']){
            $postData['role'] = 'superuser';
            $postData['is_superuser'] = 1;
        } elseif ('1' == $postData['role']) {
            $postData['role'] = 'user';
            $postData['is_superuser'] = 0;
        }
        $entity = $table->patchEntity($entity, $postData);
        $singular = Inflector::singularize(Inflector::humanize($tableAlias));
        if ($table->save($entity)) {
            $this->Flash->success(__d('cake_d_c/users', 'The {0} has been saved', $singular));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__d('cake_d_c/users', 'The {0} could not be saved', $singular));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response Redirects to index.
     * @throws \Cake\Http\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->getRequest()->allowMethod(['post', 'delete']);
        $table = $this->loadModel();
        $tableAlias = $table->getAlias();
        $entity = $table->get($id, [
            'contain' => [],
        ]);
        $singular = Inflector::singularize(Inflector::humanize($tableAlias));
        if ($table->delete($entity)) {
            $this->Flash->success(__d('cake_d_c/users', 'The {0} has been deleted', $singular));
        } else {
            $this->Flash->error(__d('cake_d_c/users', 'The {0} could not be deleted', $singular));
        }

        return $this->redirect(['action' => 'index']);
    }
}
