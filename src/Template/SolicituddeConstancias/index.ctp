<div class="row">
    <div>
    	<div class="page-header">
    		<h2>Control de Solicitudes
          <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'SolicituddeConstancias', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
</h2>
    	</div>
<div class="table-responsive">
  <table class="table table-striped table-hover">
  <thead>
      <tr>
          <th scope="col"><?= $this->Paginator->sort('Codigo') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Tipo') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Fecha Solicitud') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Fecha Actualizacion') ?></th>
          <th scope="col" class="actions"><?= __('Opciones') ?></th>
      </tr>
  </thead>
  <tbody>
      <?php foreach ($solicituddeConstancias as $solicituddeConstancia): ?>
      <tr>
          <td><?= $this->Number->format($solicituddeConstancia->id) ?></td>
          <td><?= $this->Number->format($solicituddeConstancia->cedula) ?></td>
            <td><?= h($solicituddeConstancia->tipo_constancia) ?></td>
            <td><?= h($solicituddeConstancia->estado_constancia) ?></td>
          <td><?= h($solicituddeConstancia->created)?></td>
          <td><?= h($solicituddeConstancia->modified) ?></td>
          <td><?= $this->Html->link('Detalles', ['action' => 'view', $solicituddeConstancia->id], ['class' => 'btn btn-sm btn-info']) ?>
              <?= $this->Html->link('Actualizar', ['action' => 'edit', $solicituddeConstancia->id], ['class' => 'btn btn-sm btn-primary']) ?>
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
