<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosreco $projetosprodutosriscosreco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscosrecos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosriscosrecos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosriscosreco) ?>
    <fieldset>
        <legend><?= __('Add Projetosprodutosriscosreco') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosrisco_id', ['options' => $projetosprodutosriscos, 'empty' => true]);
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
