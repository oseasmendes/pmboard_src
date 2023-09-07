<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutossprint $projetosprodutossprint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutossprint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutossprint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sprinttipos'), ['controller' => 'Sprinttipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sprinttipo'), ['controller' => 'Sprinttipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregassprints'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregassprint'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutossprints form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutossprint) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutossprint') ?></legend>
        <?php
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('datainicio', ['empty' => true]);
            echo $this->Form->control('datafim', ['empty' => true]);
            echo $this->Form->control('sprinttipo_id', ['options' => $sprinttipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
