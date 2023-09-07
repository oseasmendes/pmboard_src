<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlversion $jiraetlversion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jiraetlversion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlversion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jiraetlversions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlversions form large-9 medium-8 columns content">
    <?= $this->Form->create($jiraetlversion) ?>
    <fieldset>
        <legend><?= __('Edit Jiraetlversion') ?></legend>
        <?php
            echo $this->Form->control('versao');
            echo $this->Form->control('projetossprint_id', ['options' => $projetossprints, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
