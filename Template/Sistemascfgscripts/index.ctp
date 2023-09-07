<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgscript[]|\Cake\Collection\CollectionInterface $sistemascfgscripts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgscript'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scriptstipos'), ['controller' => 'Scriptstipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Scriptstipo'), ['controller' => 'Scriptstipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documentos'), ['controller' => 'Documentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documento'), ['controller' => 'Documentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgscripts index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgscripts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scriptstipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versaonumero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataroteiro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgscripts as $sistemascfgscript): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgscript->id) ?></td>
                <td><?= $sistemascfgscript->has('sistema') ? $this->Html->link($sistemascfgscript->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgscript->sistema->id]) : '' ?></td>
                <td><?= $sistemascfgscript->has('scriptstipo') ? $this->Html->link($sistemascfgscript->scriptstipo->id, ['controller' => 'Scriptstipos', 'action' => 'view', $sistemascfgscript->scriptstipo->id]) : '' ?></td>
                <td><?= h($sistemascfgscript->descricao) ?></td>
                <td><?= $this->Number->format($sistemascfgscript->versaonumero) ?></td>
                <td><?= h($sistemascfgscript->ativo) ?></td>
                <td><?= h($sistemascfgscript->autor) ?></td>
                <td><?= h($sistemascfgscript->dataroteiro) ?></td>
                <td><?= h($sistemascfgscript->codenome) ?></td>
                <td><?= $sistemascfgscript->has('documento') ? $this->Html->link($sistemascfgscript->documento->descricao, ['controller' => 'Documentos', 'action' => 'view', $sistemascfgscript->documento->id]) : '' ?></td>
                <td><?= h($sistemascfgscript->created) ?></td>
                <td><?= h($sistemascfgscript->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgscript->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgscript->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgscript->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgscript->id)]) ?>
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
