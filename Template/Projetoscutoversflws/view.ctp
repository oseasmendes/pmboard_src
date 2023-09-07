<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutoversflw $projetoscutoversflw
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetoscutoversflw'), ['action' => 'edit', $projetoscutoversflw->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetoscutoversflw'), ['action' => 'delete', $projetoscutoversflw->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutoversflw->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetoscutoversflws'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoscutoversflw'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetoscutovers'), ['controller' => 'Projetoscutovers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoscutover'), ['controller' => 'Projetoscutovers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetoscutoversflws view large-9 medium-8 columns content">
    <h3><?= h($projetoscutoversflw->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetoscutover') ?></th>
            <td><?= $projetoscutoversflw->has('projetoscutover') ? $this->Html->link($projetoscutoversflw->projetoscutover->id, ['controller' => 'Projetoscutovers', 'action' => 'view', $projetoscutoversflw->projetoscutover->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetoscutoversflw->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($projetoscutoversflw->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetoscutoversflw->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetoscutoversflw->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetoscutoversflw->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetoscutoversflw->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetoscutoversflw->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetoscutoversflw->detalhes)); ?>
    </div>
</div>
