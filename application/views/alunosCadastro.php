<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Aluno</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <form method="post" style="text-align:center" class="form-group">
            <div class="form-group">

                <input type="text" class="form-control form-control-lg" name="nome" placeholder="Nome"/><p></p>

                <input type="text" class="form-control form-control-lg" name="rg" placeholder="RG"/><p></p>

                <input type="text" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/><p></p>

                <input type="text" class="form-control form-control-lg" name="turma" placeholder="Turma"/><p></p>

                <input type="text" class="form-control form-control-lg" name="idade" placeholder="Idade"/><p></p>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Masculino">
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Feminino">
                    <label class="form-check-label" for="inlineRadio2">Feminino</label>
                </div>
                <p></p>


                <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

                <input type="reset" class="btn btn-danger"/>





                <p></p>
                <a class="btn btn-primary" href="<?php base_url(); ?> home" id="cancelar">Cancelar</a>
                <?php form_close(); ?>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>