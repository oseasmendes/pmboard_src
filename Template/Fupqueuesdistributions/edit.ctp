<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueuesdistribution $fupqueuesdistribution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fupqueuesdistribution->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueuesdistribution->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fupqueuesdistributions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupqueuesdistributions form large-9 medium-8 columns content">
    <?= $this->Form->create($fupqueuesdistribution) ?>
    <fieldset>
        <legend><?= __('Edit Fupqueuesdistribution') ?></legend>
        <?php
            echo $this->Form->control('fupqueue_id', ['options' => $fupqueues, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
