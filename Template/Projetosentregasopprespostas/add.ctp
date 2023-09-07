<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasoppresposta $projetosentregasoppresposta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasopprespostas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasopenpoints'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasopenpoint'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasopprespostas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasoppresposta) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasoppresposta') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasopenpoint_id', ['options' => $projetosentregasopenpoints, 'empty' => true]);
            echo $this->Form->control('respondidopor');
            echo $this->Form->control('respondidopara');
            echo $this->Form->control('descricao');
            echo $this->Form->control('resumo');
            echo $this->Form->control('docreferencia');
            echo $this->Form->control('docdata', ['empty' => true]);
            echo $this->Form->control('doccanal');
            echo $this->Form->control('docassunto');
            echo $this->Form->control('planoacao');
            echo $this->Form->control('validado');
            echo $this->Form->control('conclusao');
            echo $this->Form->control('statusprojeto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
