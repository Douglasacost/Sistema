<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
              <div class="well">
    <h3><?= h($ubicacionexpediente->cedula) ?></h3>
      <strong><h3>Ubicacion de Expediente</h3></strong>
    <table class="vertical-table">
        <tr>
            <th scope="row" colspan="3"><?= __('Cedula  :',' ') ?></th>
            <td><?= $this->Number->format($ubicacionexpediente->Cedula) ?></td>
        </tr>
        <tr>
            <th scope="row" colspan="3"><?= __('Area  :',' ') ?></th>
            <td colspan="3"><?= $this->Number->format($ubicacionexpediente->area) ?></td>
        </tr>
        <tr>
            <th scope="row" colspan="3"><?= __('Archivo  :',' ') ?></th>
            <td colspan="3"><?= $this->Number->format($ubicacionexpediente->archivo) ?></td>
        </tr>
        <tr>
            <th scope="row" colspan="3"><?= __('Puerta  :',' ') ?></th>
            <td colspan="3"><?= $this->Number->format($ubicacionexpediente->puerta) ?></td>
        </tr>
        <tr>
            <th scope="row" colspan="3"><?= __('Entrepaño :',' ') ?></th>
            <td colspan="3"><?= $this->Number->format($ubicacionexpediente->entrepaño) ?></td>
        </tr>
    </table>
    <br>
      <td><?= $this->Html->link('Regresar', ['controller'=>'ubicacionexpedientes','action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>

</div>
