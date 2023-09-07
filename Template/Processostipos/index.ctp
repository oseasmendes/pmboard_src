<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processostipo[]|\Cake\Collection\CollectionInterface $processostipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Processostipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="processostipos index large-9 medium-8 columns content">
    <h3><?= __('Processostipos') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($processostipos as $processostipo): ?>
            <tr>
                <td><?= $this->Number->format($processostipo->id) ?></td>
                <td><?= h($processostipo->descricao) ?></td>
                <td><?= h($processostipo->created) ?></td>
                <td><?= h($processostipo->modified) ?></td>
                <td><?= h($processostipo->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $processostipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $processostipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $processostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $processostipo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
