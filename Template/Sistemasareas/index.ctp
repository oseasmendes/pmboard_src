<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasarea[]|\Cake\Collection\CollectionInterface $sistemasareas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasarea'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasareas index large-9 medium-8 columns content">
    <h3><?= __('Sistemasareas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidadeusuarios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidadelicencas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipolicenca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('papeldocontato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contatoramal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contatoemail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasareas as $sistemasarea): ?>
            <tr>
                <td><?= $this->Number->format($sistemasarea->id) ?></td>
                <td><?= $sistemasarea->has('sistema') ? $this->Html->link($sistemasarea->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasarea->sistema->id]) : '' ?></td>
                <td><?= $sistemasarea->has('departamento') ? $this->Html->link($sistemasarea->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistemasarea->departamento->id]) : '' ?></td>
                <td><?= h($sistemasarea->contato) ?></td>
                <td><?= $this->Number->format($sistemasarea->quantidadeusuarios) ?></td>
                <td><?= $this->Number->format($sistemasarea->quantidadelicencas) ?></td>
                <td><?= h($sistemasarea->tipolicenca) ?></td>
                <td><?= h($sistemasarea->created) ?></td>
                <td><?= h($sistemasarea->modified) ?></td>
                <td><?= h($sistemasarea->descricao) ?></td>
                <td><?= h($sistemasarea->papeldocontato) ?></td>
                <td><?= h($sistemasarea->contatoramal) ?></td>
                <td><?= h($sistemasarea->contatoemail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasarea->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasarea->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasarea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasarea->id)]) ?>
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
