<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pmolancamentostipo $pmolancamentostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pmolancamentostipo'), ['action' => 'edit', $pmolancamentostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pmolancamentostipo'), ['action' => 'delete', $pmolancamentostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pmolancamentostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pmolancamentostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pmolancamentostipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pmocapacitytransactions'), ['controller' => 'Pmocapacitytransactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pmocapacitytransaction'), ['controller' => 'Pmocapacitytransactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pmolancamentostipos view large-9 medium-8 columns content">
    <h3><?= h($pmolancamentostipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($pmolancamentostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($pmolancamentostipo->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calculacapacidade') ?></th>
            <td><?= h($pmolancamentostipo->calculacapacidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operacao') ?></th>
            <td><?= h($pmolancamentostipo->operacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pmolancamentostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($pmolancamentostipo->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pmolancamentostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pmolancamentostipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pmocapacitytransactions') ?></h4>
        <?php if (!empty($pmolancamentostipo->pmocapacitytransactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Pmolancamentostipo Id') ?></th>
                <th scope="col"><?= __('Tempo') ?></th>
                <th scope="col"><?= __('Estorno') ?></th>
                <th scope="col"><?= __('Sinal') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col"><?= __('Previstorealizado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pmolancamentostipo->pmocapacitytransactions as $pmocapacitytransactions): ?>
            <tr>
                <td><?= h($pmocapacitytransactions->id) ?></td>
                <td><?= h($pmocapacitytransactions->projeto_id) ?></td>
                <td><?= h($pmocapacitytransactions->consultore_id) ?></td>
                <td><?= h($pmocapacitytransactions->data) ?></td>
                <td><?= h($pmocapacitytransactions->pmolancamentostipo_id) ?></td>
                <td><?= h($pmocapacitytransactions->tempo) ?></td>
                <td><?= h($pmocapacitytransactions->estorno) ?></td>
                <td><?= h($pmocapacitytransactions->sinal) ?></td>
                <td><?= h($pmocapacitytransactions->referencia) ?></td>
                <td><?= h($pmocapacitytransactions->referenciadia) ?></td>
                <td><?= h($pmocapacitytransactions->previstorealizado) ?></td>
                <td><?= h($pmocapacitytransactions->created) ?></td>
                <td><?= h($pmocapacitytransactions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pmocapacitytransactions', 'action' => 'view', $pmocapacitytransactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pmocapacitytransactions', 'action' => 'edit', $pmocapacitytransactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pmocapacitytransactions', 'action' => 'delete', $pmocapacitytransactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pmocapacitytransactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
