<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasqueuesconsultore $sistemasqueuesconsultore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasqueuesconsultores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasqueues'), ['controller' => 'Sistemasqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasqueue'), ['controller' => 'Sistemasqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasqueuesconsultores form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasqueuesconsultore) ?>
    <fieldset>
        <legend><?= __('Add Sistemasqueuesconsultore') ?></legend>
        <?php
            echo $this->Form->control('desricao');
            echo $this->Form->control('sistemasqueue_id', ['options' => $sistemasqueues, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
