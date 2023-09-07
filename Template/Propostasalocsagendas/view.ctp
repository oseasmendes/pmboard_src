<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propostasalocsagenda $propostasalocsagenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Propostasalocsagenda'), ['action' => 'edit', $propostasalocsagenda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Propostasalocsagenda'), ['action' => 'delete', $propostasalocsagenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasalocsagenda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Propostasalocsagendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propostasalocsagenda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propostasalocsagendas view large-9 medium-8 columns content">
    <h3><?= h($propostasalocsagenda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Propostasaloc') ?></th>
            <td><?= $propostasalocsagenda->has('propostasaloc') ? $this->Html->link($propostasalocsagenda->propostasaloc->id, ['controller' => 'Propostasalocs', 'action' => 'view', $propostasalocsagenda->propostasaloc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hrinicio') ?></th>
            <td><?= h($propostasalocsagenda->hrinicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hrfim') ?></th>
            <td><?= h($propostasalocsagenda->hrfim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semanatag') ?></th>
            <td><?= h($propostasalocsagenda->semanatag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referenciadia') ?></th>
            <td><?= h($propostasalocsagenda->referenciadia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jornadadetrabalho') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->jornadadetrabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semananumero') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->semananumero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jornadatrabalholiquido') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->jornadatrabalholiquido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weekend') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->weekend) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diasemana') ?></th>
            <td><?= $this->Number->format($propostasalocsagenda->diasemana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($propostasalocsagenda->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($propostasalocsagenda->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($propostasalocsagenda->modified) ?></td>
        </tr>
    </table>
</div>
