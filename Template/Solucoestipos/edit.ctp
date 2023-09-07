<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solucoestipo $solucoestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solucoestipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solucoestipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Solucoestipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['controller' => 'Solucoesaplicadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solucoesaplicada'), ['controller' => 'Solucoesaplicadas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solucoestipos form large-9 medium-8 columns content">
    <?= $this->Form->create($solucoestipo) ?>
    <fieldset>
        <legend><?= __('Edit Solucoestipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
