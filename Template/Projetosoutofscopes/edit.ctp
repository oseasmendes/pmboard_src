<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosoutofscope $projetosoutofscope
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosoutofscope->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosoutofscope->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosoutofscopes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosoutofscopes form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosoutofscope) ?>
    <fieldset>
        <legend><?= __('Edit Projetosoutofscope') ?></legend>
        <?php
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('ativo');
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('responsavel');
            echo $this->Form->control('statusfunctional_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
