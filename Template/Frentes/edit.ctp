<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Frente $frente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $frente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $frente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Frentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="frentes form large-9 medium-8 columns content">
    <?= $this->Form->create($frente) ?>
    <fieldset>
        <legend><?= __('Edit Frente') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('primaryslaunitmeasury');
            echo $this->Form->control('primaryslaexpected');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
