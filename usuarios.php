<?php
$_SESSION['current_page'] = "usuarios";
include 'header.php';
?>


<div class="container-fluid">
    <h3 class="text-dark mb-4">Usuarios</h3>
    <div class="card shadow">
        <div class="card-header py-3"><a class="btn btn-primary btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-angle-double-down"></i></span><span class="text-white text">Añadir Usuario</span></a></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar <select class="d-inline-block form-select form-select-sm">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select></label></div>
                </div>
                <div class="col-md-6">
                    <div id="dataTable_filter" class="text-md-end dataTables_filter"><label class="form-label"><input class="form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Buscar" /></label></div>
                </div>
            </div>
            <div id="dataTable" class="table-responsive table-responsive-sm mt-1" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-sm-0">
                    <thead>
                        <tr>
                            <th style="max-width: 10px;">Nombre</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Fecha agregado</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="download.jpeg" />Admin</td>
                            <td>***********<button class="btn btn-light btn-sm" type="button" style="margin-left: 15px;/*float: right;*/"><i class="fas fa-eye"></i></button></td>
                            <td>Admin</td>
                            <td>2023/12/12</td>
                            <td>admin@gmail.com</td>
                            <td>849-209-3635</td>
                            <td><a class="btn btn-warning btn-circle ms-1" role="button" data-bs-toggle="tooltip" style="width: 30px;height: 30px;" title="Editar usuario"><i class="fas fa-pencil-ruler text-white"></i></a>
                                <div id="delete-modal" class="modal fade" role="dialog" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background: var(--bs-danger);">
                                                <h4 class="modal-title text-light">¿Esta seguro de eliminar el proveedor?</h4><button class="btn-close btn-close-white" type="button" aria-label="Close" data-bs-dismiss="modal" ngbautofocus></button>
                                            </div>
                                            <div class="modal-body" style="padding: 9px;padding-bottom: 0px;">
                                                <div class="card shadow mb-4">
                                                    <div class="card-body" style="padding: 10px;">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title" style="font-size: 20px;">ASUS</h4>
                                                                <h6 class="text-muted card-subtitle small fw-bold" style="font-size: 11px;">Fecha agregada: 2023/12/2</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="justify-content: center;"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button><button class="btn btn-danger" type="button">Eliminar</button></div>
                                        </div>
                                    </div>
                                </div><button class="btn btn-danger btn-circle ms-1" data-bs-toggle="modal" type="button" style="width: 30px;height: 30px;" data-bs-target="#delete-modal" title="Deshabilitar Usuario"><i class="fas fa-trash text-white"></i></button>
                            </td>
                            <td></td>
                        </tr>
                        <tr></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Nombre</strong></td>
                            <td><strong>Contraseña</strong></td>
                            <td><strong>Rol</strong></td>
                            <td><strong>Fecha agregado</strong></td>
                            <td><strong>Correo</strong></td>
                            <td><strong>Telefono</strong></td>
                            <td><strong>Acciones</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Mostrando</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>