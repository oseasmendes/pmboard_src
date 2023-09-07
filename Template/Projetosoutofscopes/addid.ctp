<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosoutofscope $projetosoutofscope
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosoutofscopes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosoutofscopes form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosoutofscope) ?>
            <?php $paramid = $_POST['Outscope']; ?>
            <?php $this->projetosproduto_id = $paramid; ?>   
    <fieldset>
        <legend><?= __('Add Projetosoutofscope') ?></legend>
        <?php
            //echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('projetosproduto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
            echo $this->Form->control('statusfuntional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
        ?>
       </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
