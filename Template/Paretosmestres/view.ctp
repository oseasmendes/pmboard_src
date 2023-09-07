<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paretosmestre $paretosmestre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paretosmestre'), ['action' => 'edit', $paretosmestre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paretosmestre'), ['action' => 'delete', $paretosmestre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paretosmestre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paretosmestres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paretosmestre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paretosmestres view large-9 medium-8 columns content">
    <h3><?= h($paretosmestre->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($paretosmestre->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paretosmestre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paretosmestre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paretosmestre->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paretos') ?></h4>
        <?php if (!empty($paretosmestre->paretos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Kanban') ?></th>
                <th scope="col"><?= __('Workload') ?></th>
                <th scope="col"><?= __('Unidade') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Cor') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Rotulo') ?></th>
                <th scope="col"><?= __('Semaforo') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Responsabilidade') ?></th>
                <th scope="col"><?= __('Fechamento') ?></th>
                <th scope="col"><?= __('Prefechamento') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Paretosmestre Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paretosmestre->paretos as $paretos): ?>
            <tr>
                <td><?= h($paretos->id) ?></td>
                <td><?= h($paretos->Kanban) ?></td>
                <td><?= h($paretos->Workload) ?></td>
                <td><?= h($paretos->Unidade) ?></td>
                <td><?= h($paretos->prioridade) ?></td>
                <td><?= h($paretos->cor) ?></td>
                <td><?= h($paretos->ativo) ?></td>
                <td><?= h($paretos->rotulo) ?></td>
                <td><?= h($paretos->semaforo) ?></td>
                <td><?= h($paretos->projeto_id) ?></td>
                <td><?= h($paretos->responsabilidade) ?></td>
                <td><?= h($paretos->fechamento) ?></td>
                <td><?= h($paretos->prefechamento) ?></td>
                <td><?= h($paretos->created) ?></td>
                <td><?= h($paretos->modified) ?></td>
                <td><?= h($paretos->paretosmestre_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paretos', 'action' => 'view', $paretos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paretos', 'action' => 'edit', $paretos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paretos', 'action' => 'delete', $paretos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paretos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
