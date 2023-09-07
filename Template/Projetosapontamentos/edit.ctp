<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosapontamento $projetosapontamento
 */
?>

<div class="projetosapontamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosapontamento) ?>
   <?php 
     //   $paramid = $projetosapontamento->projetosprodutosentrega_id; 
    ?>
    <fieldset>
        <legend><?= __('Edit Projetosapontamento') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores,'class'=>['class'=> 'form-control'] ,'empty' => true]);

       //     echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));

            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('horainicio', ['empty' => true]);
            echo $this->Form->control('horafim', ['empty' => true]);
            echo $this->Form->text('horainicio', array('type' => 'time'));
            echo $this->Form->text('horafim', array('type' => 'time'));   
            echo $this->Form->control('temporealizado');           
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('canal', ['options' => ['JIRA'=>'JIRA','MANUAL'=>'MANUAL','ESUPPORT'=>'ESUPPORT','SERVICENOW'=>'SERVICENOW','EMAIL'=>'EMAIL','TEAMS'=>'TEAMS'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals,'class'=>['class'=> 'form-control'], 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
