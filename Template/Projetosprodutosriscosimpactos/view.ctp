<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosimpacto $projetosprodutosriscosimpacto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosriscosimpacto'), ['action' => 'edit', $projetosprodutosriscosimpacto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosriscosimpacto'), ['action' => 'delete', $projetosprodutosriscosimpacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscosimpacto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscosimpactos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosimpacto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosriscosimpactos view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosriscosimpacto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosrisco') ?></th>
            <td><?= $projetosprodutosriscosimpacto->has('projetosprodutosrisco') ? $this->Html->link($projetosprodutosriscosimpacto->projetosprodutosrisco->id, ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscosimpacto->projetosprodutosrisco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosriscosimpacto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($projetosprodutosriscosimpacto->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($projetosprodutosriscosimpacto->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosriscosimpacto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosriscosimpacto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosriscosimpacto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhamento') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosriscosimpacto->detalhamento)); ?>
    </div>
</div>
