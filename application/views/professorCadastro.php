<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Professor</h1><p></p>
        <?php echo form_open('professor/inserir'); ?>
        <form method="post" style="text-align:center" class="form-group">
            <div class="form-group">

                <input type="text" class="form-control form-control-lg" name="nome" placeholder="Nome"/><p></p>

                <input type="text" class="form-control form-control-lg" name="rg" placeholder="RG"/><p></p>

                <input type="text" class="form-control form-control-lg" name="endereco" placeholder="Endereço"/><p></p>

                <input type="text" class="form-control form-control-lg" name="turma" placeholder="Turma"/><p></p>

              
                <p></p>


                <input type="submit" name="acao" value="Salvar" class="btn btn-success"/>

                <input type="reset" class="btn btn-danger"/>



                <a class="btn btn-primary" href="<?php base_url(); ?> home" id="cancelar">Cancelar</a>

                <p></p>





                <?php form_close(); ?>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
</div>


<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Lista de Professor</h1><p></p>

        <form method="post" style="text-align:center" class="form-group">
            <div class="form-group">
                <table id="table_id" class="table table-striped table-bordered table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>Endereço</th>
                            <th>Turma</th>
                            <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($professor as $row):
                            ?>
                            <tr>


                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->rg; ?></td>
                                <td><?php echo $row->endereco; ?></td>
                                <td><?php echo $row->turma; ?></td>
                                
                                <td>
                                   <a class="glyphicon glyphicon-pencil" href="<?php echo base_url().'professor/editar/'.$row->id;?>"></a>
                                   <a class="glyphicon glyphicon-trash " href="<?php echo base_url().'professor/excluir/'.$row->id;?>"></a>
                               </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </tr>
                </tbody>
                </table>
       </form>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
</div>
<script>
   $(document).ready(function() {
    $('#table_id').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
    } );
} );
    
</script>