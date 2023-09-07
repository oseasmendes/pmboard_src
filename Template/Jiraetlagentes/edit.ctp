<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlagente $jiraetlagente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jiraetlagente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlagente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jiraetlagentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlagentes form large-9 medium-8 columns content">
    <?= $this->Form->create($jiraetlagente) ?>
    <fieldset>
        <legend><?= __('Edit Jiraetlagente') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
