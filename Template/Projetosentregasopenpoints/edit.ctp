<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasopenpoint $projetosentregasopenpoint
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosentregasopenpoint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasopenpoint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasopenpoints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasopenpoints form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasopenpoint) ?>
    <fieldset>
        <legend><?= __('Edit Projetosentregasopenpoint') ?></legend>
        <?php            
            echo $this->Form->control('projetosentregasreqsref_id', array('options' => $projetosentregasreqsrefs,'disabled' => 'disabled','class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('planoacao');
            echo $this->Form->control('planodeacaodescricao',['class'=> "form-control"]);
            echo $this->Form->control('resolvido');
            echo $this->Form->control('resolvidoem', ['empty' => true]);
            echo $this->Form->control('dataprevistaatendimento', ['empty' => true]);
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
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