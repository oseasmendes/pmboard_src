<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agendasnote $agendasnote
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agendasnotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendaschannels'), ['controller' => 'Agendaschannels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaschannel'), ['controller' => 'Agendaschannels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendasnotes form large-9 medium-8 columns content">
    <?= $this->Form->create($agendasnote) ?>
    <fieldset>
        <legend><?= __('Add Agendasnote') ?></legend>
        <?php
            echo $this->Form->control('agendaschannel_id', ['options' => $agendaschannels, 'empty' => true]);
            echo $this->Form->control('agenda_id', ['options' => $agendas, 'empty' => true]);
            echo $this->Form->control('timeinformed');
            echo $this->Form->control('description');
            echo $this->Form->control('comments');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('keywords');
            echo $this->Form->control('actionplan');
            echo $this->Form->control('selection');
            echo $this->Form->control('beshared');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
