<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motivostipo $motivostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $motivostipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $motivostipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Motivostipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motivostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($motivostipo) ?>
    <fieldset>
        <legend><?= __('Edit Motivostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
