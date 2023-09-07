<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosevento $projetosprodutosriscosevento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
<?= $this->Html->link(__('List Projetosprodutosriscoseventos'), ['action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?>
    </ul>
</nav>
<div class="projetosprodutosriscoseventos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosriscosevento) ?>
            <?php $paramid = $_POST['Eventos']; ?>
            <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Projetosprodutosriscosevento') ?></legend>
        <?php

             echo $this->Form->control('projetosprodutosrisco_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            //echo $this->Form->control('projetosprodutosrisco_id', ['options' => $projetosprodutosriscos, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('resumo');
            echo $this->Form->control('historico');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
