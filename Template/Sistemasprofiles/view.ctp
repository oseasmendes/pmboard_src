<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprofile $sistemasprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasprofile'), ['action' => 'edit', $sistemasprofile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasprofile'), ['action' => 'delete', $sistemasprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprofile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasprofiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasprofile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasprofilescontracts'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasprofilescontract'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasprofiles view large-9 medium-8 columns content">
    <h3><?= h($sistemasprofile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasprofile->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilidade') ?></th>
            <td><?= $sistemasprofile->has('responsabilidade') ? $this->Html->link($sistemasprofile->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $sistemasprofile->responsabilidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasprofile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasprofile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasprofile->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasprofile->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objetivos') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasprofile->objetivos)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemasprofilescontracts') ?></h4>
        <?php if (!empty($sistemasprofile->sistemasprofilescontracts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Sistemasprofile Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasprofile->sistemasprofilescontracts as $sistemasprofilescontracts): ?>
            <tr>
                <td><?= h($sistemasprofilescontracts->id) ?></td>
                <td><?= h($sistemasprofilescontracts->sistema_id) ?></td>
                <td><?= h($sistemasprofilescontracts->sistemasprofile_id) ?></td>
                <td><?= h($sistemasprofilescontracts->descricao) ?></td>
                <td><?= h($sistemasprofilescontracts->ativo) ?></td>
                <td><?= h($sistemasprofilescontracts->created) ?></td>
                <td><?= h($sistemasprofilescontracts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'view', $sistemasprofilescontracts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'edit', $sistemasprofilescontracts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'delete', $sistemasprofilescontracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprofilescontracts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
