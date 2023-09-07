<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
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
                ['action' => 'delete', $projetosentregasreqsref->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsref->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqs'), ['controller' => 'Projetosentregasreqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreq'), ['controller' => 'Projetosentregasreqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsimg'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsref) ?>
    <fieldset>
        <legend><?= __('Editar Requisito') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreq_id', ['options' => $projetosentregasreqs,'label' => 'Requisito Principal' ,'empty' => true,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);
            echo $this->Form->control('reqreferenceid', ['options' => $reqreferences,'label' => 'Requisito Referência' ,'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('requisitostipo_id', ['options' => $requisitostipos, 'label'=>'Requisito Tipo','empty' => true,'class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('requisito',['class'=> "form-control"]);
            echo $this->Form->control('restricao',['class'=> "form-control"]);
            echo $this->Form->control('descricaorisco',['class'=> "form-control"]);
            echo $this->Form->control('prerequisito',['class'=> "form-control"]);
            echo $this->Form->control('precedente');
            echo $this->Form->control('risco');
            echo $this->Form->control('teste');
            echo $this->Form->control('cancelled');            
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'label'=>'Status','empty' => true,'class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('outofscope',['empty' => true,'label'=>'Fora de Escopo']);
            echo $this->Form->control('outofscopedescription',['empty' => true,'label'=>'Fora de Escopo - Detalhes','class'=> "form-control"]);
            echo $this->Form->control('unplanned',['label'=>'Não Planejado']);
            echo $this->Form->control('representatividade', ['options' => ['NECESSARIO'=>'NECESSARIO','VERIFICAVEL'=>'VERIFICAVEL','ATINGIVEL'=>'ATINGIVEL','CLARO'=>'CLARO'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('agrupamento', ['options' => ['ESSENCIAL'=>'ESSENCIAL','IMPORTANTE'=>'IMPORTANTE','DESEJAVEL'=>'DESEJAVEL'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('pmg', ['options' => ['P'=>'PEQUENO','M'=>'MEDIO','G'=>'GRANDE'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
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