
<link  href="<?php echo base_url(); ?>/acces/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
        <h3>Listado de Usuarios <a data-toggle="modal" data-target="#modalcreate"><button class="btn btn-success">Nuevo</button></a></h3>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>dni</th>
                        <th>TELEFONO</th>
                        <th>FECHA NACIEMIENTO</th>
                        <th>ROL</th>
                        <th>OPERACIONES</th>
                    </tr>
                    <?php foreach ($listar as $lista):  ?>
                    <tr>
                        <td><?php echo $lista->nombre?></td>
                        <td><?php echo $lista->Apellido_Pater." ".$lista->Apellido_Mater?></td>
                        <td><?php echo $lista->dni?></td>
                        <td><?php echo $lista->	Telefono?></td>
                        <td><?php echo $lista->fecha_Naci?></td>
                        <td><?php echo $lista->Nombre_rol?></td>
                        <td><a href="" <button class="btn btn-primary editar">Ediatr</button></a>
                            <a href="<?php echo base_url('Usuario/delete/').$lista->idPersona;?>" <button class="btn btn-success editar">eliminar</button></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>








<div class="modal fade modal-slide-in-right" aria-hidden="true"
     role="dialog" tabindex="-1" id="modalcreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <center></center>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url(); ?>Usuario/guardar">
                <div class="row">

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">nombre</label>
                            <input type="text" class="form-control" id="nombre" required="Campo Obligatorio"  name="nombre"  >
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellido_pa" required="Campo Obligatorio"
                                  name="apellido_pa"  placeholder="Apellido Paterno">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellido_ma" required="Campo Obligatorio"
                                     name="apellido_ma" >
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">N°DNI</label>
                            <input type="number" class="form-control" id="dni" required="Campo Obligatorio" name="dni"  placeholder="Telefono">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="number" class="form-control" id="telefono" required="Campo Obligatorio"
                                  name="telefono"  placeholder="telefono">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <label for="exampleInputEmail1">Fecha Cumpleaños</label>
                        <div class="input-group date"  data-provide="datepicker">
                            <input type="text"  name="Fecha_cumple"  required="Campo Obligatorio" value="" id="date" class="form-control">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Rol</label>
                            <select id="rol" name="rol" class="form-control" >
                                <option value="">Selecciona Rol</option>
                                <?php foreach ($rol as $role):?>
                                    <option value="<?php echo $role->idRoles;?>"><?php echo $role->Nombre_rol;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>


                    </div>
                </div>

                <center>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit"  class="btn btn-success" id="guardar">
                    </div>
                </center>
            </div>
            </form>
        </div>

        </div>

    </div>

</div>


<script src="<?php echo base_url(); ?>/acces/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
