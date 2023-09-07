<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasoppresposta[]|\Cake\Collection\CollectionInterface $projetosentregasopprespostas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasoppresposta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasopenpoints'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasopenpoint'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasopprespostas index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasopprespostas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasopenpoint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('respondidopor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('respondidopara') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docreferencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docdata') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doccanal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docassunto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planoacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusprojeto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasopprespostas as $projetosentregasoppresposta): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasoppresposta->id) ?></td>
                <td><?= $projetosentregasoppresposta->has('projetosentregasopenpoint') ? $this->Html->link($projetosentregasoppresposta->projetosentregasopenpoint->id, ['controller' => 'Projetosentregasopenpoints', 'action' => 'view', $projetosentregasoppresposta->projetosentregasopenpoint->id]) : '' ?></td>
                <td><?= h($projetosentregasoppresposta->respondidopor) ?></td>
                <td><?= h($projetosentregasoppresposta->respondidopara) ?></td>
                <td><?= h($projetosentregasoppresposta->descricao) ?></td>
                <td><?= h($projetosentregasoppresposta->docreferencia) ?></td>
                <td><?= h($projetosentregasoppresposta->docdata) ?></td>
                <td><?= h($projetosentregasoppresposta->doccanal) ?></td>
                <td><?= h($projetosentregasoppresposta->docassunto) ?></td>
                <td><?= h($projetosentregasoppresposta->planoacao) ?></td>
                <td><?= h($projetosentregasoppresposta->validado) ?></td>
                <td><?= h($projetosentregasoppresposta->created) ?></td>
                <td><?= h($projetosentregasoppresposta->modified) ?></td>
                <td><?= h($projetosentregasoppresposta->statusprojeto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasoppresposta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasoppresposta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasoppresposta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasoppresposta->id)]) ?>
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
