<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlpareto $jiraetlpareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jiraetlpareto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlpareto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jiraetlparetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($jiraetlpareto) ?>
    <fieldset>
        <legend><?= __('Edit Jiraetlpareto') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('jirastatus');
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
