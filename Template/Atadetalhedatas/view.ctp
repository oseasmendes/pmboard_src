<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atadetalhedata $atadetalhedata
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atadetalhedata'), ['action' => 'edit', $atadetalhedata->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atadetalhedata'), ['action' => 'delete', $atadetalhedata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atadetalhedata->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atadetalhedatas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atadetalhedata'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atadetalhes'), ['controller' => 'Atadetalhes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atadetalhe'), ['controller' => 'Atadetalhes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atadetalhedatas view large-9 medium-8 columns content">
    <h3><?= h($atadetalhedata->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Atadetalhe') ?></th>
            <td><?= $atadetalhedata->has('atadetalhe') ? $this->Html->link($atadetalhedata->atadetalhe->id, ['controller' => 'Atadetalhes', 'action' => 'view', $atadetalhedata->atadetalhe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docanexo') ?></th>
            <td><?= h($atadetalhedata->docanexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atadetalhedata->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprometida') ?></th>
            <td><?= h($atadetalhedata->dataprometida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataexecutada') ?></th>
            <td><?= h($atadetalhedata->dataexecutada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atadetalhedata->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atadetalhedata->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivo') ?></h4>
        <?= $this->Text->autoParagraph(h($atadetalhedata->motivo)); ?>
    </div>
</div>
