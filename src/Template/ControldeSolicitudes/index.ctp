<div class="row">
    <div class="col-md-10">
    	<div class="page-header">
    		<h2>Lista de Solicitudes
          <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'controldeSolicitudes', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
</h2>
    	</div>
    	<div class="table-responsive">
    		<table class="table table-striped table-hover">
    		<thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula_solicitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha de Solicitud') ?></th>
                <th scope="col" class="actions"><?= __('Opciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controldeSolicitudes as $controldeSolicitude): ?>
            <tr>
                <td><?= $this->Number->format($controldeSolicitude->id) ?></td>
                <td><?= $this->Number->format($controldeSolicitude->cedula_solicitante) ?></td>
                <td><?= h($controldeSolicitude->active? 'SI' : 'NO') ?></td>
                <td><?= h($controldeSolicitude->created) ?></td>
                <td><?= $this->Html->link('Detalles', ['action' => 'view', $controldeSolicitude->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Atender', ['action' => 'edit', $controldeSolicitude->id], ['class' => 'btn btn-sm btn-primary']) ?>
                </tr>
    	<?php endforeach; ?>
    		</tbody>
    		</table>
    	</div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
</div>
