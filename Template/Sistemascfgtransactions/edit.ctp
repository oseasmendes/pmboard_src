<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtransaction $sistemascfgtransaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemascfgtransaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgtransaction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgtransactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgtransactions form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgtransaction) ?>
    <fieldset>
        <legend><?= __('Edit Sistemascfgtransaction') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('nometransacao');
            echo $this->Form->control('descricao');
            echo $this->Form->control('descricaotecnica');
            echo $this->Form->control('urlreferencia');
            echo $this->Form->control('modulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
