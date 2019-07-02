<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Alunos_model','alunos'); //'Alunos' é o alias para 'Alunos_model'
    }
    
    public function index(){ //define o que ele vai carregar
        $this->load->view('template/header');
        $lista['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro',$lista);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nome'] = mb_convert_case($this->input->post('nome'),MB_CASE_UPPER);
        $dados['rg'] = $this->imput->post('rg');
        $dados['endereco'] = mb_convert_case($this->input->post('endereco'),MB_CASE_UPPER);
        $dados['turma'] = mb_convert_case($this->input->post('turma'),MB_CASE_UPPER);
        $dados['idade'] = $this->input->post('idade');
        $this->alunos->inserir($dados);
        redirect('alunos');
    }
    
    
    
    
    
    
    
    
}