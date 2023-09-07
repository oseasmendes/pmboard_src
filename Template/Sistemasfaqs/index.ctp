<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaq[]|\Cake\Collection\CollectionInterface $sistemasfaqs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaq'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregasfaqs'), ['controller' => 'Entregasfaqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregasfaq'), ['controller' => 'Entregasfaqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhes'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhe'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasfaqs index large-9 medium-8 columns content">
    <h3><?= __('Sistemasfaqs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FrequentlyAskedQuestions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasfaqs as $sistemasfaq): ?>
            <tr>
                <td><?= $this->Number->format($sistemasfaq->id) ?></td>
                <td><?= $sistemasfaq->has('sistema') ? $this->Html->link($sistemasfaq->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasfaq->sistema->id]) : '' ?></td>
                <td><?= h($sistemasfaq->referencia) ?></td>
                <td><?= h($sistemasfaq->Descricao) ?></td>
                <td><?= h($sistemasfaq->FrequentlyAskedQuestions) ?></td>
                <td><?= h($sistemasfaq->created) ?></td>
                <td><?= h($sistemasfaq->modified) ?></td>
                <td><?= h($sistemasfaq->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasfaq->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasfaq->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasfaq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaq->id)]) ?>
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
