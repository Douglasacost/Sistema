<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
      <strong><h3>Detalle de Personal</h3></strong>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ape Nom') ?></th>
            <td><?= h($datPerDocAdm->Ape_nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacio') ?></th>
            <td><?= h($datPerDocAdm->Nacio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($datPerDocAdm->Sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lugar Nac') ?></th>
            <td><?= h($datPerDocAdm->Lugar_nac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($datPerDocAdm->Pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edo Civ') ?></th>
            <td><?= h($datPerDocAdm->Edo_civ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Enti') ?></th>
            <td><?= h($datPerDocAdm->c_enti) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tip Tra') ?></th>
            <td><?= h($datPerDocAdm->Tip_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir Hab') ?></th>
            <td><?= h($datPerDocAdm->Dir_hab) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telf') ?></th>
            <td><?= h($datPerDocAdm->Telf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telf2') ?></th>
            <td><?= h($datPerDocAdm->Telf2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C MA DPT') ?></th>
            <td><?= h($datPerDocAdm->C_MA_DPT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C MUFOPQ') ?></th>
            <td><?= h($datPerDocAdm->C_MUFOPQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cond') ?></th>
            <td><?= h($datPerDocAdm->Cond) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('T TIPO') ?></th>
            <td><?= h($datPerDocAdm->T_TIPO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actualizado') ?></th>
            <td><?= h($datPerDocAdm->actualizado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($datPerDocAdm->Cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fec Nac') ?></th>
            <td><?= h($datPerDocAdm->Fec_nac) ?></td>
        </tr>
    </table>
</div>
