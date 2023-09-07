<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sprinttipo $sprinttipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sprinttipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sprinttipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sprinttipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['controller' => 'Projetosprodutossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['controller' => 'Projetosprodutossprints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sprinttipos form large-9 medium-8 columns content">
    <?= $this->Form->create($sprinttipo) ?>
    <fieldset>
        <legend><?= __('Edit Sprinttipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
