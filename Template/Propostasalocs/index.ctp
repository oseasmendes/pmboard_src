<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propostasaloc[]|\Cake\Collection\CollectionInterface $propostasalocs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostas'), ['controller' => 'Propostas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposta'), ['controller' => 'Propostas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodotipos'), ['controller' => 'Periodotipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodotipo'), ['controller' => 'Periodotipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocsagendas'), ['controller' => 'Propostasalocsagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasalocsagenda'), ['controller' => 'Propostasalocsagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propostasalocs index large-9 medium-8 columns content">
    <h3><?= __('Propostasalocs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proposta_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalhoras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataprevistainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataprevistafim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hrinicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hrfim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jornadatrabalho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempototalintervalos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aprovadohoraextra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('considerarsabadototal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('considerardomingo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('considerarferiado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('considerarsabadoparcial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jornadatrabalholiquido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodoqte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodotipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propostasalocs as $propostasaloc): ?>
            <tr>
                <td><?= $this->Number->format($propostasaloc->id) ?></td>
                <td><?= $propostasaloc->has('proposta') ? $this->Html->link($propostasaloc->proposta->descricao, ['controller' => 'Propostas', 'action' => 'view', $propostasaloc->proposta->id]) : '' ?></td>
                <td><?= $propostasaloc->has('competencia') ? $this->Html->link($propostasaloc->competencia->descricao, ['controller' => 'Competencias', 'action' => 'view', $propostasaloc->competencia->id]) : '' ?></td>
                <td><?= h($propostasaloc->grade) ?></td>
                <td><?= $this->Number->format($propostasaloc->totalhoras) ?></td>
                <td><?= h($propostasaloc->dataprevistainicio) ?></td>
                <td><?= h($propostasaloc->dataprevistafim) ?></td>
                <td><?= h($propostasaloc->hrinicio) ?></td>
                <td><?= h($propostasaloc->hrfim) ?></td>
                <td><?= $this->Number->format($propostasaloc->jornadatrabalho) ?></td>
                <td><?= $this->Number->format($propostasaloc->tempototalintervalos) ?></td>
                <td><?= h($propostasaloc->aprovadohoraextra) ?></td>
                <td><?= h($propostasaloc->created) ?></td>
                <td><?= h($propostasaloc->modified) ?></td>
                <td><?= h($propostasaloc->considerarsabadototal) ?></td>
                <td><?= h($propostasaloc->considerardomingo) ?></td>
                <td><?= h($propostasaloc->considerarferiado) ?></td>
                <td><?= h($propostasaloc->considerarsabadoparcial) ?></td>
                <td><?= $this->Number->format($propostasaloc->jornadatrabalholiquido) ?></td>
                <td><?= $this->Number->format($propostasaloc->periodoqte) ?></td>
                <td><?= $propostasaloc->has('periodotipo') ? $this->Html->link($propostasaloc->periodotipo->descricao, ['controller' => 'Periodotipos', 'action' => 'view', $propostasaloc->periodotipo->id]) : '' ?></td>
                <td><?= h($propostasaloc->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $propostasaloc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $propostasaloc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $propostasaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasaloc->id)]) ?>
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
