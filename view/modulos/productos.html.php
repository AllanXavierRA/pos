<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Administrar productos
        </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar productos</button>

        </div>
        <div class="box-body">
            <table class="table table-bordered table-condensed table-hover dt-responsive tablas" width="100%">

            <thead>

              <tr>

                <th style= "width: 10px">#</th>
                <th>Imagen</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Precio de compra</th>
                <th>Precio de venta</th>
                <th>Agregado</th>
                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>

            <tr>

              <td>1</td>
              <td><img src="view/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>001</td>
              <td>Lorem ipsum dolor sit amet.</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>$ 10.00</td>
              <td>$ 5.00</td>
              <td>2017-12-11 12:05:32</td>
              <td>

                <div class="btn-gruop">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

            </tr>

            <tr>

              <td>1</td>
              <td><img src="view/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>001</td>
              <td>Lorem ipsum dolor sit amet.</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>$ 10.00</td>
              <td>$ 5.00</td>
              <td>2017-12-11 12:05:32</td>
              <td>

                <div class="btn-gruop">

                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>

              </td>

            </tr><tr>

              <td>1</td>
              <td><img src="view/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>001</td>
              <td>Lorem ipsum dolor sit amet.</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>$ 10.00</td>
              <td>$ 5.00</td>
              <td>2017-12-11 12:05:32</td>
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
  MODAL AGREGAR PRODUCTO
  ============-->

  <div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    
    <div class="modal-content">
    
    <form role="form" method="post" enctype="multipart/form-data">

      <div class="modal-header" style="background: #3c8dbc; color: white">  

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar producto</h4>

      </div>

      <div class="modal-body">

        <div class="box-body">

          <div class="form-group">

            
            <div class="input-group">
            
              <span class="input-group-addon">
                <i class="fa fa-code"></i>
              </span>

              <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>

            </div>
            
          </div>

          <div class="form-group">
 
            <div class="input-group">
            
              <span class="input-group-addon">
                <i class="fa fa-product-hunt"></i>
              </span>

              <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>

            </div>
            
          </div>

          <div class="form-group">
            
            <div class="input-group">
            
              <span class="input-group-addon">
                <i class="fa fa-th"></i>
              </span>

              <select class="form-control input-lg" name="nuevaCategoria">
                <option value="">Seleccionar categoria</option>
                <option value="PrimeraPrueba">PrimeraPrueba</option>
                <option value="SegundaPrueba">SegundaPrueba</option>
                <option value="TerceraPrueba">TerceraPrueba</option>
              </select>
            </div>
            
          </div>

          <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0" step="any" placeholder="Precio de compra" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-12 col-sm-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" step="any" placeholder="Precio de venta" required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

          <div class="form-group">
            
            <div class="panel">SUBIR IMAGEN</div>

            <input type="file" id="nuevaImagen" name="nuevaImagen">

            <p class="help-block">Peso máximo de la imagen 2MB</p>

            <img src="view/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">
            
          </div>

        </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">salir</button>
        
        <button type="submit" class="btn btn-primary">Guardar cambios</button>

      </div>

      </form>
      
    </div>

  </div>
</div>