<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Control de Solicitudes</h2>
    	</div>
      <div class="well">
    <h3>CODIGO:<?= h($controldeSolicitude->id) ?></h3>
    <table class="vertical-table">
      <tr>
          <th scope="row"><?= __('Cedula del Solicitante   :') ?></th>
          <td><?= $this->Number->format($controldeSolicitude->cedula_solicitante) ?></td>
      </tr>
        <tr>
            <th scope="row"><?= __('Usuario Registro   :') ?></th>
            <td><?= h($controldeSolicitude->user_registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Solicitud Analista   :') ?></th>
            <td><?= h($controldeSolicitude->user_sol_analista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Busqueda Archivo   :') ?></th>
            <td><?= h($controldeSolicitude->user_busq_archivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Entrega Analista   :') ?></th>
            <td><?= h($controldeSolicitude->user_ent_analista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo   :') ?></th>
            <td><?= $this->Number->format($controldeSolicitude->id) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Active   :') ?></th>
            <td><?= h($controldeSolicitude->active? 'SI' : 'NO' ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha de solicitud   :') ?></th>
            <td><?= h($controldeSolicitude->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Solicitud de Expediente  :') ?></th>
            <td><?= h($controldeSolicitude->fecha_sol_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Busqueda de Expediente  :') ?></th>
            <td><?= h($controldeSolicitude->fecha_busq_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entrega de Expediente  :') ?></th>
            <td><?= h($controldeSolicitude->fecha_entre_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones  :') ?></th>
            <td><?= $this->Text->autoParagraph(h($controldeSolicitude->observacion)); ?></td>
        </tr>
    </table>
    <td><?= $this->Html->link('Regresar', ['controller'=>'controldeSolicitudes','action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>

</div>
