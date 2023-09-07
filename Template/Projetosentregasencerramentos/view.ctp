<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasencerramento $projetosentregasencerramento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasencerramento'), ['action' => 'edit', $projetosentregasencerramento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasencerramento'), ['action' => 'delete', $projetosentregasencerramento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasencerramento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasencerramentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasencerramento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['controller' => 'Solucoesaplicadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solucoesaplicada'), ['controller' => 'Solucoesaplicadas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasfaqs'), ['controller' => 'Sistemasfaqs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasfaq'), ['controller' => 'Sistemasfaqs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasencerramentos view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasencerramento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosentregasencerramento->has('projetosprodutosentrega') ? $this->Html->link($projetosentregasencerramento->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregasencerramento->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solucoesaplicada') ?></th>
            <td><?= $projetosentregasencerramento->has('solucoesaplicada') ? $this->Html->link($projetosentregasencerramento->solucoesaplicada->descricao, ['controller' => 'Solucoesaplicadas', 'action' => 'view', $projetosentregasencerramento->solucoesaplicada->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasencerramento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosentregasencerramento->has('consultore') ? $this->Html->link($projetosentregasencerramento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosentregasencerramento->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistemasfaq') ?></th>
            <td><?= $projetosentregasencerramento->has('sistemasfaq') ? $this->Html->link($projetosentregasencerramento->sistemasfaq->Descricao, ['controller' => 'Sistemasfaqs', 'action' => 'view', $projetosentregasencerramento->sistemasfaq->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasencerramento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosentregasencerramento->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasencerramento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasencerramento->modified) ?></td>
        </tr>
    </table>
</div>
