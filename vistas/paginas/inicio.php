<form method="post" action="">
	
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="border-radius: 1rem; background: #2193b0;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-2 pb-2">

              <h2 class="fw-bold mb-2 text-uppercase">Bienvenido</h2>
              <p class="text-white-50 mb-5">¡Por favor, introduce tu usuario y contraseña!</p>

              <div class="form-outline form-white mb-4">
              <input Required type="text" placeholder="Usuario" name="usuarioI" class="form-control form-control-lg"/>
              <label class="form-label" for="typeEmailX">Usuario</label>
              </div>

              <div class="form-outline form-white mb-4">
			  <input Required type="password" placeholder="Contraseña" name="claveI" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>

              <input type="submit" class="btn btn-outline-light btn-lg px-5" value="Ingresar" >
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</form>


<?php

$ingreso = new controlador_login();
$ingreso->ingresoControlador();

?>