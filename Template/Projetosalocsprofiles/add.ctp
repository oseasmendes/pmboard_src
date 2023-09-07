<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsprofile $projetosalocsprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocsprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosalocsprofile) ?>
            <?php $paramid = $_POST['Profile']; ?>
            <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Inserir Perfil de Consultor no Projeto') ?></legend>
        <?php
            echo $this->Form->control('projetosaloc_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id            

            echo $this->Form->control('percentual',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);           
            echo $this->Form->control('competencia_id', ['options' => $competencias, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('propostasaloc_id', ['options' => $propostasalocs, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('horasdia',['class'=> "form-control"]);
            echo '<p>';
             echo $this->Form->control('dataalocacao', ['empty' => true]);
             echo $this->Form->control('consideracalculocapacidade',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
