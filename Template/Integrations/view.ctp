<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Integration $integration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Integration'), ['action' => 'edit', $integration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Integration'), ['action' => 'delete', $integration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $integration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Integrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Integration'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="integrations view large-9 medium-8 columns content">
    <h3><?= h($integration->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($integration->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($integration->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banco') ?></th>
            <td><?= $integration->has('banco') ? $this->Html->link($integration->banco->id, ['controller' => 'Bancos', 'action' => 'view', $integration->banco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnologia') ?></th>
            <td><?= $integration->has('tecnologia') ? $this->Html->link($integration->tecnologia->id, ['controller' => 'Tecnologias', 'action' => 'view', $integration->tecnologia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Servico') ?></th>
            <td><?= h($integration->servico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($integration->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($integration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($integration->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemascfgintegrations') ?></h4>
        <?php if (!empty($integration->sistemascfgintegrations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Integration Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($integration->sistemascfgintegrations as $sistemascfgintegrations): ?>
            <tr>
                <td><?= h($sistemascfgintegrations->id) ?></td>
                <td><?= h($sistemascfgintegrations->tecnologia_id) ?></td>
                <td><?= h($sistemascfgintegrations->referencia) ?></td>
                <td><?= h($sistemascfgintegrations->descricao) ?></td>
                <td><?= h($sistemascfgintegrations->contato) ?></td>
                <td><?= h($sistemascfgintegrations->observacao) ?></td>
                <td><?= h($sistemascfgintegrations->created) ?></td>
                <td><?= h($sistemascfgintegrations->modified) ?></td>
                <td><?= h($sistemascfgintegrations->sistema_id) ?></td>
                <td><?= h($sistemascfgintegrations->integration_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgintegrations', 'action' => 'view', $sistemascfgintegrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgintegrations', 'action' => 'edit', $sistemascfgintegrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgintegrations', 'action' => 'delete', $sistemascfgintegrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgintegrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
