<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaspareto $projetosentregaspareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregaspareto'), ['action' => 'edit', $projetosentregaspareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregaspareto'), ['action' => 'delete', $projetosentregaspareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregaspareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasparetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregaspareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasparetos view large-9 medium-8 columns content">
    <h3><?= h($projetosentregaspareto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosentregaspareto->has('projetosprodutosentrega') ? $this->Html->link($projetosentregaspareto->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregaspareto->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetosentregaspareto->has('pareto') ? $this->Html->link($projetosentregaspareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetosentregaspareto->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregaspareto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $projetosentregaspareto->has('motivo') ? $this->Html->link($projetosentregaspareto->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregaspareto->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilidade') ?></th>
            <td><?= $projetosentregaspareto->has('responsabilidade') ? $this->Html->link($projetosentregaspareto->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $projetosentregaspareto->responsabilidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregaspareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregaspareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregaspareto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregaspareto->historico)); ?>
    </div>
</div>
