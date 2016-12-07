<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Control de Usuarios</h2>
    	</div>
<div class="well">
<h2><?= $user->first_name . ' ' . $user->last_name ?></h2>
    <br>
    <dl>
        <dt>Nombre</dt>
        <dd>
            <?= $user->first_name ?>
            &nbsp;
        </dd>
        <br>

        <dt>Apellidos</dt>
        <dd>
            <?= $user->last_name ?>
            &nbsp;
        </dd>
        <br>

        <dt>Correo electrónico</dt>
        <dd>
            <?= $user->email ?>
            &nbsp;
        </dd>
        <br>

        <dt>Departamento</dt>
        <dd>
          <?php if ($user->departamento === 'stRegistro'): ?>
              Sala Tecnica - Registro
            <?php elseif ($user->departamento === 'stAnalisis'): ?>
              Sala Tecnica - Analisis
            <?php elseif ($user->departamento === 'stArchivo'): ?>
              Sala Tecnica - Archivo
            <?php elseif ($user->departamento === 'secDespacho'): ?>
              Secretaria de Despacho
            <?php elseif ($user->departamento === 'ofAtencion'): ?>
              Atencion al Ciudadano
            <?php endif; ?>
        </dd>
        <br>

        <dt>Habilitado</dt>
        <dd>
            <?= $user->active ? 'SI' : 'NO' ?>
            &nbsp;
        </dd>
        <br>

        <dt>Creado</dt>
        <dd>
            <?= $user->created->nice() ?>
            &nbsp;
        </dd>
        <br>

        <dt>Modificado</dt>
        <dd>
            <?= $user->modified->nice() ?>
            &nbsp;
        </dd>
    </dl>
    <td><?= $this->Html->link('Regresar', ['controller'=>'users','action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>

</div>
