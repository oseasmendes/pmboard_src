<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataaprovadore $ataaprovadore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ataaprovadore'), ['action' => 'edit', $ataaprovadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ataaprovadore'), ['action' => 'delete', $ataaprovadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataaprovadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ataaprovadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ataaprovadore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ataaprovadores view large-9 medium-8 columns content">
    <h3><?= h($ataaprovadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $ataaprovadore->has('ata') ? $this->Html->link($ataaprovadore->ata->id, ['controller' => 'Atas', 'action' => 'view', $ataaprovadore->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $ataaprovadore->has('participante') ? $this->Html->link($ataaprovadore->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ataaprovadore->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aprovacao Status') ?></th>
            <td><?= h($ataaprovadore->aprovacao_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ataaprovadore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aprovacao Data') ?></th>
            <td><?= h($ataaprovadore->aprovacao_data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ataaprovadore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ataaprovadore->modified) ?></td>
        </tr>
    </table>
</div>
