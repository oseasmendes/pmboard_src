<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosstatus $projetosstatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosstatus'), ['action' => 'edit', $projetosstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosstatus'), ['action' => 'delete', $projetosstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosstatus view large-9 medium-8 columns content">
    <h3><?= h($projetosstatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosstatus->has('projeto') ? $this->Html->link($projetosstatus->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosstatus->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosstatus->has('statusfuncional') ? $this->Html->link($projetosstatus->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosstatus->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $projetosstatus->has('motivo') ? $this->Html->link($projetosstatus->motivo->id, ['controller' => 'Motivos', 'action' => 'view', $projetosstatus->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosstatus->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilidade') ?></th>
            <td><?= $projetosstatus->has('responsabilidade') ? $this->Html->link($projetosstatus->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $projetosstatus->responsabilidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosstatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosstatus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosstatus->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosstatus->historico)); ?>
    </div>
</div>
