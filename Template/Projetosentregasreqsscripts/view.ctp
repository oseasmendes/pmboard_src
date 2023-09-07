<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsscript $projetosentregasreqsscript
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasreqsscript'), ['action' => 'edit', $projetosentregasreqsscript->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasreqsscript'), ['action' => 'delete', $projetosentregasreqsscript->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsscript->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsscripts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsscript'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasreqsscripts view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasreqsscript->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosentregasreqsscript->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasreqsscript->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsscript->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosentregasreqsref Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsscript->projetosentregasreqsref_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasreqsscript->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasreqsscript->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Scriptsemantic') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasreqsscript->scriptsemantic)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasreqsscript->observacao)); ?>
    </div>
</div>
