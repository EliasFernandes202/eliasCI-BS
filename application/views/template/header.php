<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
    <head>
        <meta charset="UTF-8" >
        <title>Projeto Aulas</title>
        <link rel="shortcut icon" type="image/jpg" href="<?php base_url ();?>imagem/favicon.icon"/>

        <meta http-equiv="Content-Language" content="pt-br">

        <!-- Bootstrap Core CSS-->

        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('assets/js/bootstrap.min.js') ?>" rel="stylesheet"> 
        

        <!-- Data Table ONLINE-->

        <!--<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"> 
       <link href=" //cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" rel="stylesheet"> -->


        <!-- Data Table OFFLINE-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/datatables.min.css') ?>" />

        <script  src="<?php echo base_url('DataTables/jquery.min.js') ?>"></script>


    </head>
    <body>
        <div class="container">

            <?php
            if ($this->session->userdata('estou_logado')) {
                ?>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">ctOS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>


                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cadastro
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>alunos">Alunos</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>professor">Professor</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuario">Usuário</a>



                                </div>
                            </li>

                        </ul>

                        <div class="col-lg-8 col-md-8 col-8"></div>

                        <form class="form-inline my-2 my-lg-0">
                            <a>  <?php
                                if ($this->session->userdata('estou_logado')) {
                                    echo $this->session->userdata('logado')->nomeUsuario;
                                }
                                ?></a>


                            <div class="col-lg-1 col-md-1 col-1"></div>
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>login/sair">Sair</a>

                        </form>
                    </div>
                </nav>


                <?php
            }
            ?>
 