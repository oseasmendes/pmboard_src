<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosfeedback $projetosprodutosfeedback
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Feedbacktipos'), ['controller' => 'Feedbacktipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feedbacktipo'), ['controller' => 'Feedbacktipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosfeedbacks form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosfeedback) ?>
    <fieldset>
        <legend><?= __('Add Projetosprodutosfeedback') ?></legend>
        <?php
            echo $this->Form->control('feedbacktipo_id', ['options' => $feedbacktipos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
