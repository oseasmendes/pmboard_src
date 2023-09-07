<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centrocusto $centrocusto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centrocusto'), ['action' => 'edit', $centrocusto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centrocusto'), ['action' => 'delete', $centrocusto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centrocusto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centrocustos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centrocusto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propostas'), ['controller' => 'Propostas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposta'), ['controller' => 'Propostas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centrocustos view large-9 medium-8 columns content">
    <h3><?= h($centrocusto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($centrocusto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigoexterno') ?></th>
            <td><?= h($centrocusto->codigoexterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centrocusto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($centrocusto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($centrocusto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Propostas') ?></h4>
        <?php if (!empty($centrocusto->propostas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Numerointernoproposta') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Datademanda') ?></th>
                <th scope="col"><?= __('Numeropo') ?></th>
                <th scope="col"><?= __('Referenciacliente') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Valortotal') ?></th>
                <th scope="col"><?= __('Horastotal') ?></th>
                <th scope="col"><?= __('Centrocusto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centrocusto->propostas as $propostas): ?>
            <tr>
                <td><?= h($propostas->id) ?></td>
                <td><?= h($propostas->data) ?></td>
                <td><?= h($propostas->numerointernoproposta) ?></td>
                <td><?= h($propostas->descricao) ?></td>
                <td><?= h($propostas->empresa_id) ?></td>
                <td><?= h($propostas->datademanda) ?></td>
                <td><?= h($propostas->numeropo) ?></td>
                <td><?= h($propostas->referenciacliente) ?></td>
                <td><?= h($propostas->statusfuncional_id) ?></td>
                <td><?= h($propostas->valortotal) ?></td>
                <td><?= h($propostas->horastotal) ?></td>
                <td><?= h($propostas->centrocusto_id) ?></td>
                <td><?= h($propostas->created) ?></td>
                <td><?= h($propostas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Propostas', 'action' => 'view', $propostas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Propostas', 'action' => 'edit', $propostas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Propostas', 'action' => 'delete', $propostas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
