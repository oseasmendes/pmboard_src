<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdatesflow $sistemasupdatesflow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasupdatesflows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasupdates'), ['controller' => 'Sistemasupdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasupdate'), ['controller' => 'Sistemasupdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ambientes'), ['controller' => 'Ambientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ambiente'), ['controller' => 'Ambientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasupdatesflows form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasupdatesflow) ?>
    <fieldset>
        <legend><?= __('Add Sistemasupdatesflow') ?></legend>
        <?php
            echo $this->Form->control('sistemasupdate_id', ['options' => $sistemasupdates, 'empty' => true]);            
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true]);
            echo $this->Form->control('ambiente_id', ['options' => $ambientes, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('who');
            echo $this->Form->control('forwho');
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('dataprevistaretorno', ['empty' => true]);
            echo $this->Form->control('dataprevistarelizacao', ['empty' => true]);
            echo $this->Form->control('datarealizadaretorno', ['empty' => true]);
            echo $this->Form->control('datarealizadaoficial', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
