<div class="row">
    <div>
    	<div class="page-header">
    		<h2>Ubicacion Expedientes
          <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'Ubicacionexpedientes', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
</h2>
    	</div>
    	<div class="table-responsive">
    		<table class="table table-striped table-hover">
    		<thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('archivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puerta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entrepaño') ?></th>
                <th scope="col" class="actions"><?= __('Opciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ubicacionexpedientes as $ubicacionexpediente): ?>
            <tr>
                <td><?= $this->Number->format($ubicacionexpediente->Cedula) ?></td>
                <td><?= $this->Number->format($ubicacionexpediente->area) ?></td>
                <td><?= $this->Number->format($ubicacionexpediente->archivo) ?></td>
                <td><?= $this->Number->format($ubicacionexpediente->puerta) ?></td>
                <td><?= $this->Number->format($ubicacionexpediente->entrepaño) ?></td>
                <td><?= $this->Html->link('Detalles', ['action' => 'view', $ubicacionexpediente->Cedula], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Modificar', ['action' => 'edit', $ubicacionexpediente->Cedula], ['class' => 'btn btn-sm btn-primary']) ?>
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
