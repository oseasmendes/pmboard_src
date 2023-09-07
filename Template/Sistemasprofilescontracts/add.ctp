<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprofilescontract $sistemasprofilescontract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasprofilescontracts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasprofiles'), ['controller' => 'Sistemasprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasprofile'), ['controller' => 'Sistemasprofiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasprofilescontracts form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasprofilescontract) ?>
    <fieldset>
        <legend><?= __('Add Sistemasprofilescontract') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistemasprofile_id', ['options' => $sistemasprofiles, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
