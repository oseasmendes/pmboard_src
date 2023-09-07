<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresausenciastipo $consultoresausenciastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoresausenciastipo'), ['action' => 'edit', $consultoresausenciastipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoresausenciastipo'), ['action' => 'delete', $consultoresausenciastipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresausenciastipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresausenciastipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresausenciastipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresausencias'), ['controller' => 'Consultoresausencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresausencia'), ['controller' => 'Consultoresausencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoresausenciastipos view large-9 medium-8 columns content">
    <h3><?= h($consultoresausenciastipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($consultoresausenciastipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoresausenciastipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoresausenciastipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoresausenciastipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultoresausencias') ?></h4>
        <?php if (!empty($consultoresausenciastipo->consultoresausencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Datainicio') ?></th>
                <th scope="col"><?= __('Datafim') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Consultoresausenciastipo Id') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Periodo') ?></th>
                <th scope="col"><?= __('Informadoem') ?></th>
                <th scope="col"><?= __('Planejamentode') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultoresausenciastipo->consultoresausencias as $consultoresausencias): ?>
            <tr>
                <td><?= h($consultoresausencias->id) ?></td>
                <td><?= h($consultoresausencias->consultore_id) ?></td>
                <td><?= h($consultoresausencias->resumo) ?></td>
                <td><?= h($consultoresausencias->datainicio) ?></td>
                <td><?= h($consultoresausencias->datafim) ?></td>
                <td><?= h($consultoresausencias->created) ?></td>
                <td><?= h($consultoresausencias->modified) ?></td>
                <td><?= h($consultoresausencias->statusfuncional_id) ?></td>
                <td><?= h($consultoresausencias->consultoresausenciastipo_id) ?></td>
                <td><?= h($consultoresausencias->observacao) ?></td>
                <td><?= h($consultoresausencias->periodo) ?></td>
                <td><?= h($consultoresausencias->informadoem) ?></td>
                <td><?= h($consultoresausencias->planejamentode) ?></td>
                <td><?= h($consultoresausencias->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultoresausencias', 'action' => 'view', $consultoresausencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultoresausencias', 'action' => 'edit', $consultoresausencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultoresausencias', 'action' => 'delete', $consultoresausencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresausencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
