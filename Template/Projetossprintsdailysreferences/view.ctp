<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsdailysreference $projetossprintsdailysreference
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsdailysreference'), ['action' => 'edit', $projetossprintsdailysreference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsdailysreference'), ['action' => 'delete', $projetossprintsdailysreference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsdailysreference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsdailysreferences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsdailysreference'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetossprintsdailysreferences view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsdailysreference->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Reference') ?></th>
            <td><?= h($projetossprintsdailysreference->reference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($projetossprintsdailysreference->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($projetossprintsdailysreference->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsdailysreference->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetossprintsdaily Id') ?></th>
            <td><?= $this->Number->format($projetossprintsdailysreference->projetossprintsdaily_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numericreference') ?></th>
            <td><?= $this->Number->format($projetossprintsdailysreference->numericreference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsdailysreference->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsdailysreference->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lancadoem') ?></th>
            <td><?= h($projetossprintsdailysreference->lancadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelado') ?></th>
            <td><?= $projetossprintsdailysreference->cancelado ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Done') ?></th>
            <td><?= $projetossprintsdailysreference->done ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doing') ?></th>
            <td><?= $projetossprintsdailysreference->doing ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testing') ?></th>
            <td><?= $projetossprintsdailysreference->testing ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collaboration') ?></th>
            <td><?= $projetossprintsdailysreference->collaboration ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selected') ?></th>
            <td><?= $projetossprintsdailysreference->Selected ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analysing') ?></th>
            <td><?= $projetossprintsdailysreference->analysing ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actionsplans') ?></th>
            <td><?= $projetossprintsdailysreference->actionsplans ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Generatenews') ?></th>
            <td><?= $projetossprintsdailysreference->generatenews ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Support') ?></th>
            <td><?= $projetossprintsdailysreference->support ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Risk') ?></th>
            <td><?= $projetossprintsdailysreference->risk ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customeraction') ?></th>
            <td><?= $projetossprintsdailysreference->customeraction ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customeractionflag') ?></th>
            <td><?= $projetossprintsdailysreference->customeractionflag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
