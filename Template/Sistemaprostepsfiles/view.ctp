<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsfile $sistemaprostepsfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemaprostepsfile'), ['action' => 'edit', $sistemaprostepsfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemaprostepsfile'), ['action' => 'delete', $sistemaprostepsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprostepsfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemaprostepsfiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemaprostepsfile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemaprostepsfiles view large-9 medium-8 columns content">
    <h3><?= h($sistemaprostepsfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistemaprostep') ?></th>
            <td><?= $sistemaprostepsfile->has('sistemaprostep') ? $this->Html->link($sistemaprostepsfile->sistemaprostep->id, ['controller' => 'Sistemaprosteps', 'action' => 'view', $sistemaprostepsfile->sistemaprostep->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemaprostepsfile->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nomearquivo') ?></th>
            <td><?= h($sistemaprostepsfile->nomearquivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extensao') ?></th>
            <td><?= h($sistemaprostepsfile->extensao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemaprostepsfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemaprostepsfile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemaprostepsfile->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemaprostepsfile->detalhes)); ?>
    </div>
</div>
