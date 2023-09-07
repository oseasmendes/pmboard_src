<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgrelacionado $sistemascfgrelacionado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgrelacionados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgrelacionados form large-9 medium-8 columns content">
 <?= $this->Form->create($sistemascfgrelacionado) ?>
	 <?php $paramid = $_POST['SystemRel'];
            //var_dump($tktid); ?>
    <?php $this->sistema_id = $paramid; ?>
   
    <fieldset>
        <legend><?= __('Sistemas Relacionados') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); 
            echo $this->Form->control('descricao', ['label' => 'Descrição','empty' => true,'class'=>['class'=> 'form-control']]);
            //echo $this->Form->control('sistema_id');


            echo $this->Form->control('sistemarelacionado_id', ['options' => $sistemas,'class'=>['class'=> 'form-control'] ,'label' => ['text'=>'Sistema Relacionado'],'empty' => true]);

             echo $this->Form->control('ambiente_id', ['options' => $ambientes,'class'=>['class'=> 'form-control'] ,'empty' => true]);    

            echo $this->Form->control('branch', ['empty' => true,'class'=>['class'=> 'form-control']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
