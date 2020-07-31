<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<title>Ejemplo</title>
		
		
		<link rel="stylesheet" href="<?= base_url()?>/public/bootstrap/css/bootstrap.min.css">
		<script src="<?= base_url()?>/public/js/jQuery.min.js"></script>
		<link rel="stylesheet" href="<?= base_url()?>/public/styles/styles.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url()?>">Gestion de Proyectos</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Ventanas</div>
                            <a class="nav-link collapsed" href="<?= base_url()?>tareas/index" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tareas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url()?>index.php/tareas/index">Mis tareas</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Todas las tareas</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                              Option
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Option
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       Guillermo Ayala
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <?php foreach ($proyectos as $p) : ?>
                     <div class="detalles col-lg-12 mt-4">
                        <input style="display:none" name="id" value="<?= $p["id_proyecto"]?>"/> 

                         <div class="contenido">
                        <div>
                            <h4><label><b><?= $p["nombreProyecto"]?></b></label></h4>
                        </div>
                            <hr style="background:white">
                                <div class="row">
                                     <div class="col-lg-6">
                                        <h5>Descripcion:</h5>
                                            <label><?= $p["descripcion"]?></label>
                                     </div>
                                      <div class="col-lg-6">
                                        <h5>Encargado:</h5>
                                        <img class="rounded-circle" width="5%" src="<?= base_url()?>/public/img/memo.jpg" />	
                                             <label><?= $p["nombre"]?></label> <label><?= $p["usuarios"]?></label>
                                    </div>
                               </div>
                               <div class="mt-4">
                                  <h5>Avance:</h5>
                                    <div class="progress">
  					  		            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?= $p["avance"]?>%"></div>
                                    </div>
                                        <div class="mt-3">		
										     <p>Estado:</p> <span class="badge badge-pill badge-warning"><?= $p["estado"]?></span>										
                                         </div>
                                      <div class="mt-4 footer-detail">
                                         <button class="btn btn-primary"  onclick='editarForm(<?= $p["id_proyecto"] ?>)'>Editar</button>
                                         <button class="btn btn-danger eliminar" type="submit">Eliminar</button>

                                         </div>
							 </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                   
                        <div class="col-lg-12 actividades">
                        <div class="mt-4">
                             <h4>Actividades Recientes</h4>
                        </div>
                        <table class="table table-striped mt-4">
                            <thead>
                        <tr>
                         <th scope="col">Actividad</th>
                         <th scope="col">Estado</th>
                         <th scope="col">Encargado</th>
                        <th scope="col">Fecha</th>
                        </tr>
                        </thead>
                          <tbody>
                                <tr>
                                    <th>Ajuste en UI</th>
                                    <th>Done</th>
                                    <th>Memo Ayala</th>
                                    <th>30 JUL 2020</th>
                                </tr>
                            
                            </tbody>
                        </table>

                    </div>   
                    </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Gestion de Proyectos 2020</div>
                            <div>
                                <a href="#">Guillermo Ayala</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>


                <!--Modal -->
                <div class="modal fade bd-example-modal-lg" id="modalProyecto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                            <div class="modal-header">
                                <div class="col-lg-12">
                                <h4>Proyecto</h4>          
                               </div>               
                            </div>

                            <form action="<?= site_url()?>/Proyectos/modificarProyecto/<?=$p['id_proyecto']?>" method="post">
                            <div class="modal-body">
                                <div class="col-lg-12">
                                <label for="" class='col-md-2' value="<?=$p["id_proyecto"]?>"  name="id_proyecto" id="id_proyecto" type="hidden"></label>
                                    <h6>Nombre del proyecto</h6>    
                                    <input type="text" class="form-control" placeholder="Nombre de la tarea" id="nombreProyecto">
                                </div>
                                 <div class="col-lg-12 mt-4">
                                     <h6>Descripcion</h6>
                                     <textarea class="form-control" id="descripcion"></textarea>

                                     <div class="col-lg-12 my-4 mt-4">
                                        <div>
                                        <h6>Avance</h6>                           
                                             <input type="range" class="custom-range" id="avance" step="10" value="<?= $p["avance"]?>" min="0" max="100">
                                        </div>
                                         <span class="font-weight-bold text-primary ml-2 valueSpan2" value="<?= $p["avance"]?>"></span>
                                     </div>

                                    
                                     <div class="row">
                                    <div class="col-lg-6 mt-4">     
                                            <h6>Estado</h6>                           
                                            <select class="form-control" id="estado">
                                                <?php
                                                foreach ($estados as $est) {?>
                                                <option value='<?= $est["id_estado"]?>'> <?=$est["nombreEstado"]?></option>
                                                 <?php }
                                                 ?>
                                             </select>                              
                                    </div>                                       
                                        <div class="col-lg-6 mt-4">     
                                        <h6>Encargado</h6>
                                             <select class="form-control">
                                             <?php
                                                foreach ($usuarios as $u) {?>
                                                <option value='<?= $u["id_Usuario"]?>'> <?=$u["nombre"]?> <?=$u["apellido"]?></option>
                                                 <?php }
                                                 ?>
                                             </select>  
                                    </div>
                                       
                                                                   
                                        </div>
                                       
                                   </div>
                                </div>
                            <div class="modal-footer mt-4">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="<?= base_url()?>/public/js/scripts.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script>
         
            //Slider de avance (range)
            $(document).ready(function() {

                const $valueSpan = $('.valueSpan2');
                const $value = $('#avance');
                $valueSpan.html($value.val());
                $value.on('input change', () => {

                $valueSpan.html($value.val());
                    }); 
                });

                
                //Editar Formulario modal
                function editarForm(proyectos) {
            
                 $.get('<?= site_url()?>/Proyectos/obtenerRegistro/'+proyectos).done(function(d){


                //Acceso al objeto
                const { data } = d;
                var array = d;
                console.log(d);

                //Envio de valores al modal
                document.getElementById('nombreProyecto').value = data[0].nombreProyecto;
                document.getElementById('avance').value = data[0].avance;
                document.getElementById('descripcion').value = data[0].descripcion;
                //Mostrar Modal
                $("#modalProyecto").modal('show');
               

            });
        }


        $(".eliminar").click(function(){
            id = document.getElementsByName("id")[0].value;
            console.log(id);
       
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '/Proyectos/eliminarProyecto/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  //$("#"+id).remove();
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });
        </script>
      
      <style>
          .actividades{
            padding: 30px 30px 30px 30px;
          }
          .contenido{
                background: cadetblue;
                color: white;
                padding: 30px 30px 30px 30px;
                border-radius: 20px;
          }
          .badge-warning {
                color: #fff;
                background-color: #ffc107;
         }
         .footer-detail{
            text-align: right;
         }
      </style>
      
              

    </body>
</html>
