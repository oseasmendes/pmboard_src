<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedbacktipo $feedbacktipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Feedbacktipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feedbacktipos form large-9 medium-8 columns content">
    <?= $this->Form->create($feedbacktipo) ?>
    <fieldset>
        <legend><?= __('Add Feedbacktipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
