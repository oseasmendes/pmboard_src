<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsdaily $projetossprintsdaily
 */
?>

<div class="projetossprintsdailys form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsdaily) ?>            
            <?php $paramid = $_POST['daily']; ?>
            <?php $this->projetossprint_id = $paramid; ?>        
    <fieldset>
        <legend><?= __('Add Projetossprintsdaily') ?></legend>
        <?php
            //echo $this->Form->control('projetossprint_id', ['options' => $projetossprints, 'empty' => true]);
            echo $this->Form->control('projetossprint_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));            
            echo $this->Form->control('consultore_id', ['options' => $consultores,'class'=>['class'=> 'form-control'],'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('comentario',['class'=> "form-control"]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas,'class'=>['class'=> 'form-control'], 'empty' => true]);
            echo $this->Form->control('agenda_id', ['options' => $agendas,'class'=>['class'=> 'form-control'] ,'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
