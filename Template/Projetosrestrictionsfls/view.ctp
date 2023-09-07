<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosrestrictionsfl $projetosrestrictionsfl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosrestrictionsfl'), ['action' => 'edit', $projetosrestrictionsfl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosrestrictionsfl'), ['action' => 'delete', $projetosrestrictionsfl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestrictionsfl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosrestrictionsfls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosrestrictionsfl'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosrestrictions'), ['controller' => 'Projetosrestrictions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosrestriction'), ['controller' => 'Projetosrestrictions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosrestrictionsfls view large-9 medium-8 columns content">
    <h3><?= h($projetosrestrictionsfl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosrestriction') ?></th>
            <td><?= $projetosrestrictionsfl->has('projetosrestriction') ? $this->Html->link($projetosrestrictionsfl->projetosrestriction->id, ['controller' => 'Projetosrestrictions', 'action' => 'view', $projetosrestrictionsfl->projetosrestriction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosrestrictionsfl->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosrestrictionsfl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetosrestrictionsfl->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosrestrictionsfl->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosrestrictionsfl->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosrestrictionsfl->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosrestrictionsfl->detalhes)); ?>
    </div>
</div>
