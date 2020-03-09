<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start ();
if (isset($_SESSION['nombre'])){

}else{
  header('location:login.php');
}

$usuario = $_SESSION['nombre'];

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/ventas.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light text-white" id="barra">
    <a class="navbar-brand text-white" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Inicia Sesion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-white" href="#">Administrador</a>
            <a class="dropdown-item text-white" href="#">Colaborador</a>
            <a class="dropdown-item text-white" href="#">RRHH</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container col-xl-10" id="caja">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#ventas">Ventas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#compras">Compras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#reparacion">Reparacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#inventario">Inventario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" data-toggle="tab" href="#configuracion">Configuracion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#historiales">Historiales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#"><?php $usuario ?></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
          aria-expanded="false">hola <?php echo $_SESSION['nombre'] ?> </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active show text-white text-center" id="home">
        <br>
        <h1>Bienvenido al sistema <?php echo $_SESSION['nombre'] ?></h1>
        <div class="card" style="width: 18rem;">
          <img src="img/user.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nombre del Usuario <?php echo $usuario ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Cambiar foto de perfil
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="file" class="btn-primary form-control-file" id="exampleFormControlFile1">

                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="tab-pane fade active" id="ventas">
        <div class="container-fluid" style="" id="subcaja1">
          <div class="row">
            <div class="col-xl-8" style="">
              <div class="container-fluid" style="margin-left:0;">
                <div class="row">
                  <div class="col-xl-3" style="padding:0;">
                    <br>
                    <label for="jaja"></label>Fecha
                    <input class="form-control" type="text" placeholder="Fecha" readonly>
                  </div>
                  <div class="col-xl-3" style="padding:0;">
                    <br>
                    <label for=""></label>Cliente
                    <input class="form-control" type="text" placeholder="<?php echo $usuario ?>" readonly>
                  </div>
                  <div class="col-xl-3" style="padding:0;">
                    <br>
                    <label for=""></label>ID Cliente
                    <input class="form-control" type="text" placeholder="" readonly>
                  </div>
                  <div class="col-xl-3" style="padding:0;">
                    <br>
                    <label for=""></label>Factura No.
                    <input class="form-control" type="text" placeholder="" readonly>
                  </div>

                </div>
              </div>


              <div class="container-fluid">
                <div class="row">
                  <div class="col-xl-3" style="padding: 0;">
                    <label for=""></label>Producto
                    <select class="form-control">
                      <option>Seleccione Producto</option>
                      <option>Celular</option>
                      <option>Repuesto</option>
                      <option>Reparacion</option>
                    </select>
                  </div>
                  <div class="col-xl-3" style="padding: 0">
                    <label for=""></label>Marca
                    <select class="form-control">
                      <option>Seleccione Marca</option>
                      <option>Samsung</option>
                      <option>Apple</option>
                      <option>Huawei</option>
                    </select>
                  </div>
                  <div class="col-xl-3" style="padding-top:15px;">
                    <button type="button" class="btn btn-success mt-1" data-toggle="modal" data-target="#exampleModal1">
                      Seleccione modelo
                    </button>

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-xl" id="exampleModal1" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar a factura</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-hover" style="margin-top: 20px;">
                              <thead>
                                <tr class="table-primary">
                                  <th scope="col">Cantidad</th>
                                  <th scope="col">Descripcion</th>
                                  <th scope="col">Codigo</th>
                                  <th scope="col">Valor Unitario</th>
                                  <th scope="col">Valor Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="table-secondary">
                                  <th scope="row">Secondary</th>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td><button class="btn btn-primary ">Agregar</button></td>
                                </tr>
                                <tr class="table-success">
                                  <th scope="row">Success</th>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td><button class="btn btn-primary ">Agregar</button></td>
                                </tr>
                                <tr class="table-danger">
                                  <th scope="row">Danger</th>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td><button class="btn btn-primary ">Agregar</button></td>
                                </tr>
                                <tr class="table-warning">
                                  <th scope="row">Warning</th>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td><button class="btn btn-primary ">Agregar</button></td>
                                </tr>
                                <tr class="table-info">
                                  <th scope="row">Info</th>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td><button class="btn btn-primary ">Agregar</button></td>
                                </tr>
                                <tr class="table-light">
                                  <th scope="row">Light</th>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td>Column content</td>
                                  <td><button class="btn btn-primary ">Agregar</button></td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>  
                      </div>
                    </div>


                  </div>

                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xl-12" style="padding:0;">
                        <table class="table table-hover" style="margin-top: 20px;">
                          <thead>
                            <tr class="table-primary">
                              <th scope="col">Cantidad</th>
                              <th scope="col">Descripcion</th>
                              <th scope="col">Codigo</th>
                              <th scope="col">Valor Unitario</th>
                              <th scope="col">Valor Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="table-secondary">
                              <th scope="row">Secondary</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-success">
                              <th scope="row">Success</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-danger">
                              <th scope="row">Danger</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-warning">
                              <th scope="row">Warning</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-info">
                              <th scope="row">Info</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-light">
                              <th scope="row">Light</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xl-3">
                        <p>Metodo de pago</p>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline1" name="customRadioInline1"
                            class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline1">Efectivo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline2" name="customRadioInline1"
                            class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline2">Tarjeta de credito</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline3" name="customRadioInline1"
                            class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline3">Tarjeta de debito</label>
                        </div>
                      </div>
                      <div col-xl-3>
                        <br>
                        <label for="jaja"></label>Sub total
                        <input class="form-control" type="text" placeholder="Fecha" readonly>
                      </div>
                      <div col-xl-3>
                        <br>
                        <label for=""></label>ISV %
                        <input class="form-control" type="text" placeholder="" readonly>
                      </div>
                      <div col-xl-3>
                        <br>
                        <label for=""></label>Total
                        <input class="form-control" type="text" placeholder="" readonly>
                      </div>

                    </div>
                  </div>

                  <div class="container-fluid" style="">
                    <div class="row">
                      <div class="col-xl-2" style="margin:auto; margin-top:10px;">
                        <button type="button" class="btn btn-primary">Imprimir Factura</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-xl-4" style="margin-top: 10px;">
              <div class="card text-white bg-primary mb-3" style="height: 500px;">
                <div class="card-header">Panel Auxiliar</div>
                <div class="card-body">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="tab-pane fade" id="compras">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
          labore
          velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
          Qui
          photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
          nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>

      </div>
      <div class="tab-pane fade" id="reparacion">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
          labore
          velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
          Qui
          photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
          nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
      </div>
      <div class="tab-pane fade" id="inventario">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
          labore
          velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
          Qui
          photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
          nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
      </div>
      <div class="tab-pane fade" id="configuracion">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
          labore
          velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
          Qui
          photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
          nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
      </div>
      <div class="tab-pane fade" id="historiales">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
          labore
          velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
          Qui
          photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
          nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
      </div>
      <div class="tab-pane fade" id="dropdown1">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny
          pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
          locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit
          cred pitchfork.</p>
      </div>
      <div class="tab-pane fade" id="dropdown2">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse
          gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf
          cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
          farm-to-table VHS viral locavore cosby sweater.</p>
      </div>
    </div>

  </div>


  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>