<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlentregastipo $jiraetlentregastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jiraetlentregastipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlentregastipos form large-9 medium-8 columns content">
    <?= $this->Form->create($jiraetlentregastipo) ?>
    <fieldset>
        <legend><?= __('Add Jiraetlentregastipo') ?></legend>
        <?php
            echo $this->Form->control('Descricao');
            echo $this->Form->control('JiraIssueType');
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
