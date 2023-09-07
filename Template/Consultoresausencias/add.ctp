<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresausencia $consultoresausencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultoresausencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresausenciastipos'), ['controller' => 'Consultoresausenciastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresausenciastipo'), ['controller' => 'Consultoresausenciastipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresausencias form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoresausencia) ?>
    <fieldset>
        <legend><?= __('Plano de Ausências') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('resumo',['class'=> "form-control"]);
            echo $this->Form->control('comentario',['class'=> "form-control"]);
            echo $this->Form->control('datainicio', ['empty' => true]);
            echo $this->Form->control('datafim', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('consultoresausenciastipo_id', ['options' => $consultoresausenciastipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('observacao',['class'=> "form-control"]);
            echo $this->Form->control('periodo',['class'=> "form-control"]);
            echo $this->Form->control('informadoem', ['empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('planejamentode', ['empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ativo');

            echo $this->Form->control('knowledgeprojectdata', ['label' =>'Data Resposta Projeto','empty' => true]);
            echo $this->Form->control('knowledgeprojectstatus', ['options' => ['APROVED'=>'APROVED','REVIEW'=>'REVIEW','CANCELED'=>'CANCELED'],'class'=>['class'=> 'form-control'] , 'label' =>'Status Resposta Projeto','empty' => true]);            
            echo $this->Form->control('knowledgehrdata', ['label' =>'Data Resposta RH','empty' => true]);
            echo $this->Form->control('knowledgehrstatus', ['options' => ['APROVED'=>'APROVED','REVIEW'=>'REVIEW','CANCELED'=>'CANCELED'],'class'=>['class'=> 'form-control'] , 'label' =>'Status Resposta RH','empty' => true]);
            echo $this->Form->control('knowledgecoorddata', ['label' =>'Data Resposta Coord','empty' => true]);
            echo $this->Form->control('knowledgecoordstatus', ['options' => ['APROVED'=>'APROVED','REVIEW'=>'REVIEW','CANCELED'=>'CANCELED'],'class'=>['class'=> 'form-control'] , 'label' =>'Status Resposta Coord','empty' => true]);            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
