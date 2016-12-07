<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Control de Constancias</h2>
    	</div>
              <div class="well">
    <?= $this->Form->create($solicituddeConstancia) ?>
    <fieldset>
        <legend><?= __('Agregar Solicitud') ?></legend>
        <?php
            echo $this->Form->input('Cedula Solicitante');
            echo $this->Form->input('tipo_constancia',['options'=>['Constancia Sencilla' =>'Constancia Sencilla','Relacion de Salarios'=>'Relacion de Salarios','Relacion de Sueldo IPASME'=>'Relacion de Sueldo IPASME','Relacion de Seguro Contratados'=>'Relacion de Seguro Contratados','Relacion de Seguro'=>'Relacion de Seguro','Relacion de Salarios Contratados'=>'Relacion de Salarios Contratados','Constancia Sencilla Contratados'=>'Constancia Sencilla Contratados','FP 023'=>'FP 023']]);
            echo $this->Form->input('estado_constancia',['options'=>['Solicitud Pendiente'=>'Solicitud Pendiente','Solicitud Revisada'=>'Solicitud Revisada','Solicitud Rechazada'=>'Solicitud Rechazada','Constancia Firmada'=>'Constancia Firmada','Constancia Entregada'=>'Constancia Entregada']]);
            echo $this->Form->input('observacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
