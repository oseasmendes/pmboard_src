<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsnota $projetosalocsnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosalocsnota'), ['action' => 'edit', $projetosalocsnota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosalocsnota'), ['action' => 'delete', $projetosalocsnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsnota->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocsnotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosalocsnota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosalocsnotas view large-9 medium-8 columns content">
    <h3><?= h($projetosalocsnota->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Notatipo') ?></th>
            <td><?= $projetosalocsnota->has('notatipo') ? $this->Html->link($projetosalocsnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosalocsnota->notatipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosalocsnota->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosaloc') ?></th>
            <td><?= $projetosalocsnota->has('projetosaloc') ? $this->Html->link($projetosalocsnota->projetosaloc->descricao, ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocsnota->projetosaloc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosalocsnota->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosalocsnota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosalocsnota->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosalocsnota->historico)); ?>
    </div>
</div>
