<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutover $projetoscutover
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetoscutovers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetoscutoversflws'), ['controller' => 'Projetoscutoversflws', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetoscutoversflw'), ['controller' => 'Projetoscutoversflws', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscutovers form large-9 medium-8 columns content">
    <?= $this->Form->create($projetoscutover) ?>
                <?php $paramid = $_POST['Cutover']; ?>
                <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add CutOver') ?></legend>
        <?php
            echo '<div class="form-row">';
            echo '<div class="col">'; 

            echo $this->Form->control('projeto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //
            
            echo '</div>';              
            echo '<div class="col">';
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '</div>';
            echo '<div class="form-row">'; 
            echo '<div class="col">';
            echo $this->Form->control('etapa_id', ['options' => $etapas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '</div>';
            echo '<div class="form-row">'; 
            echo '<div class="col">';
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo '</div>';
            echo '</div>';
            echo '<div class="form-row">'; 
            echo '<div class="col">';
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo '</div>';
            echo '</div>';
            echo '<div class="form-row">'; 
            echo '<div class="col">';
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo '</div>';
            echo '</div>';
            echo '<div class="form-row">'; 
            echo '<div class="col">';            
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
            echo '</div>';            
            echo '<div class="col">';            
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '</div>';

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
