<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atarevisaohistorico $atarevisaohistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atarevisaohistorico'), ['action' => 'edit', $atarevisaohistorico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atarevisaohistorico'), ['action' => 'delete', $atarevisaohistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atarevisaohistorico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atarevisaohistoricos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atarevisaohistorico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atadetalhes'), ['controller' => 'Atadetalhes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atadetalhe'), ['controller' => 'Atadetalhes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atarevisaohistoricos view large-9 medium-8 columns content">
    <h3><?= h($atarevisaohistorico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $atarevisaohistorico->has('ata') ? $this->Html->link($atarevisaohistorico->ata->id, ['controller' => 'Atas', 'action' => 'view', $atarevisaohistorico->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atadetalhe') ?></th>
            <td><?= $atarevisaohistorico->has('atadetalhe') ? $this->Html->link($atarevisaohistorico->atadetalhe->id, ['controller' => 'Atadetalhes', 'action' => 'view', $atarevisaohistorico->atadetalhe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correcao Solicitado Por') ?></th>
            <td><?= h($atarevisaohistorico->correcao_solicitado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atarevisaohistorico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datarevisao') ?></th>
            <td><?= h($atarevisaohistorico->datarevisao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atarevisaohistorico->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atarevisaohistorico->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aprovado') ?></th>
            <td><?= $atarevisaohistorico->aprovado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Proposta Alteracao') ?></h4>
        <?= $this->Text->autoParagraph(h($atarevisaohistorico->proposta_alteracao)); ?>
    </div>
</div>
