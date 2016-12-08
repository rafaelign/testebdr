<?php

class TarefasController extends AppController {

    public $uses = array('Tarefa');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->RequestHandler->setContent('json','text/x-json');
        $this->RequestHandler->renderAs($this, 'json');
        // $this->layout = 'json/default';
    }

    public function index() {
        $tarefas = array();
        foreach ($this->Tarefa->find('all', array('order' => array('prioridade DESC'))) as $t) {
            $tarefas[] = $t['Tarefa'];
        }
        $this->set(array(
            'tarefas' => $tarefas,
            '_serialize' => array('tarefas')
        ));
    }

    public function view($id) {
        $tarefa = $this->Tarefa->findById($id);
        if (!empty($tarefa)) {
            $tarefa = $tarefa['Tarefa'];
        }
        $this->set(array(
            'tarefa' => $tarefa,
            '_serialize' => array('tarefa')
        ));
    }

    public function add() {
        $this->Tarefa->create();
        if ($this->Tarefa->save($this->request->data)) {
            $message = 'Tarefa adicionada com sucesso!';
        } else {
            $message = 'Erro ao adicionar tarefa.';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function edit($id) {
        $this->Tarefa->id = $id;
        $data = $this->request->input('json_decode');
        if ($this->Tarefa->save($data)) {
            $message = 'Tarefa alterada com sucesso!';
        } else {
            $message = 'Erro ao alterar tarefa.';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function update($id) {
        $this->Tarefa->id = $id;
        if ($this->Tarefa->save($this->request->data)) {
            $message = 'Tarefa alterada com sucesso!';
        } else {
            $message = 'Erro ao alterar tarefa.';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id) {
        if ($this->Tarefa->delete($id)) {
            $message = 'Tarefa removida com sucesso!';
        } else {
            $message = 'Erro ao remover tarefa.';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}
