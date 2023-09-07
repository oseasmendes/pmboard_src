<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronus $kronus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Kronus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronus form large-9 medium-8 columns content">
    <?= $this->Form->create($kronus) ?>
    <fieldset>
        <legend><?= __('Add Kronus') ?></legend>
        <?php
            echo $this->Form->control('kronusplan_id', ['options' => $kronusplans, 'empty' => true]);
            echo $this->Form->control('unidade');
            echo $this->Form->control('seq');
            echo $this->Form->control('kickoff');
            echo $this->Form->control('categoria');
            echo $this->Form->control('ordem');
            echo $this->Form->control('atividade');
            echo $this->Form->control('duracao');
            echo $this->Form->control('inicio');
            echo $this->Form->control('fim');
            echo $this->Form->control('predecessora');
            echo $this->Form->control('responsavel');
            echo $this->Form->control('milestone');
            echo $this->Form->control('flag_id', ['options' => $flags, 'empty' => true]);
            echo $this->Form->control('comentarios');
            echo $this->Form->control('fasenome');
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
