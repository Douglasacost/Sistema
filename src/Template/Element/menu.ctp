
  <nav class="navbar navbar-inverse nav-users">
  <div class="container">
    <div class="navbar-header navbar-sidebar">
      <h3>   <i class="glyphicon glyphicon-th-large"></i><b>  Sistema ST</b></h3>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target ="#bs-example-navbar-collapse-4">
        <span class="sr-only">Navegacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button><br>
        </div>

          <h6>
      <?php if (isset($current_user)): ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Administrar usuarios <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

              <li>
              <?= $this->Html->link('Lista de Usuarios', ['controller' => 'Users', 'action' => 'index'])  ?>
              </li>
              <li>
                  <?= $this->Html->link('Agregar Usuario', ['controller' => 'Users', 'action' => 'add'])  ?>
              </li>
            </ul>
          </li>
        </ul>

        </ul>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Control de Constancias <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                  <?= $this->Html->link('Lista de Solicitudes', ['controller' => 'SolicituddeConstancias', 'action' => 'index'])  ?>
              </li>
              <li>
                  <?= $this->Html->link('Nueva Solicitud', ['controller' => 'SolicituddeConstancias', 'action' => 'add'])  ?>
              </li>
            </ul>
            </ul>
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ubicacion de Expedientes<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                      <?= $this->Html->link('Ubicaciones Conocidas', ['controller' => 'Ubicacionexpedientes', 'action' => 'index'])  ?>
                  </li>
                  <li>
                      <?= $this->Html->link('Agregar Nueva Ubicacion', ['controller' => 'Ubicacionexpedientes', 'action' => 'add'])  ?>
                  </li>
                </ul>
                </ul>
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Control de Solicitudes<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li>
                          <?= $this->Html->link('Registrar Solicitud', ['controller' => 'ControldeSolicitudes', 'action' => 'add'])  ?>
                      </li>
                      <li>
                          <?= $this->Html->link('Lista de Solicitudes', ['controller' => 'ControldeSolicitudes', 'action' => 'index'])  ?>
                      </li>
                      </ul>
                      </ul>
                    <ul class="nav navbar-nav" >
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administracion del Personal<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li>
                              <?= $this->Html->link('Buscar Personal', ['controller' => 'DatPerDocAdm', 'action' => 'index'])  ?>
                          </li>
                          <li>
                              <?= $this->Html->link('Administrar Cargos', ['controller' => 'TrCargo', 'action' => 'index'])  ?>
                          </li>
                        </ul>
                        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <?=$this->Html->link('Salir', ['controller' => 'Users','action' => 'logout'])  ?>
          </li>
        </ul>
      <?php endif ?>
      </h6>
      </div>
      </nav>
