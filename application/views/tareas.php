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
		<title>Tareas</title>
		
		<link rel="stylesheet" href="<?= base_url()?>/public/bootstrap/css/bootstrap.min.css">
		<script src="<?= base_url()?>/public/js/jQuery.min.js"></script>
		<link rel="stylesheet" href="<?= base_url()?>/public/styles/styles.css">


	
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Gestion de Proyectos</a>
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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tareas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Mis tareas</a>
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
                        <h1 class="mt-4">Tareas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <div class="col-lg-3">
                        <h5>TO DO</h5>                       
                            <div class="toDo mt-4">
                                 <div  class="card" data-toggle="modal" data-target="#modalTarea">
                                    <div class="card-body text-center"><b>+</b></div>
                                 </div>                                        
                                <div class="card mt-4" id="draggable-revert">
                                    <div class="card-body" >
                                        <p>Investigacion de elementos UI para el proyecto</p>
                                        <div class="mt-1">
                                               <img class="rounded-circle" width="15%" src="<?= base_url()?>/public/img/memo.jpg" /><h7>Guillermo Ayala</h7>	
                                            </div>
                                        <div class="mt-2">                                     
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">Research</span>	
										 </div>
                                    </div>
                                </div>
							</div>										
                        </div>
                        <div class="col-lg-3">
                        <h5>IN PROGRESS</h5>
                            <div class="inProgress mt-4">
                                <div class="card" data-toggle="modal" data-target="#modalTarea">
                                    <div class="card-body text-center"><b>+</b></div>
                                 </div>                     
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Maquetacion ve ventanas html</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">HTML</span>	
										 </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Maquetacion ve ventanas html</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">HTML</span>	
										 </div>
                                    </div>
                                </div>
							</div>										
                        </div>
                        <div class="col-lg-3">
                        <h5>DONE</h5>
                            <div class="Done mt-4"> 
                            <div class="card" data-toggle="modal" data-target="#modalTarea">
                                    <div class="card-body text-center"><b>+</b></div>
                                 </div>                    
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Importacion de frameworks</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">Framworks</span>	
										 </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Maquetacion ve ventanas html</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">HTML</span>	
										 </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Maquetacion ve ventanas html</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">HTML</span>	
										 </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Maquetacion ve ventanas html</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">HTML</span>	
										 </div>
                                    </div>
                                </div>
							</div>										
                        </div>
                        <div class="col-lg-3">
                        <h5>REVIEW</h5>
                            <div class="review mt-4">
                            <div class="card" data-toggle="modal" data-target="#modalTarea">
                                    <div class="card-body text-center"><b>+</b></div>
                                 </div>                     
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Creacion de proyecto Codeigniter</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">PHP</span>	
                                         <span class="badge badge-pill badge-success">Framework</span>	

										 </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <p>Maquetacion ve ventanas html</p>
                                        <div class="">		
                                         <span class="badge badge-pill badge-success">Desing</span>	
                                         <span class="badge badge-pill badge-success">HTML</span>	
										 </div>
                                    </div>
                                </div>
							</div>										
                        </div>
                        </div>
                       
               
               <!-- Modal de tareas -->
                <div class="modal fade bd-example-modal-lg" id="modalTarea" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                            <div class="modal-header">
                                <div class="col-lg-12">
                                <h4>Nueva Tarea</h4>          
                               </div>               
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <h6>Nombre de la Tarea</h6>    
                                    <input type="text" class="form-control" placeholder="Nombre de la tarea">
                                </div>
                                 <div class="col-lg-12 mt-4">
                                     <h6>Descripcion</h6>
                                     <textarea class="form-control"></textarea>
                                   <div class="row">
                                    <div class="col-lg-6 mt-4">     
                                            <h6>Estado</h6>                           
                                            <select class="form-control">
                                                <option active>To Do</option>
                                                <option>In Progress</option>
                                                <option>Done</option>
                                                <option>Review</option>
                                             </select>                              
                                    </div>
                                        <div class="col-lg-6 mt-4"> 
                                             <h6>Fecha</h6>
                                                <article>
                                                    <input type="date" id='fecha' name='fecha' class='form-control'>
                                              </article>
                                        </div>
                                        <div class="col-lg-6 mt-4">     
                                            <h6>Horas</h6>                           
                                         <input type="number" class="form-control"/>                           
                                    </div>
                                        <div class="col-lg-6 mt-4"> 
                                             <h6>Encargado</h6>
                                             <select class="form-control">
                                                <option active>Guillermo Ayala</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                             </select>   
                                        </div>

                                   </div>
                                </div>
                            <div class="modal-footer mt-4">
                                <button class="btn btn-primary">Guardar</button>
                            </div>
                            </div>
                        </div>
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
        <style>
            .card{
                filter: drop-shadow(1px 2px 3px gray);
            }
        </style>
        <script>
            $('#draggable-revert').draggable({
                 revert: true
                    });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="<?= base_url()?>/public/js/scripts.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
      
    </body>
</html>
