<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodotipo $periodotipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Periodotipo'), ['action' => 'edit', $periodotipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Periodotipo'), ['action' => 'delete', $periodotipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodotipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Periodotipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodotipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periodotipos view large-9 medium-8 columns content">
    <h3><?= h($periodotipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($periodotipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($periodotipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias') ?></th>
            <td><?= $this->Number->format($periodotipo->dias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($periodotipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($periodotipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Propostasalocs') ?></h4>
        <?php if (!empty($periodotipo->propostasalocs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proposta Id') ?></th>
                <th scope="col"><?= __('Competencia Id') ?></th>
                <th scope="col"><?= __('Grade') ?></th>
                <th scope="col"><?= __('Totalhoras') ?></th>
                <th scope="col"><?= __('Dataprevistainicio') ?></th>
                <th scope="col"><?= __('Dataprevistafim') ?></th>
                <th scope="col"><?= __('Hrinicio') ?></th>
                <th scope="col"><?= __('Hrfim') ?></th>
                <th scope="col"><?= __('Jornadatrabalho') ?></th>
                <th scope="col"><?= __('Tempototalintervalos') ?></th>
                <th scope="col"><?= __('Aprovadohoraextra') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Considerarsabadototal') ?></th>
                <th scope="col"><?= __('Considerardomingo') ?></th>
                <th scope="col"><?= __('Considerarferiado') ?></th>
                <th scope="col"><?= __('Considerarsabadoparcial') ?></th>
                <th scope="col"><?= __('Jornadatrabalholiquido') ?></th>
                <th scope="col"><?= __('Periodoqte') ?></th>
                <th scope="col"><?= __('Periodotipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($periodotipo->propostasalocs as $propostasalocs): ?>
            <tr>
                <td><?= h($propostasalocs->id) ?></td>
                <td><?= h($propostasalocs->proposta_id) ?></td>
                <td><?= h($propostasalocs->competencia_id) ?></td>
                <td><?= h($propostasalocs->grade) ?></td>
                <td><?= h($propostasalocs->totalhoras) ?></td>
                <td><?= h($propostasalocs->dataprevistainicio) ?></td>
                <td><?= h($propostasalocs->dataprevistafim) ?></td>
                <td><?= h($propostasalocs->hrinicio) ?></td>
                <td><?= h($propostasalocs->hrfim) ?></td>
                <td><?= h($propostasalocs->jornadatrabalho) ?></td>
                <td><?= h($propostasalocs->tempototalintervalos) ?></td>
                <td><?= h($propostasalocs->aprovadohoraextra) ?></td>
                <td><?= h($propostasalocs->created) ?></td>
                <td><?= h($propostasalocs->modified) ?></td>
                <td><?= h($propostasalocs->considerarsabadototal) ?></td>
                <td><?= h($propostasalocs->considerardomingo) ?></td>
                <td><?= h($propostasalocs->considerarferiado) ?></td>
                <td><?= h($propostasalocs->considerarsabadoparcial) ?></td>
                <td><?= h($propostasalocs->jornadatrabalholiquido) ?></td>
                <td><?= h($propostasalocs->periodoqte) ?></td>
                <td><?= h($propostasalocs->periodotipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Propostasalocs', 'action' => 'view', $propostasalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Propostasalocs', 'action' => 'edit', $propostasalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Propostasalocs', 'action' => 'delete', $propostasalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
