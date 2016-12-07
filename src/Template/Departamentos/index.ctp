<div class="row">
    <div>
    	<div class="page-header">
    		<h2>Administracion General
	<?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'datPerDocAdm', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
        </h2>
    	</div>
    	<div class="table-responsive">
    		<table class="table table-striped table-hover">
    		<thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Departamento') ?></th>
                <th scope="col" class="actions"><?= __('Opciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departamentos as $departamento): ?>
            <tr>
                <td><?= $this->Number->format($departamento->Cod) ?></td>
                <td><?= h($departamento->Departamento) ?></td>
                <td class="actions">
                  <td><?= $this->Html->link('Detalles', ['action' => 'view', $departamento->Cod], ['class' => 'btn btn-sm btn-info']) ?>
                  <?= $this->Html->link('Modificar', ['action' => 'edit',  $departamento->Cod], ['class' => 'btn btn-sm btn-primary']) ?>
                  </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
