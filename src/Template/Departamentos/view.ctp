<<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Control de departamentos</h2>
    	</div>
<div class="well">
      <strong><h3>Departamento</h3></strong>
    <table class="vertical-table">
    <h3>CODIGO: <?= h($departamento->Cod) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Departamento  :') ?></th>
            <td><?= h($departamento->Departamento)?></td>
        </tr>
        <tr>
    <th></th>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo  :') ?></th>
            <td><?= $this->Number->format($departamento->Cod)?></td>
        </tr>
    </table>
    <td><?= $this->Html->link('Regresar', ['controller'=>'departamentos','action' => 'index'], ['class' => 'btn btn-sm btn-info']) ?>

</div>
