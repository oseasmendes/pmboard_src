<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgurl[]|\Cake\Collection\CollectionInterface $sistemascfgurls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgurl'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgurls index large-9 medium-8 columns content">
    <h3><?= __('Sistemascfgurls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasdoc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgurls as $sistemascfgurl): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgurl->id) ?></td>
                <td><?= $sistemascfgurl->has('sistema') ? $this->Html->link($sistemascfgurl->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgurl->sistema->id]) : '' ?></td>
                <td><?= h($sistemascfgurl->descricao) ?></td>
                <td><?= h($sistemascfgurl->observacao) ?></td>
                <td><?= h($sistemascfgurl->ativo) ?></td>
                <td><?= $sistemascfgurl->has('sistemasdoc') ? $this->Html->link($sistemascfgurl->sistemasdoc->documentonome, ['controller' => 'Sistemasdocs', 'action' => 'view', $sistemascfgurl->sistemasdoc->id]) : '' ?></td>
                <td><?= h($sistemascfgurl->created) ?></td>
                <td><?= h($sistemascfgurl->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgurl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgurl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgurl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgurl->id)]) ?>
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
