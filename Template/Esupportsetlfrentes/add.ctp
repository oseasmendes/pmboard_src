<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlfrente $esupportsetlfrente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Esupportsetlfrentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Frentes'), ['controller' => 'Frentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Frente'), ['controller' => 'Frentes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlfrentes form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetlfrente) ?>
    <fieldset>
        <legend><?= __('Add Esupportsetlfrente') ?></legend>
        <?php
            echo $this->Form->control('canal');
            echo $this->Form->control('descricao');
            echo $this->Form->control('referencia');
            echo $this->Form->control('frente_id', ['options' => $frentes, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
