<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scriptstipo $scriptstipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $scriptstipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $scriptstipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Scriptstipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgscripts'), ['controller' => 'Sistemascfgscripts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgscript'), ['controller' => 'Sistemascfgscripts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scriptstipos form large-9 medium-8 columns content">
    <?= $this->Form->create($scriptstipo) ?>
    <fieldset>
        <legend><?= __('Edit Scriptstipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
