<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetospareto $projetospareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetospareto'), ['action' => 'edit', $projetospareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetospareto'), ['action' => 'delete', $projetospareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetospareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosparetos view large-9 medium-8 columns content">
    <h3><?= h($projetospareto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetospareto->has('projeto') ? $this->Html->link($projetospareto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetospareto->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetospareto->has('pareto') ? $this->Html->link($projetospareto->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetospareto->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetospareto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetospareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetospareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetospareto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetospareto->historico)); ?>
    </div>
</div>
