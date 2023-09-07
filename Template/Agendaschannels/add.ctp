<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendaschannel $agendaschannel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agendaschannels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendasnotes'), ['controller' => 'Agendasnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendasnote'), ['controller' => 'Agendasnotes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendaschannels form large-9 medium-8 columns content">
    <?= $this->Form->create($agendaschannel) ?>
    <fieldset>
        <legend><?= __('Add Agendaschannel') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
