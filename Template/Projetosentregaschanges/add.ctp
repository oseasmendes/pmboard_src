<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaschange $projetosentregaschange
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregaschanges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregaschanges form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregaschange) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregaschange') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id');
            echo $this->Form->control('descricao');
            echo $this->Form->control('motivacao');
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('requisitante');
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
