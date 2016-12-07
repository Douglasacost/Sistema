<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
                <div class="well">
    <?= $this->Form->create($solicituddeConstancia) ?>
    <fieldset>
        <legend><?= __('Actualizar Solicitud') ?></legend>
        <?php
            echo $this->Form->input('cedula');
            echo $this->Form->input('estado_constancia',['options'=>['Solicitud Pendiente'=>'Solicitud Pendiente','Solicitud Revisada'=>'Solicitud Revisada','Solicitud Rechazada'=>'Solicitud Rechazada','Constancia Firmada'=>'Constancia Firmada','Constancia Entregada'=>'Constancia Entregada']]);
            echo $this->Form->input('observacion')
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
