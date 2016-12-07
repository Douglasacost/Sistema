<div class="row">
    <div class="col-md-10">
    	<div class="page-header">
    		<h2>Administr Cargos
	<?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'trCargo', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
        </h2>
    	</div>
    	<div class="table-responsive">
    		<table class="table table-striped table-hover">
    		<thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Activo') ?></th>
                <th scope="col" class="actions"><?= __('Opciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trCargo as $trCargo): ?>
            <tr>
                <td><?= $this->Number->format($trCargo->C_cargo) ?></td>
                <td><?= h($trCargo->Cargo) ?></td>
                <td><?= h($trCargo->Activo? 'SI' : 'NO') ?></td>
                <td><?= $this->Html->link('Ver', ['action' => 'view', $trCargo->C_cargo], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $trCargo->C_cargo], ['class' => 'btn btn-sm btn-primary']) ?>
                </td>
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
</div>
