<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresferia $consultoresferia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultoresferias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresferias form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoresferia) ?>
    <fieldset>
        <legend><?= __('Add Consultoresferia') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('resumo');
            echo $this->Form->control('datainicio', ['empty' => true]);
            echo $this->Form->control('datafim', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('observacao');
            echo $this->Form->control('periodo');
            echo $this->Form->control('informadoem', ['empty' => true]);
            echo $this->Form->control('planejamentode', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
