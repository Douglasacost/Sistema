<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tiptrab'), ['action' => 'edit', $tiptrab->Tip_tra]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiptrab'), ['action' => 'delete', $tiptrab->Tip_tra], ['confirm' => __('Are you sure you want to delete # {0}?', $tiptrab->Tip_tra)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiptrab'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiptrab'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiptrab view large-9 medium-8 columns content">
    <h3><?= h($tiptrab->Tip_tra) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tip Tra') ?></th>
            <td><?= h($tiptrab->Tip_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descri') ?></th>
            <td><?= h($tiptrab->Descri) ?></td>
        </tr>
    </table>
</div>
