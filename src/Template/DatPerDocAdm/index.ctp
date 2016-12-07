<div class="row">
    <div>
    	<div class="page-header">
    		<h2>Administracion del Personal
	<?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'datPerDocAdm', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
        </h2>
    	</div>
    	<div class="table-responsive">
    		<table class="table table-striped table-hover">
    		<thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre y Apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha de Nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actualizado') ?></th>
                <th scope="col" class="actions"><?= __('Opciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datPerDocAdm as $datPerDocAdm): ?>
            <tr>
                <td><?= $this->Number->format($datPerDocAdm->Cedula) ?></td>
                <td><?= h($datPerDocAdm->Ape_nom) ?></td>
                <td><?= h($datPerDocAdm->Fec_nac) ?></td>
                <td><?= h($datPerDocAdm->actualizado? 'SI' : 'NO') ?></td>
                <td><?= $this->Html->link('Detalles', ['action' => 'view', $datPerDocAdm->Cedula], ['class' => 'btn btn-sm btn-info']) ?>
                      <?= $this->Html->link('Modificar', ['action' => 'edit', $datPerDocAdm->Cedula], ['class' => 'btn btn-sm btn-primary']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next('Siguiente >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div>
