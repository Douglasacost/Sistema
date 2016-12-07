<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Control de Constancia</h2>
    	</div>
      <div class="well">
    <strong><h3>CODIGO :<?= h($solicituddeConstancia->id) ?></h3></strong>
    <table class="vertical-table">
      <br>
      <tr>
          <th scope="row"><?= __('Cedula Solicitante :') ?></th>
          <td><?= $this->Number->format($solicituddeConstancia->cedula) ?></td>
      </tr>
        <tr>
            <th scope="row"><?= __('Tipo Constancia :') ?><br></th>
            <td><?= h($solicituddeConstancia->tipo_constancia) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Estado Constancia :') ?></th>
            <td><?= h($solicituddeConstancia->estado_constancia) ?></td>
        </tr>


        <tr>
            <th scope="row"><?= __('Observaciones :') ?></th>
            <td><?= h($solicituddeConstancia->observacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Solicitud :') ?></th>
            <td><?= h($solicituddeConstancia->created) ?></td>
        </tr>
          <tr>
            <th scope="row"><?= __('Ultima Actualizacion :') ?></th>
            <td><?= h($solicituddeConstancia->modified) ?></td>
        </tr>
    </table>
    <br>
      <td><?= $this->Html->link('Regresar', ['controller'=>'solicituddeConstancias','action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>
</div>
