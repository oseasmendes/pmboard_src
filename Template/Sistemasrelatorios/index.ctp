<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrelatorio[]|\Cake\Collection\CollectionInterface $sistemasrelatorios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasrelatorio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasrelatorios index large-9 medium-8 columns content">
    <h3><?= __('Sistemasrelatorios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datacriacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cabnumer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requestnumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('version') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descontinuado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descontinuadodata') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relatoriobase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasrelatorios as $sistemasrelatorio): ?>
            <tr>
                <td><?= $this->Number->format($sistemasrelatorio->id) ?></td>
                <td><?= $sistemasrelatorio->has('sistema') ? $this->Html->link($sistemasrelatorio->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasrelatorio->sistema->id]) : '' ?></td>
                <td><?= h($sistemasrelatorio->description) ?></td>
                <td><?= h($sistemasrelatorio->name) ?></td>
                <td><?= h($sistemasrelatorio->datacriacao) ?></td>
                <td><?= h($sistemasrelatorio->cabnumer) ?></td>
                <td><?= h($sistemasrelatorio->requestnumber) ?></td>
                <td><?= h($sistemasrelatorio->version) ?></td>
                <td><?= $sistemasrelatorio->has('departamento') ? $this->Html->link($sistemasrelatorio->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasrelatorio->departamento->id]) : '' ?></td>
                <td><?= h($sistemasrelatorio->descontinuado) ?></td>
                <td><?= h($sistemasrelatorio->descontinuadodata) ?></td>
                <td><?= h($sistemasrelatorio->ativo) ?></td>
                <td><?= h($sistemasrelatorio->relatoriobase) ?></td>
                <td><?= h($sistemasrelatorio->created) ?></td>
                <td><?= h($sistemasrelatorio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasrelatorio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasrelatorio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasrelatorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasrelatorio->id)]) ?>
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
