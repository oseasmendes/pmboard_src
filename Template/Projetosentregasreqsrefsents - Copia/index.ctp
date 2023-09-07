<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsent[]|\Cake\Collection\CollectionInterface $projetosentregasreqsrefsents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsent'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsents index large-9 medium-8 columns content">
    <h3><?= __('Projetosentregasreqsrefsents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosentregasreqsref_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tabela') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('formato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chave') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasreqsrefsents as $projetosentregasreqsrefsent): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasreqsrefsent->id) ?></td>
                <td><?= $this->Number->format($projetosentregasreqsrefsent->projetosentregasreqsref_id) ?></td>
                <td><?= h($projetosentregasreqsrefsent->tabela) ?></td>
                <td><?= h($projetosentregasreqsrefsent->campo) ?></td>
                <td><?= h($projetosentregasreqsrefsent->tipo) ?></td>
                <td><?= h($projetosentregasreqsrefsent->formato) ?></td>
                <td><?= h($projetosentregasreqsrefsent->descricao) ?></td>
                <td><?= h($projetosentregasreqsrefsent->created) ?></td>
                <td><?= h($projetosentregasreqsrefsent->modified) ?></td>
                <td><?= h($projetosentregasreqsrefsent->chave) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasreqsrefsent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasreqsrefsent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasreqsrefsent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsent->id)]) ?>
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
