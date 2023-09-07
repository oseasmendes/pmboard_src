<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasnota $projetosentregasnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasnotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasnota) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasnota') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('notatipo_id', ['options' => $notatipos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
