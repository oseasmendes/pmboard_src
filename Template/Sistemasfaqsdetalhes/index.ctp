<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhe[]|\Cake\Collection\CollectionInterface $sistemasfaqsdetalhes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqs'), ['controller' => 'Sistemasfaqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaq'), ['controller' => 'Sistemasfaqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhesimgs'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhesimg'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasfaqsdetalhes index large-9 medium-8 columns content">
    <h3><?= __('Sistemasfaqsdetalhes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasfaq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contribuicaode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('faqprecedente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasfaqsdetalhes as $sistemasfaqsdetalhe): ?>
            <tr>
                <td><?= $this->Number->format($sistemasfaqsdetalhe->id) ?></td>
                <td><?= $sistemasfaqsdetalhe->has('sistemasfaq') ? $this->Html->link($sistemasfaqsdetalhe->sistemasfaq->id, ['controller' => 'Sistemasfaqs', 'action' => 'view', $sistemasfaqsdetalhe->sistemasfaq->id]) : '' ?></td>
                <td><?= h($sistemasfaqsdetalhe->referencia) ?></td>
                <td><?= $this->Number->format($sistemasfaqsdetalhe->ordem) ?></td>
                <td><?= h($sistemasfaqsdetalhe->descricao) ?></td>
                <td><?= $sistemasfaqsdetalhe->has('participante') ? $this->Html->link($sistemasfaqsdetalhe->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $sistemasfaqsdetalhe->participante->id]) : '' ?></td>
                <td><?= h($sistemasfaqsdetalhe->contribuicaode) ?></td>
                <td><?= $this->Number->format($sistemasfaqsdetalhe->faqprecedente) ?></td>
                <td><?= h($sistemasfaqsdetalhe->ativo) ?></td>
                <td><?= h($sistemasfaqsdetalhe->created) ?></td>
                <td><?= h($sistemasfaqsdetalhe->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasfaqsdetalhe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasfaqsdetalhe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasfaqsdetalhe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaqsdetalhe->id)]) ?>
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
