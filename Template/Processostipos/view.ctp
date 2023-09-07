<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processostipo $processostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Processostipo'), ['action' => 'edit', $processostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Processostipo'), ['action' => 'delete', $processostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $processostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Processostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processostipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="processostipos view large-9 medium-8 columns content">
    <h3><?= h($processostipo->id) ?></h3>
    <table class="table table-striped table-responsive">  
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($processostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($processostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($processostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($processostipo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $processostipo->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Processos') ?></h4>
        <?php if (!empty($processostipo->processos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Movimento') ?></th>
                <th scope="col"><?= __('Processostipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($processostipo->processos as $processos): ?>
            <tr>
                <td><?= h($processos->id) ?></td>
                <td><?= h($processos->descricao) ?></td>
                <td><?= h($processos->created) ?></td>
                <td><?= h($processos->modified) ?></td>
                <td><?= h($processos->description) ?></td>
                <td><?= h($processos->movimento) ?></td>
                <td><?= h($processos->processostipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Processos', 'action' => 'view', $processos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Processos', 'action' => 'edit', $processos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Processos', 'action' => 'delete', $processos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $processos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
