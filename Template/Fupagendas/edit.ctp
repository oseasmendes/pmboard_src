<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupagenda $fupagenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fupagenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fupagenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupdeployed'), ['controller' => 'Fupdeployed', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupdeployed'), ['controller' => 'Fupdeployed', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupinprogres'), ['controller' => 'Fupinprogres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupinprogre'), ['controller' => 'Fupinprogres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupnotstarted'), ['controller' => 'Fupnotstarted', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupnotstarted'), ['controller' => 'Fupnotstarted', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupagendas form large-9 medium-8 columns content">
    <?= $this->Form->create($fupagenda) ?>
    <fieldset>
        <legend><?= __('Edit Fupagenda') ?></legend>
        <?php
            echo $this->Form->control('fupqueue_id', ['options' => $fupqueues, 'empty' => true]);
            echo $this->Form->control('checkpointdata', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
