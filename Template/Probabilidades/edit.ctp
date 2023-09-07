<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Probabilidade $probabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $probabilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $probabilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Probabilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="probabilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($probabilidade) ?>
    <fieldset>
        <legend><?= __('Edit Probabilidade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
