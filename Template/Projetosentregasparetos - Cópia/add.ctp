<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaspareto $projetosentregaspareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasparetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregaspareto) ?>
      <?php $paramid = $_POST['keyword'];
            //var_dump($tktid); ?>
            <?= $this->projetosprodutosentrega_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Projetosentregaspareto') ?></legend>
        <?php

           // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));   
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
