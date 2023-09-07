<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoslearnedlesson $projetoslearnedlesson
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetoslearnedlesson'), ['action' => 'edit', $projetoslearnedlesson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetoslearnedlesson'), ['action' => 'delete', $projetoslearnedlesson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoslearnedlesson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetoslearnedlessons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoslearnedlesson'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aproaches'), ['controller' => 'Aproaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aproach'), ['controller' => 'Aproaches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Severidades'), ['controller' => 'Severidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Severidade'), ['controller' => 'Severidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetoslearnedlessons view large-9 medium-8 columns content">
    <h3><?= h($projetoslearnedlesson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetoslearnedlesson->has('projeto') ? $this->Html->link($projetoslearnedlesson->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetoslearnedlesson->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aproach') ?></th>
            <td><?= $projetoslearnedlesson->has('aproach') ? $this->Html->link($projetoslearnedlesson->aproach->descricao, ['controller' => 'Aproaches', 'action' => 'view', $projetoslearnedlesson->aproach->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($projetoslearnedlesson->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Severidade') ?></th>
            <td><?= $projetoslearnedlesson->has('severidade') ? $this->Html->link($projetoslearnedlesson->severidade->descricao, ['controller' => 'Severidades', 'action' => 'view', $projetoslearnedlesson->severidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetoslearnedlesson->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetoslearnedlesson->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetoslearnedlesson->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetoslearnedlesson->historico)); ?>
    </div>
    <div class="row">
        <h4><?= __('Casoreferencia') ?></h4>
        <?= $this->Text->autoParagraph(h($projetoslearnedlesson->casoreferencia)); ?>
    </div>
</div>
