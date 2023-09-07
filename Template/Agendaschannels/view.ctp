<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendaschannel $agendaschannel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agendaschannel'), ['action' => 'edit', $agendaschannel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agendaschannel'), ['action' => 'delete', $agendaschannel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendaschannel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agendaschannels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendaschannel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendasnotes'), ['controller' => 'Agendasnotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendasnote'), ['controller' => 'Agendasnotes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agendaschannels view large-9 medium-8 columns content">
    <h3><?= h($agendaschannel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($agendaschannel->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agendaschannel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($agendaschannel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($agendaschannel->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendasnotes') ?></h4>
        <?php if (!empty($agendaschannel->agendasnotes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agendaschannel Id') ?></th>
                <th scope="col"><?= __('Agenda Id') ?></th>
                <th scope="col"><?= __('Timeinformed') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Keywords') ?></th>
                <th scope="col"><?= __('Actionplan') ?></th>
                <th scope="col"><?= __('Selection') ?></th>
                <th scope="col"><?= __('Beshared') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agendaschannel->agendasnotes as $agendasnotes): ?>
            <tr>
                <td><?= h($agendasnotes->id) ?></td>
                <td><?= h($agendasnotes->agendaschannel_id) ?></td>
                <td><?= h($agendasnotes->agenda_id) ?></td>
                <td><?= h($agendasnotes->timeinformed) ?></td>
                <td><?= h($agendasnotes->description) ?></td>
                <td><?= h($agendasnotes->comments) ?></td>
                <td><?= h($agendasnotes->statusfuncional_id) ?></td>
                <td><?= h($agendasnotes->keywords) ?></td>
                <td><?= h($agendasnotes->actionplan) ?></td>
                <td><?= h($agendasnotes->selection) ?></td>
                <td><?= h($agendasnotes->beshared) ?></td>
                <td><?= h($agendasnotes->created) ?></td>
                <td><?= h($agendasnotes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendasnotes', 'action' => 'view', $agendasnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendasnotes', 'action' => 'edit', $agendasnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendasnotes', 'action' => 'delete', $agendasnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendasnotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
