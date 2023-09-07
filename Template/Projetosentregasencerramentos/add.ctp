<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasencerramento $projetosentregasencerramento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasencerramentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['controller' => 'Solucoesaplicadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solucoesaplicada'), ['controller' => 'Solucoesaplicadas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqs'), ['controller' => 'Sistemasfaqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaq'), ['controller' => 'Sistemasfaqs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasencerramentos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasencerramento) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasencerramento') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('solucoesaplicada_id', ['options' => $solucoesaplicadas, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('sistemasfaq_id', ['options' => $sistemasfaqs, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
