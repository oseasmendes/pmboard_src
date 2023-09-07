<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propostasaloc $propostasaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Propostasaloc'), ['action' => 'edit', $propostasaloc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Propostasaloc'), ['action' => 'delete', $propostasaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasaloc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propostas'), ['controller' => 'Propostas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposta'), ['controller' => 'Propostas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodotipos'), ['controller' => 'Periodotipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodotipo'), ['controller' => 'Periodotipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propostasalocsagendas'), ['controller' => 'Propostasalocsagendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propostasalocsagenda'), ['controller' => 'Propostasalocsagendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propostasalocs view large-9 medium-8 columns content">
    <h3><?= h($propostasaloc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proposta') ?></th>
            <td><?= $propostasaloc->has('proposta') ? $this->Html->link($propostasaloc->proposta->descricao, ['controller' => 'Propostas', 'action' => 'view', $propostasaloc->proposta->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competencia') ?></th>
            <td><?= $propostasaloc->has('competencia') ? $this->Html->link($propostasaloc->competencia->descricao, ['controller' => 'Competencias', 'action' => 'view', $propostasaloc->competencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= h($propostasaloc->grade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hrinicio') ?></th>
            <td><?= h($propostasaloc->hrinicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hrfim') ?></th>
            <td><?= h($propostasaloc->hrfim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aprovadohoraextra') ?></th>
            <td><?= h($propostasaloc->aprovadohoraextra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodotipo') ?></th>
            <td><?= $propostasaloc->has('periodotipo') ? $this->Html->link($propostasaloc->periodotipo->descricao, ['controller' => 'Periodotipos', 'action' => 'view', $propostasaloc->periodotipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($propostasaloc->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($propostasaloc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Totalhoras') ?></th>
            <td><?= $this->Number->format($propostasaloc->totalhoras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jornadatrabalho') ?></th>
            <td><?= $this->Number->format($propostasaloc->jornadatrabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempototalintervalos') ?></th>
            <td><?= $this->Number->format($propostasaloc->tempototalintervalos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jornadatrabalholiquido') ?></th>
            <td><?= $this->Number->format($propostasaloc->jornadatrabalholiquido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodoqte') ?></th>
            <td><?= $this->Number->format($propostasaloc->periodoqte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevistainicio') ?></th>
            <td><?= h($propostasaloc->dataprevistainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevistafim') ?></th>
            <td><?= h($propostasaloc->dataprevistafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($propostasaloc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($propostasaloc->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Considerarsabadototal') ?></th>
            <td><?= $propostasaloc->considerarsabadototal ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Considerardomingo') ?></th>
            <td><?= $propostasaloc->considerardomingo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Considerarferiado') ?></th>
            <td><?= $propostasaloc->considerarferiado ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Considerarsabadoparcial') ?></th>
            <td><?= $propostasaloc->considerarsabadoparcial ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Propostasalocsagendas') ?></h4>
        <?php if (!empty($propostasaloc->propostasalocsagendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Propostasaloc Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Jornadadetrabalho') ?></th>
                <th scope="col"><?= __('Hrinicio') ?></th>
                <th scope="col"><?= __('Hrfim') ?></th>
                <th scope="col"><?= __('Semanatag') ?></th>
                <th scope="col"><?= __('Semananumero') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col"><?= __('Jornadatrabalholiquido') ?></th>
                <th scope="col"><?= __('Ordem') ?></th>
                <th scope="col"><?= __('Weekend') ?></th>
                <th scope="col"><?= __('Diasemana') ?></th>
                <th scope="col"><?= __('Mes') ?></th>
                <th scope="col"><?= __('Ano') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($propostasaloc->propostasalocsagendas as $propostasalocsagendas): ?>
            <tr>
                <td><?= h($propostasalocsagendas->id) ?></td>
                <td><?= h($propostasalocsagendas->propostasaloc_id) ?></td>
                <td><?= h($propostasalocsagendas->data) ?></td>
                <td><?= h($propostasalocsagendas->jornadadetrabalho) ?></td>
                <td><?= h($propostasalocsagendas->hrinicio) ?></td>
                <td><?= h($propostasalocsagendas->hrfim) ?></td>
                <td><?= h($propostasalocsagendas->semanatag) ?></td>
                <td><?= h($propostasalocsagendas->semananumero) ?></td>
                <td><?= h($propostasalocsagendas->created) ?></td>
                <td><?= h($propostasalocsagendas->modified) ?></td>
                <td><?= h($propostasalocsagendas->referenciadia) ?></td>
                <td><?= h($propostasalocsagendas->jornadatrabalholiquido) ?></td>
                <td><?= h($propostasalocsagendas->ordem) ?></td>
                <td><?= h($propostasalocsagendas->weekend) ?></td>
                <td><?= h($propostasalocsagendas->diasemana) ?></td>
                <td><?= h($propostasalocsagendas->mes) ?></td>
                <td><?= h($propostasalocsagendas->ano) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Propostasalocsagendas', 'action' => 'view', $propostasalocsagendas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Propostasalocsagendas', 'action' => 'edit', $propostasalocsagendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Propostasalocsagendas', 'action' => 'delete', $propostasalocsagendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasalocsagendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
