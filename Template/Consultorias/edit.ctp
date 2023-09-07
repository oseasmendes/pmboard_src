<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoria $consultoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consultoria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consultoria->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Consultorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultorias form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoria) ?>
    <fieldset>
        <legend><?= __('Edit Consultoria') ?></legend>
        <?php
            echo $this->Form->control('razaosocial');
            echo $this->Form->control('site');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
