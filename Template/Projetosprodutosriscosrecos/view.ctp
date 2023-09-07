<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosreco $projetosprodutosriscosreco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosriscosreco'), ['action' => 'edit', $projetosprodutosriscosreco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosriscosreco'), ['action' => 'delete', $projetosprodutosriscosreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscosreco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscosrecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosreco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosriscosrecos view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosriscosreco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosrisco') ?></th>
            <td><?= $projetosprodutosriscosreco->has('projetosprodutosrisco') ? $this->Html->link($projetosprodutosriscosreco->projetosprodutosrisco->detalhes, ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscosreco->projetosprodutosrisco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosriscosreco->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosriscosreco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosriscosreco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosriscosreco->modified) ?></td>
        </tr>
    </table>
</div>
