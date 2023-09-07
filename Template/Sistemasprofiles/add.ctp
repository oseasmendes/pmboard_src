<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprofile $sistemasprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasprofiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasprofilescontracts'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasprofilescontract'), ['controller' => 'Sistemasprofilescontracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasprofile) ?>
    <fieldset>
        <legend><?= __('Add Sistemasprofile') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('responsabilidade_id', ['options' => $responsabilidades, 'empty' => true]);
            echo $this->Form->control('objetivos');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
