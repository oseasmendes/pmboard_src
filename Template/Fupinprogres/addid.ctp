<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupinprogre $fupinprogre
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fupinprogres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupinprogres form large-9 medium-8 columns content">
            <?= $this->Form->create($fupinprogre) ?>
            <?php $paramid = $_POST['Fupinprogress']; ?>
            <?php $this->fupagenda_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Fupinprogre') ?></legend>
        <?php
            echo $this->Form->control('fupagenda_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            //echo $this->Form->control('fupagenda_id', ['options' => $fupagendas, 'empty' => true]);
            echo $this->Form->control('departamento',['class'=> "form-control"]);
            echo $this->Form->control('kanban',['class'=> "form-control"]);
            echo $this->Form->control('esupportid',['class'=> "form-control"]);
            echo $this->Form->control('titulo',['class'=> "form-control"]);
            echo $this->Form->control('prio',['class'=> "form-control"]);
            echo $this->Form->control('requisitante',['class'=> "form-control"]);
            echo $this->Form->control('statusdetalhado',['class'=> "form-control"]);
            echo $this->Form->control('analista',['class'=> "form-control"]);
            echo $this->Form->control('comentario',['class'=> "form-control"]);
            echo $this->Form->control('lastupdate', ['empty' => true]);
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
        </div>      
    </section>
