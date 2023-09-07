<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscontato[]|\Cake\Collection\CollectionInterface $projetoscontatos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetoscontato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscontatos index large-9 medium-8 columns content">
    <h3><?= __('Projetoscontatos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('papel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataengajamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('representacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetoscontatos as $projetoscontato): ?>
            <tr>
                <td><?= $this->Number->format($projetoscontato->id) ?></td>
                <td><?= $projetoscontato->has('projeto') ? $this->Html->link($projetoscontato->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetoscontato->projeto->id]) : '' ?></td>
                <td><?= $projetoscontato->has('participante') ? $this->Html->link($projetoscontato->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $projetoscontato->participante->id]) : '' ?></td>
                <td><?= h($projetoscontato->nome) ?></td>
                <td><?= h($projetoscontato->papel) ?></td>
                <td><?= h($projetoscontato->descricao) ?></td>
                <td><?= h($projetoscontato->dataengajamento) ?></td>
                <td><?= h($projetoscontato->representacao) ?></td>
                <td><?= h($projetoscontato->created) ?></td>
                <td><?= h($projetoscontato->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetoscontato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetoscontato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetoscontato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscontato->id)]) ?>
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
