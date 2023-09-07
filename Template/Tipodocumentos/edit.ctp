<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipodocumento $tipodocumento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipodocumento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipodocumento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipodocumentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipodocumentos form large-9 medium-8 columns content">
    <?= $this->Form->create($tipodocumento) ?>
    <fieldset>
        <legend><?= __('Edit Tipodocumento') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
