<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">

        <a href="http://localhost/moisesBS/home.php" >Voltar</a><br><br>
        <h1 class="jumbotron-heading">Tabelas de Alunos</h1>
        <a href="http://localhost/moisesBS/insert.php" >Cadastro de Alunos</a><br><br>

        <form method="post" style="text-align:center;" class="form-group">
            <div class="form-group">
                <input name = "emp_id" class="form-control" type = "text" id = "emp_id" size="3" maxlength="2" placeholder="    ID">
            </div>
            <input name = "delete" type = "submit" id = "delete" value = "Deletar" class="btn btn-danger"><br><br>

            <div class="form-group">
                <input name="up_id" class="form-control" type="text" id = "up_id" size="2" maxlength="2" placeholder="    ID">
            </div>
            <input name = "update" type = "submit" id = "update" value = "Atualizar" class="btn btn-success"> <br><br><br>

            <div class="form-group">	
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome ...">
            </div>
            <input name="pesquisar" type="submit" value="Pesquisar" class="btn btn-success"><br><br>

            <input name="todos" type="submit" value="Listar Todos" class="btn btn-success"><br><br>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>