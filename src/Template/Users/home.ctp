<div class="jumbotron">

  <strong><h2 ALIGN=center>Bienvenido <?= $this->Html->link($current_user['first_name'] . ' ' . $current_user['last_name'], ['controller' => 'Users', 'action' => 'view', $current_user['id']]) ?></h2></strong>


<br><br>
  <p ALIGN=center>  Este es el Nuevo Sistema de Sala Tecnica, Espero cumpla con tus Espectativas <br> Ayudame a perfeccionarlo, Reportandome los Bugs y Errores que te puedan ocurrir<br>
    Así como tambien tus sugerencias, de antemano Gracias, darle la oportunidad a lo nuevo<br>Att:<strong> Maximillian Fernandez</strong></p>
<br>     PROGRESO DE LA APLICACION
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        <span class="sr-only">85% Complete</span>
      </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                              Correo</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Correo electronico" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                              Motivo</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Reporte de:</option>
                                <option value="service">Bugs</option>
                                <option value="suggestions">Errores</option>
                                <option value="product">Sugerencias</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                              Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="20" required="required"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-2">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Mi Informacion de Contacto</legend>
            <address>
                <strong>Maximillian Fernandez</strong><br>
                <abbr title="Phone">
                    tlefono:</abbr>
                (0424) 356-1111
            </address>
            <address>
                <strong>Correo</strong><br>
                <a href="mailto:#">aosilosje@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
