<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis $testis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testis'), ['action' => 'edit', $testis->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testis'), ['action' => 'delete', $testis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testis'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testes view large-9 medium-8 columns content">
    <h3><?= h($testis->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($testis->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testis->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($testis->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($testis->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($testis->modified) ?></td>
        </tr>
    </table>
</div>
