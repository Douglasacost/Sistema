<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Atender Solicitud</h2>
    	</div>
    <?= $this->Form->create($controldeSolicitude) ?>
    <fieldset>
                    <div class="well"><legend><strong>Registro</strong></legend>
            <?php
            echo $this->Form->input('cedula_solicitante');
            echo $this->Form->input('active');
            echo $this->Form->input('user_registro',['label' => 'Usuario que recibio Solicitud']);
            ?>
          |         </div>
                    <div class="well">
            <legend><strong>Analisis</strong></legend>
            <?php
            echo $this->Form->input('fecha_sol_exp', ['empty' => true,'label' => 'Fecha que solicita el Expediente']);
            echo $this->Form->input('user_sol_analista',['label' => 'Usuario solicita Expediente','placeholder'=>'Ingresa tu Nombre Completo']);
            ?>
                    </div>
                    <div class="well">
            <legend><strong>Archivo</strong></legend>
            <?php
            echo $this->Form->input('fecha_busq_exp', ['empty' => true,'label' => 'Fecha busqueda de Expediente']);
            echo $this->Form->input('user_busq_archivo',['label' => 'Usuario que busco el Epediente','placeholder'=>'Ingresa tu Nombre Completo']);
            ?>
                    </div>
                    <div class="well">
            <legend><strong>Analisis</strong></legend>
            <?php
            echo $this->Form->input('fecha_entre_exp', ['empty' => true,'label' => 'Fecha regreso de Expediente']);
            echo $this->Form->input('user_ent_analista',['label' => 'Usuario que regresa el Expediente','placeholder'=>'Ingresa tu Nombre Completo']);
            ?>

                    </div>
                    <div class="well">
            <legend><strong>Observaciones</strong></legend>
            <?php
            echo $this->Form->input('observacion');
            ?>
            </div>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
