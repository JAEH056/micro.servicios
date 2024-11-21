<?php

/**
 * @var CodeIgniter\View\View $this
 */
?>
<!-- obtiene el contenido de la plantilla de la ruta especificada -->
<?= $this->extend('residentes/plantilla'); ?>

<?= $this->section('contenido'); ?>

<?php
//Se crea una sesion para mandar los erroes del formulario
$session = session();
echo $session->username;
?>

<main>
    <?= $this->include('residentes/header_principal') ?>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <!-- Wizard card example with navigation-->
        <div class="card">
            <div class="card-header border-bottom">
                <!-- Wizard navigation-->
                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                    <!-- Wizard navigation item 1-->
                    <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-bs-toggle="tab" role="tab"
                        aria-controls="wizard1" aria-selected="true">
                        <div class="wizard-step-icon">1</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">Completar información</div>
                            <div class="wizard-step-text-details">Informacion basica y de contacto</div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 2-->
                    <a class="nav-item nav-link" id="wizard2-tab" href="#wizard2" data-bs-toggle="tab" role="tab"
                        aria-controls="wizard2" aria-selected="true">
                        <div class="wizard-step-icon">2</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">Detalles de empresa</div>
                            <div class="wizard-step-text-details">Información de empresa y contacto</div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 3-->
                    <a class="nav-item nav-link" id="wizard3-tab" href="#wizard3" data-bs-toggle="tab" role="tab"
                        aria-controls="wizard3" aria-selected="true">
                        <div class="wizard-step-icon">3</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">Proyecto</div>
                            <div class="wizard-step-text-details">Datos del proyecto y asesor(es)</div>
                        </div>
                    </a>
                    <!-- Wizard navigation item 4-->
                    <a class="nav-item nav-link" id="wizard4-tab" href="#wizard4" data-bs-toggle="tab" role="tab"
                        aria-controls="wizard4" aria-selected="true">
                        <div class="wizard-step-icon">4</div>
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">Review &amp; Submit</div>
                            <div class="wizard-step-text-details">Review and submit changes</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="cardTabContent">
                    <!-- Wizard tab pane item 1-->
                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                        aria-labelledby="wizard1-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8">
                                <h3 class="text-primary">Paso 1</h3>
                                <h5 class="card-title mb-4">Ingresa la información solicitada</h5>
                                <h6 class="mb-4">Los datos marcados con (*) son obligatorios</h6>
                                <!-- Envia la lista de errores al formulario -->
                                <?php if (session()->getFlashdata('error') !== null || session()->getFlashdata('mensaje') !== null) { ?>
                                    <div class="alert alert-danger">
                                        <?= session()->getFlashdata('error'); ?>
                                        <?= session()->getFlashdata('mensaje'); ?>
                                    </div>
                                <?php } ?>
                                <!-- Envia la lista de errores al formulario -->
                                <form action="<?= base_url('residentes'); ?>" method="post">
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="numControl">Numero de control</label>
                                            <input class="form-control" id="numControl" type="text"
                                                placeholder="numero de control" name="numControl"
                                                value="<?= set_value('numControl'); ?>" />
                                        </div>
                                        <!-- Form Group (nombre)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nombre">Nombre</label>
                                            <input class="form-control" id="nombre" type="text"
                                                placeholder="Ingresa tu nombre" name="nombre"
                                                value="<?= set_value('nombre'); ?>" />
                                        </div>
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="apellidoP">Primer Apellido</label>
                                            <input class="form-control" id="apellidoP" type="text"
                                                placeholder="Ingresa tu primer apellido" name="apellidoP"
                                                value="<?= set_value('apellidoP'); ?>" />
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="apellidoM">Segundo Apellido</label>
                                            <input class="form-control" id="apellidoM" type="text"
                                                placeholder="Ingresa tu segundo apellido" name="apellidoM"
                                                value="<?= set_value('apellidoM'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (celular)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="celular">Celular</label>
                                            <input class="form-control" id="celular" type="text"
                                                placeholder="Ingresa tu celular" name="celular"
                                                value="<?= set_value('celular'); ?>" />
                                        </div>
                                        <!-- Form Group (telefono)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="telefono">Telefono (opcional)</label>
                                            <input class="form-control" id="telefono" type="text"
                                                placeholder="Ingresa tu telefono" name="telefono"
                                                value="<?= set_value('telefono'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Ciudad)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="ciudad">Ciudad</label>
                                            <input class="form-control" id="ciudad" type="text"
                                                placeholder="Ingresa tu ciudad" name="ciudad"
                                                value="<?= set_value('ciudad'); ?>" />
                                        </div>
                                        <!-- Form Group (Domicilio)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="domicilio">Domicilio</label>
                                            <input class="form-control" id="domicilio" type="text"
                                                placeholder="Ingresa tu domicilio" name="domicilio"
                                                value="<?= set_value('domicilio'); ?>" />
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="correo">Correo electronico</label>
                                            <input class="form-control" id="correo" type="email"
                                                placeholder="Ingresa tu correo" name="correo"
                                                value="<?= set_value('correo'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Menu seleccion seguro (afiliacion, imms, isste, etc) -->
                                        <div class="col-md-6">
                                            <label class="small mb-1" name="seguroSocial" for="seguroSocial">Seguro
                                                Social</label>
                                            <select class="form-control" id="seguroSocial" name="seguroSocial">
                                                <option>IMSS</option>
                                                <option>ISSSTE</option>
                                                <option>Otros</option>
                                            </select>
                                        </div>
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="numeroSS">Numero Seguro social</label>
                                            <input class="form-control" id="numeroSS" type="text" name="numeroSS"
                                                placeholder="Ingresa numero de seguro social"
                                                value="<?= set_value('numeroSS'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Programa Educativo)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="programa">Programa Educativo</label>
                                            <input class="form-control" id="programa" type="text"
                                                placeholder="id programa" name="idprogramaEducativo"
                                                value="<?= set_value('idprogramaEducativo'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Actualizar informacion</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Wizard tab pane item 2-->
                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8">
                                <h3 class="text-primary">Paso 2</h3>
                                <h5 class="card-title mb-4">Datos de la empresa</h5>
                                <form action="<?= base_url('residentes/perfil'); ?>" method="post">
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (nombre empresa)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nomEmpresa">Nombre de la empresa</label>
                                            <input class="form-control" id="nomEmpresa" type="text"
                                                placeholder="Ingresa el nombre de la empresa" name="nomEmpresa"
                                                value="<?= set_value('nomEmpresa'); ?>" />
                                        </div>
                                        <!-- Form Group (Mision)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="mision">Mision</label>
                                            <input class="form-control" id="mision" type="text"
                                                placeholder="Ingresa mision de la empresa" name="mision"
                                                value="<?= set_value('mision'); ?>" />
                                        </div>
                                        <!-- Form Group (Puesto titular)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="puestoTitular">Puesto Titular</label>
                                            <input class="form-control" id="puestoTitular" type="text"
                                                placeholder="Ingresa el puesto del titular" name="puestoTitular"
                                                value="<?= set_value('puestoTitular'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (nombre_titular)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="nombre_titular">Nombre (s) de titular</label>
                                            <input class="form-control" id="nombre_titular" type="text"
                                                placeholder="Ingresa el nombre del titular de la empresa" name="nombre_titular"
                                                value="<?= set_value('nombre_titular'); ?>" />
                                        </div>
                                        <!-- Form Group (apellidoP_titular)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="apellidoP_titular">Primer apellido titular</label>
                                            <input class="form-control" id="apellidoP_titular" type="text"
                                                placeholder="Ingresa el primer apellido del titular" name="apellidoP_titular"
                                                value="<?= set_value('apellidoP_titular'); ?>" />
                                        </div>
                                        <!-- Form Group (apellidoM_titular)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="apellidoM_titular">Segundo apellido titular</label>
                                            <input class="form-control" id="apellidoM_titular" type="text"
                                                placeholder="Ingresa el segundo apellido del titular" name="apellidoM_titular"
                                                value="<?= set_value('apellidoM_titular'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Ciudad)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="ciudad">Ciudad</label>
                                            <input class="form-control" id="ciudad" type="text"
                                                placeholder="Ingresa tu ciudad" name="ciudad"
                                                value="<?= set_value('ciudad'); ?>" />
                                        </div>
                                        <!-- Form Group (Domicilio)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="domicilio">Domicilio</label>
                                            <input class="form-control" id="domicilio" type="text"
                                                placeholder="Ingresa tu domicilio" name="domicilio"
                                                value="<?= set_value('domicilio'); ?>" />
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="correo">Correo electronico</label>
                                            <input class="form-control" id="correo" type="email"
                                                placeholder="Ingresa tu correo" name="correo"
                                                value="<?= set_value('correo'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Menu seleccion asesor externo (despliega las opciones del asesor externo) -->
                                        <p class="d-inline-flex gap-1">
                                        <div class="d-inline-flex gap-1">
                                            <input class="form-check-input" data-bs-toggle="collapse" href="#inputsAsesorExterno" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Incluir datos Asesor Externo
                                            </label>
                                        </div>
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="inputsAsesorExterno">
                                                    <div class="card card-body">
                                                        <!-- Form Row        -->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (Ciudad)-->
                                                            <div class="mb-3">
                                                                <label class="small mb-1" for="ciudad">Ciudad</label>
                                                                <input class="form-control" id="ciudad" type="text"
                                                                    placeholder="Ingresa tu ciudad" name="ciudad"
                                                                    value="<?= set_value('ciudad'); ?>" />
                                                            </div>
                                                            <!-- Form Group (Domicilio)-->
                                                            <div class="mb-3">
                                                                <label class="small mb-1" for="domicilio">Domicilio</label>
                                                                <input class="form-control" id="domicilio" type="text"
                                                                    placeholder="Ingresa tu domicilio" name="domicilio"
                                                                    value="<?= set_value('domicilio'); ?>" />
                                                            </div>
                                                            <!-- Form Group (email address)-->
                                                            <div class="mb-3">
                                                                <label class="small mb-1" for="correo">Correo electronico</label>
                                                                <input class="form-control" id="correo" type="email"
                                                                    placeholder="Ingresa tu correo" name="correo"
                                                                    value="<?= set_value('correo'); ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Programa Educativo)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="programa">Programa Educativo</label>
                                            <input class="form-control" id="programa" type="text"
                                                placeholder="id programa" name="idprogramaEducativo"
                                                value="<?= set_value('idprogramaEducativo'); ?>" />
                                        </div>
                                    </div>
                                    <!-- Radio button para los datos de asesor externo -->
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Programa Educativo)-->
                                        <div class="mb-3">
                                            <radiobutton>datos</radiobutton>
                                            <input type="radio" name="hidden_field_name" id="radioA" value="valueA">
                                            <input type="radio" name="hidden_field_name" id="radioB" value="valueB">
                                        </div>
                                    </div>

                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Actualizar informacion</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Wizard tab pane item 3-->
                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard3" role="tabpanel" aria-labelledby="wizard3-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8">
                                <h3 class="text-primary">Step 3</h3>
                                <h5 class="card-title mb-4">Choose when you want to receive email notifications</h5>
                                <form>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkAccountChanges" type="checkbox"
                                            checked />
                                        <label class="form-check-label" for="checkAccountChanges">Changes made to
                                            your
                                            account</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkAccountGroups" type="checkbox"
                                            checked />
                                        <label class="form-check-label" for="checkAccountGroups">Changes are made to
                                            groups you're part of</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkProductUpdates" type="checkbox"
                                            checked />
                                        <label class="form-check-label" for="checkProductUpdates">Product updates
                                            for
                                            products you've purchased or starred</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkProductNew" type="checkbox" checked />
                                        <label class="form-check-label" for="checkProductNew">Information on new
                                            products and services</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" id="checkPromotional" type="checkbox" />
                                        <label class="form-check-label" for="checkPromotional">Marketing and
                                            promotional
                                            offers</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="checkSecurity" type="checkbox" checked
                                            disabled />
                                        <label class="form-check-label" for="checkSecurity">Security alerts</label>
                                    </div>
                                    <hr class="my-4" />
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-light" type="button">Previous</button>
                                        <button class="btn btn-primary" type="button">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Wizard tab pane item 4-->
                    <div class="tab-pane py-5 py-xl-10 fade" id="wizard4" role="tabpanel" aria-labelledby="wizard4-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8">
                                <h3 class="text-primary">Step 4</h3>
                                <h5 class="card-title mb-4">Review the following information and submit</h5>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Username:</em></div>
                                    <div class="col">username</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Name:</em></div>
                                    <div class="col">Valerie Luna</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Organization Name:</em></div>
                                    <div class="col">Start Bootstrap</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Location:</em></div>
                                    <div class="col">San Francisco, CA</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Email Address:</em></div>
                                    <div class="col">name@example.com</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Phone Number:</em></div>
                                    <div class="col">555-123-4567</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Birthday:</em></div>
                                    <div class="col">06/10/1988</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Credit Card Number:</em></div>
                                    <div class="col">**** **** **** 1111</div>
                                </div>
                                <div class="row small text-muted">
                                    <div class="col-sm-3 text-truncate"><em>Credit Card Expiration:</em></div>
                                    <div class="col">06/2024</div>
                                </div>
                                <hr class="my-4" />
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light" type="button">Previous</button>
                                    <button class="btn btn-primary" type="button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>