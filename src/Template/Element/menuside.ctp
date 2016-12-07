        <?php if (isset($current_user)): ?>
<nav class="navbar navbar-default sidebar"  role="navigation">

    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><P ALIGN=center><b><?= ($current_user['first_name']);  ?><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></b></P></a></li>

        <li><a href="#" ALIGN=center><br>Administracion<br></a></li>
        <br>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">General<span class="caret"></span><span style="font-size:14px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li>
            <?= $this->Html->link('Nuevo departamento', ['controller' => 'Departamentos', 'action' => 'add'])  ?>
            </li>
            <li class="divider"></li>
            <li>
            <?= $this->Html->link('Nuevo director', ['controller' => 'Autoridad', 'action' => 'add'])  ?>
            </li>
              <li>
                <?= $this->Html->link('Nuevo Jefe Personal', ['controller' => 'Jefepersonal', 'action' => 'add'])  ?>
                </li>
                <li>
                <?= $this->Html->link('Nuevo jefe Sala Tecnica', ['controller' => 'Jefesalatecnica', 'action' => 'add'])  ?>
                </li>
                  <li class="divider"></li>
              <li>
              <?= $this->Html->link('Nuevo Pais', ['controller' => 'trPais', 'action' => 'add'])  ?>
              </li>
              <li>
              <?= $this->Html->link('Nuevo Estado', ['controller' => 'Entidad', 'action' => 'add'])  ?>
              </li>
              <li>
              <?= $this->Html->link('Nueva Parroquia', ['controller' => 'mfPquia', 'action' => 'add'])  ?>
              </li>
                <li class="divider"></li>
                <li>
                <?= $this->Html->link('Nuevo Ente', ['controller' => 'trEntes', 'action' => 'add'])  ?>
                </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academica<span class="caret"></span><span style="font-size:14px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li>
            <?= $this->Html->link('Nuevo Plantel', ['controller' => 'Planteles2', 'action' => 'add'])  ?>
            </li>
            <li class="divider"></li>
            <li>
            <?= $this->Html->link('Nueva Institucion', ['controller' => 'trInstitu', 'action' => 'add'])  ?>
            </li>
            <li class="divider"></li>
            <li>
            <?= $this->Html->link('Nuevo Titulo', ['controller' => 'titulosPrinc', 'action' => 'add'])  ?>
            </li>
            <li>
            <?= $this->Html->link('Nuevo Nivel de Titulo', ['controller' => 'nivelTitulo', 'action' => 'add'])  ?>
            </li>
            <li>
            <?= $this->Html->link('Nueva Especialidad', ['controller' => 'tEsp', 'action' => 'add'])  ?>
            </li>
            <li>
            <?= $this->Html->link('Nueva Mencion', ['controller' => 'tMen', 'action' => 'add'])  ?>
            </li>
            <li>
            <?= $this->Html->link('Nueva area de aplicacion', ['controller' => 'areaApli', 'action' => 'add'])  ?>
            </li>
            <li>
            <?= $this->Html->link('Nueva Institucion', ['controller' => 'trInstitu', 'action' => 'add'])  ?>
            </li>
            <li class="divider"></li>
        </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<span class="caret"></span><span style="font-size:14px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
      </ul>

    </div>
  </div>
</nav>
      <?php endif ?>
