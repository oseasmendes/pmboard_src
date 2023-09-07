<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoria $consultoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultoria'), ['action' => 'edit', $consultoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultoria'), ['action' => 'delete', $consultoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultorias view large-9 medium-8 columns content">
    <h3><?= h($consultoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Razaosocial') ?></th>
            <td><?= h($consultoria->razaosocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Site') ?></th>
            <td><?= h($consultoria->site) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultoria->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultoria->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultores') ?></h4>
        <?php if (!empty($consultoria->consultores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telefone') ?></th>
                <th scope="col"><?= __('Cargo') ?></th>
                <th scope="col"><?= __('Responsabilidade') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Superiorimediato Id') ?></th>
                <th scope="col"><?= __('Consultoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultoria->consultores as $consultores): ?>
            <tr>
                <td><?= h($consultores->id) ?></td>
                <td><?= h($consultores->nome) ?></td>
                <td><?= h($consultores->departamento_id) ?></td>
                <td><?= h($consultores->email) ?></td>
                <td><?= h($consultores->telefone) ?></td>
                <td><?= h($consultores->cargo) ?></td>
                <td><?= h($consultores->responsabilidade) ?></td>
                <td><?= h($consultores->created) ?></td>
                <td><?= h($consultores->modified) ?></td>
                <td><?= h($consultores->superiorimediato_id) ?></td>
                <td><?= h($consultores->consultoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultores', 'action' => 'view', $consultores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultores', 'action' => 'edit', $consultores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultores', 'action' => 'delete', $consultores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>   
</div>
