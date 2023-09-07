<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrelatorio $sistemasrelatorio
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasrelatorios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasrelatorios form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasrelatorio) ?>
            <?php $paramid = $_POST['Relatorio'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasrelatorio') ?></legend>
        <?php
            //echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber 
            echo $this->Form->control('relatoriobase',['class'=> "form-control"]);
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo $this->Form->control('name',['class'=> "form-control"]);
            echo $this->Form->control('datacriacao', ['empty' => true]);
            echo $this->Form->control('cabnumer',['class'=> "form-control"]);
            echo $this->Form->control('requestnumber',['class'=> "form-control"]);
            echo $this->Form->control('objective',['class'=> "form-control"]);
            echo $this->Form->control('script',['class'=> "form-control"]);
            echo $this->Form->control('version',['class'=> "form-control"]);
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('descontinuado');
            echo $this->Form->control('descontinuadodata', ['empty' => true]);
            echo $this->Form->control('ativo');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
