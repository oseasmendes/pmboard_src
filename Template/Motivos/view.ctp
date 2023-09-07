<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motivo $motivo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Motivo'), ['action' => 'edit', $motivo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Motivo'), ['action' => 'delete', $motivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motivo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="motivos view large-9 medium-8 columns content">
    <h3><?= h($motivo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($motivo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($motivo->id) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('Ocorrenciastipo Id') ?></th>
            <td><?= $this->Number->format($motivo->motivostipo_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($motivo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($motivo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosstatus') ?></h4>
        <?php if (!empty($motivo->projetosstatus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Motivo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($motivo->projetosstatus as $projetosstatus): ?>
            <tr>
                <td><?= h($projetosstatus->id) ?></td>
                <td><?= h($projetosstatus->projeto_id) ?></td>
                <td><?= h($projetosstatus->statusfuncional_id) ?></td>
                <td><?= h($projetosstatus->motivo_id) ?></td>
                <td><?= h($projetosstatus->descricao) ?></td>
                <td><?= h($projetosstatus->historico) ?></td>
                <td><?= h($projetosstatus->created) ?></td>
                <td><?= h($projetosstatus->modified) ?></td>
                <td><?= h($projetosstatus->responsabilidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosstatus', 'action' => 'view', $projetosstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosstatus', 'action' => 'edit', $projetosstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosstatus', 'action' => 'delete', $projetosstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosstatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
