<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresausencia $consultoresausencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consultoresausencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresausencia->id)]
            )
        ?></li>
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
        <legend><?= __('Edit Consultoresausencia') ?></legend>
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

            echo $this->Form->control('knowledgeprojectdata', ['empty' => true]);
            echo $this->Form->control('knowledgeprojectstatus', ['options' => ['APROVED'=>'APROVED','REVIEW'=>'REVIEW','CANCELED'=>'CANCELED','POSTPONED'=>'POSTPONED'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
            echo $this->Form->control('knowledgehrdata', ['empty' => true]);
            echo $this->Form->control('knowledgehrstatus', ['options' => ['APROVED'=>'APROVED','REVIEW'=>'REVIEW','CANCELED'=>'CANCELED','POSTPONED'=>'POSTPONED'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('knowledgecoorddata', ['empty' => true]);
            echo $this->Form->control('knowledgecoordstatus', ['options' => ['APROVED'=>'APROVED','REVIEW'=>'REVIEW','CANCELED'=>'CANCELED','POSTPONED'=>'POSTPONED'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
