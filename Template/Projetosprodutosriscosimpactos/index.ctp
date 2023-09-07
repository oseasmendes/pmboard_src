<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosimpacto[]|\Cake\Collection\CollectionInterface $projetosprodutosriscosimpactos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosimpacto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosriscosimpactos index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosriscosimpactos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosrisco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosriscosimpactos as $projetosprodutosriscosimpacto): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosriscosimpacto->id) ?></td>
                <td><?= $projetosprodutosriscosimpacto->has('projetosprodutosrisco') ? $this->Html->link($projetosprodutosriscosimpacto->projetosprodutosrisco->id, ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscosimpacto->projetosprodutosrisco->id]) : '' ?></td>
                <td><?= h($projetosprodutosriscosimpacto->descricao) ?></td>
                <td><?= h($projetosprodutosriscosimpacto->tipo) ?></td>
                <td><?= h($projetosprodutosriscosimpacto->nivel) ?></td>
                <td><?= h($projetosprodutosriscosimpacto->created) ?></td>
                <td><?= h($projetosprodutosriscosimpacto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosriscosimpacto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosriscosimpacto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosriscosimpacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscosimpacto->id)]) ?>
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
