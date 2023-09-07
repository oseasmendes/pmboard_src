<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnologia $tecnologia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tecnologia'), ['action' => 'edit', $tecnologia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tecnologia'), ['action' => 'delete', $tecnologia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnologia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sh Apptechno'), ['controller' => 'ShApptechno', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sh Apptechno'), ['controller' => 'ShApptechno', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tecnologias view large-9 medium-8 columns content">
    <h3><?= h($tecnologia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($tecnologia->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tecnologia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tecnologia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tecnologia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultoresvrstecnologias') ?></h4>
        <?php if (!empty($tecnologia->consultoresvrstecnologias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultor Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tecnologia->consultoresvrstecnologias as $consultoresvrstecnologias): ?>
            <tr>
                <td><?= h($consultoresvrstecnologias->id) ?></td>
                <td><?= h($consultoresvrstecnologias->consultor_id) ?></td>
                <td><?= h($consultoresvrstecnologias->tecnologia_id) ?></td>
                <td><?= h($consultoresvrstecnologias->knowhow_id) ?></td>
                <td><?= h($consultoresvrstecnologias->created) ?></td>
                <td><?= h($consultoresvrstecnologias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'view', $consultoresvrstecnologias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'edit', $consultoresvrstecnologias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'delete', $consultoresvrstecnologias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresvrstecnologias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Integrations') ?></h4>
        <?php if (!empty($tecnologia->integrations)): ?>
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
            <?php foreach ($tecnologia->integrations as $integrations): ?>
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
        <h4><?= __('Related Sh Apptechno') ?></h4>
        <?php if (!empty($tecnologia->sh_apptechno)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aplicacoe Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tecnologia->sh_apptechno as $shApptechno): ?>
            <tr>
                <td><?= h($shApptechno->id) ?></td>
                <td><?= h($shApptechno->aplicacoe_id) ?></td>
                <td><?= h($shApptechno->tecnologia_id) ?></td>
                <td><?= h($shApptechno->created) ?></td>
                <td><?= h($shApptechno->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ShApptechno', 'action' => 'view', $shApptechno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShApptechno', 'action' => 'edit', $shApptechno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShApptechno', 'action' => 'delete', $shApptechno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shApptechno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemascfgfronts') ?></h4>
        <?php if (!empty($tecnologia->sistemascfgfronts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Ultimaatualizacao') ?></th>
                <th scope="col"><?= __('Motivoatualizacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tecnologia->sistemascfgfronts as $sistemascfgfronts): ?>
            <tr>
                <td><?= h($sistemascfgfronts->id) ?></td>
                <td><?= h($sistemascfgfronts->tecnologia_id) ?></td>
                <td><?= h($sistemascfgfronts->descricao) ?></td>
                <td><?= h($sistemascfgfronts->percentual) ?></td>
                <td><?= h($sistemascfgfronts->versao) ?></td>
                <td><?= h($sistemascfgfronts->ultimaatualizacao) ?></td>
                <td><?= h($sistemascfgfronts->motivoatualizacao) ?></td>
                <td><?= h($sistemascfgfronts->created) ?></td>
                <td><?= h($sistemascfgfronts->modified) ?></td>
                <td><?= h($sistemascfgfronts->sistema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgfronts', 'action' => 'view', $sistemascfgfronts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgfronts', 'action' => 'edit', $sistemascfgfronts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgfronts', 'action' => 'delete', $sistemascfgfronts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgfronts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemascfgintegrations') ?></h4>
        <?php if (!empty($tecnologia->sistemascfgintegrations)): ?>
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
            <?php foreach ($tecnologia->sistemascfgintegrations as $sistemascfgintegrations): ?>
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
