<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Pai'), ['action' => 'edit', $trPai->c_pais]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Pai'), ['action' => 'delete', $trPai->c_pais], ['confirm' => __('Are you sure you want to delete # {0}?', $trPai->c_pais)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Pais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Pai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trPais view large-9 medium-8 columns content">
    <h3><?= h($trPai->c_pais) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('C Pais') ?></th>
            <td><?= h($trPai->c_pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Despais') ?></th>
            <td><?= h($trPai->despais) ?></td>
        </tr>
    </table>
    <pre>
      <?php print_r($trPai) ?>
    </pre>
</div>
