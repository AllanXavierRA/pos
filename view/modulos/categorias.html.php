<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Administrar categorías
        </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar categorías</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Agregar categoría</button>

        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tablas">

            <thead>

              <tr>

                <th style= "width: 10px">#</th>
                <th>Nombre</th>
                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>

            <tr>

              <td>1</td>
              <td>Prueba de categoria</td>
              <td>

                <div class="btn-gruop">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

            </tr>
             <tr>

              <td>1</td>
              <td>Prueba de categoria</td>
              <td>

                <div class="btn-gruop">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

            </tr> <tr>

              <td>1</td>
              <td>Prueba de categoria</td>
              <td>

                <div class="btn-gruop">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

            </tr>

            </tbody>

          </table>
        </div>
      
      </div>

    </section>

  </div>


  <!--============
  Modal
  ============-->

  <div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    
    <div class="modal-content">
    
    <form role="form" method="post">

      <div class="modal-header" style="background: #3c8dbc; color: white">  

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar categoría</h4>

      </div>

      <div class="modal-body">

        <div class="box-body">

          <div class="form-group">

            
            <div class="input-group">
            
              <span class="input-group-addon">
                <i class="fa fa-th"></i>
              </span>

              <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoría" required>

            </div>
            
          </div>


        </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">salir</button>
        
        <button type="submit" class="btn btn-primary">Guardar categoría</button>

      </div>

      </form>
      
    </div>

  </div>
</div>