<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronus[]|\Cake\Collection\CollectionInterface $kronus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kronus'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronus index large-9 medium-8 columns content">
    <h3><?= __('Kronus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kronusplan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kickoff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('predecessora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('milestone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fasenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fase_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kronus as $kronus): ?>
            <tr>
                <td><?= $this->Number->format($kronus->id) ?></td>
                <td><?= $kronus->has('kronusplan') ? $this->Html->link($kronus->kronusplan->id, ['controller' => 'Kronusplans', 'action' => 'view', $kronus->kronusplan->id]) : '' ?></td>
                <td><?= h($kronus->unidade) ?></td>
                <td><?= $this->Number->format($kronus->seq) ?></td>
                <td><?= h($kronus->kickoff) ?></td>
                <td><?= h($kronus->categoria) ?></td>
                <td><?= h($kronus->ordem) ?></td>
                <td><?= h($kronus->atividade) ?></td>
                <td><?= h($kronus->duracao) ?></td>
                <td><?= h($kronus->inicio) ?></td>
                <td><?= h($kronus->fim) ?></td>
                <td><?= h($kronus->predecessora) ?></td>
                <td><?= h($kronus->responsavel) ?></td>
                <td><?= h($kronus->milestone) ?></td>
                <td><?= $kronus->has('flag') ? $this->Html->link($kronus->flag->id, ['controller' => 'Flags', 'action' => 'view', $kronus->flag->id]) : '' ?></td>
                <td><?= h($kronus->fasenome) ?></td>
                <td><?= h($kronus->created) ?></td>
                <td><?= h($kronus->modified) ?></td>
                <td><?= $kronus->has('fase') ? $this->Html->link($kronus->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $kronus->fase->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kronus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kronus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kronus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronus->id)]) ?>
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
