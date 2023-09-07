<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsfile $sistemaprostepsfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemaprostepsfiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaprostepsfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaprostepsfile) ?>
    <fieldset>
        <legend><?= __('Add Sistemaprostepsfile') ?></legend>
        <?php
            echo $this->Form->control('sistemaprostep_id', ['options' => $sistemaprosteps, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('nomearquivo');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('extensao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
