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
		<title>Gestor de proyectos</title>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

		<link rel="stylesheet" href="<?= base_url()?>/public/bootstrap/css/bootstrap.min.css">
		<script src="<?= base_url()?>/public/js/jQuery.min.js"></script>
        <link rel="stylesheet" href="<?= base_url()?>/public/styles/styles.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
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
                            <a class="nav-link">
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
                   
                        <h1 id="app-2" v-bind:title="message" class="mt-4">Proyectos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" onclick="nuevoProyecto()">Nuevo Proyecto</li>
                        </ol>
                        <div class="row">

                        <?php foreach ($proyectos as $p) : ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
								<div class="card-header"><h5><?= $p["nombreProyecto"]?></h5></div>
									<div class="card-body">
										<p><?= $p["descripcion"]?></p>
										<div class="progress">
  										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?= $p["avance"]?>%"></div>
										 </div>
										 <div class="mt-3">		
										 <p>Estado:</p> <span class="badge badge-pill badge-warning"><?= $p["estado"]?></span>										
										 </div>
									</div>
									
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                      
                                    <a class='btn btn-danger' href="<?php echo base_url('/index.php/Proyectos/detalle/'.$p['id_proyecto']);?>">Ver detalles</a>

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
							</div>
                        <?php endforeach; ?>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="row">
                        <div class="col-lg-6">
                            <canvas id="myChart"></canvas>
                        </div> 
                        <div class="col-lg-6">
                            <canvas id="myChart2"></canvas>
                        </div> 
                        </div>
                       
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
            </div>
        </div>


        <div class="modal fade bd-example-modal-lg" id="modalProyecto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                            <div class="modal-header">
                                <div class="col-lg-12">
                                <h4>Proyecto</h4>          
                               </div>               
                            </div>
                            <form action="<?= site_url()?>/Proyectos/guardarProyecto/" method="post">

                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <h6>Nombre del proyecto</h6>    
                                    <input type="text" class="form-control" placeholder="Nombre del proyecto" name="nombreProyecto" id="nombreProyecto">
                                </div>
                                 <div class="col-lg-12 mt-4">
                                     <h6>Descripcion</h6>
                                     <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                     <div class="col-lg-12  mt-4">
                                        <div>
                                        <h6>Avance</h6>
                                             <span class="font-weight-bold text-primary ml-2 valueSpan2"></span>                  
                                             <input type="range" class="custom-range" id="avance" step="10" value="0" min="0" max="100">
                                        </div>
                                         
                                     </div>
                                     <div class="row">
                                    <div class="col-lg-6 mt-4">     
                                            <h6>Estado</h6>                           
                                            <select class="form-control"  name="id_estado" id="id_estado">
                                                <?php
                                                foreach ($estados as $est) {?>
                                                <option  value='<?= $est["id_estado"]?>'> <?=$est["nombreEstado"]?></option>
                                                 <?php }
                                                 ?>
                                             </select>                              
                                    </div>                                       
                                        <div class="col-lg-6 mt-4">     
                                             <h6>Encargado</h6>
                                        <select class="form-control" id="id_Usuario" name="id_Usuario">
                                             <?php
                                                foreach ($usuarios as $u) {?>
                                                <option value='<?= $u["id_Usuario"]?>'> <?=$u["nombre"]?> <?=$u["apellido"]?></option>
                                                 <?php }
                                                 ?>
                                         </select>                     
                                    </div>
                                       
                                   </div>
                                </div>
                            <div class="modal-footer mt-4">
                            <button  class="btn btn-primary"  type="submit">Guardar</button>
                            </div>
                         </form>
                            </div>
                        </div>
                    </div>
                </div> 

            <script>

                $(document).ready(function() {
                const $valueSpan = $('.valueSpan2');
                const $value = $('#avance');
                $valueSpan.html($value.val());
                $value.on('input change', () => {

                $valueSpan.html($value.val());
                }); 
            });




            function nuevoProyecto() {
                 $("#modalProyecto").modal('show');          
            }
              
            
            var app2 = new Vue({
            el: '#app-2',
            data: {
            message: 'Cargaste esta pagina el: ' + new Date().toLocaleString()
            }   
        })

            </script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="<?= base_url()?>/public/js/scripts.js"></script>
        <script src="<?= base_url()?>/public/js/graficos.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
      
    </body>
</html>
