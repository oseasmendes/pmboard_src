<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresnota $consultoresnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultoresnotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoresnota) ?>
            <?php $paramid = $_POST['Nota']; ?>
            <?php $this->consultore_id = $paramid; ?>
    
    <fieldset>
        <legend><?= __('Inserir Anotação de Consultor') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));

            //echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo '</p>';
            echo $this->Form->control('ocorrencia_id', ['options' => $ocorrencias, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ocorrenciaresumo',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
