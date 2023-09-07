<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pooling $pooling
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pooling->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pooling->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Poolings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Poolingsmembers'), ['controller' => 'Poolingsmembers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poolingsmember'), ['controller' => 'Poolingsmembers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="poolings form large-9 medium-8 columns content">
    <?= $this->Form->create($pooling) ?>
    <fieldset>
        <legend><?= __('Edit Pooling') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
