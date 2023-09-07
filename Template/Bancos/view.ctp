<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banco $banco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banco'), ['action' => 'edit', $banco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banco'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sh Appbancos'), ['controller' => 'ShAppbancos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sh Appbanco'), ['controller' => 'ShAppbancos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bancos view large-9 medium-8 columns content">
    <h3><?= h($banco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($banco->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($banco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($banco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($banco->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Integrations') ?></h4>
        <?php if (!empty($banco->integrations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Banco Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Servico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($banco->integrations as $integrations): ?>
            <tr>
                <td><?= h($integrations->id) ?></td>
                <td><?= h($integrations->referencia) ?></td>
                <td><?= h($integrations->descricao) ?></td>
                <td><?= h($integrations->banco_id) ?></td>
                <td><?= h($integrations->tecnologia_id) ?></td>
                <td><?= h($integrations->servico) ?></td>
                <td><?= h($integrations->created) ?></td>
                <td><?= h($integrations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Integrations', 'action' => 'view', $integrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Integrations', 'action' => 'edit', $integrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Integrations', 'action' => 'delete', $integrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $integrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sh Appbancos') ?></h4>
        <?php if (!empty($banco->sh_appbancos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aplicacoe Id') ?></th>
                <th scope="col"><?= __('Banco Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($banco->sh_appbancos as $shAppbancos): ?>
            <tr>
                <td><?= h($shAppbancos->id) ?></td>
                <td><?= h($shAppbancos->aplicacoe_id) ?></td>
                <td><?= h($shAppbancos->banco_id) ?></td>
                <td><?= h($shAppbancos->created) ?></td>
                <td><?= h($shAppbancos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ShAppbancos', 'action' => 'view', $shAppbancos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShAppbancos', 'action' => 'edit', $shAppbancos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShAppbancos', 'action' => 'delete', $shAppbancos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shAppbancos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemascfgdbs') ?></h4>
        <?php if (!empty($banco->sistemascfgdbs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Banco Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Ipaddress') ?></th>
                <th scope="col"><?= __('Conn') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($banco->sistemascfgdbs as $sistemascfgdbs): ?>
            <tr>
                <td><?= h($sistemascfgdbs->id) ?></td>
                <td><?= h($sistemascfgdbs->sistema_id) ?></td>
                <td><?= h($sistemascfgdbs->banco_id) ?></td>
                <td><?= h($sistemascfgdbs->descricao) ?></td>
                <td><?= h($sistemascfgdbs->contato) ?></td>
                <td><?= h($sistemascfgdbs->ipaddress) ?></td>
                <td><?= h($sistemascfgdbs->conn) ?></td>
                <td><?= h($sistemascfgdbs->versao) ?></td>
                <td><?= h($sistemascfgdbs->created) ?></td>
                <td><?= h($sistemascfgdbs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgdbs', 'action' => 'view', $sistemascfgdbs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgdbs', 'action' => 'edit', $sistemascfgdbs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgdbs', 'action' => 'delete', $sistemascfgdbs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdbs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
