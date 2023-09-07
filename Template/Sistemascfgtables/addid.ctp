<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtable $sistemascfgtable
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Adicionar Tabelas de Referencia</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgtables'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgtables form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgtable) ?>
            <?php $paramid = $_POST['TabelaRef'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Inserir Tabelas de Referência') ?></legend>
        <?php
            //echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('tabelanome',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhe',['class'=> "form-control"]);
            echo $this->Form->control('versao',['class'=> "form-control"]);
            echo $this->Form->control('ativo',['class'=> "form-control"]);
            echo $this->Form->control('sistemasmodulo_id', ['options' => $sistemasmodulos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('chaveprimaria',['class'=> "form-control"]);
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