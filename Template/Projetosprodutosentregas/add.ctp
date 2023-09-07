<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Nova Entrega</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="projetosprodutosentregas form large-9 medium-8 columns content">
            <?= $this->Form->create($projetosprodutosentrega) ?>
            <?php $paramid = $_POST['NovaEntrega']; ?>
            <?php $this->projetosproduto_id = $paramid; ?>   
    <fieldset>
        <legend><?= __('Nova Entrega') ?></legend>
        <?php

            echo $this->Form->control('projetosproduto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ambiente_id', ['options' => $ambientes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true,'class'=>['class'=> 'form-control']]);

            echo $this->Form->control('responsavel',['class'=> "form-control"]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('justificativa',['class'=> "form-control"]);
            echo $this->Form->control('sprintoriginal',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('tmpprevisto',['class'=> "form-control"]);
            echo $this->Form->control('unidademedida_id', ['options' => $unidademedidas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataprevista', ['empty' => true]);
            echo $this->Form->control('datarealizada', ['empty' => true]);
              echo '<p>';
            echo $this->Form->control('dataatribuicao', ['empty' => true]);  
            echo $this->Form->control('prevdatainicio', ['empty' => true]);
            echo $this->Form->control('prevdatafim', ['empty' => true]);
            echo '<p>';
            echo $this->Form->control('canal', ['options' => ['JIRA'=>'JIRA','MANUAL'=>'MANUAL','ESUPPORT'=>'ESUPPORT','SERVICENOW'=>'SERVICENOW','EMAIL'=>'EMAIL','TEAMS'=>'TEAMS'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('comentario',['class'=> "form-control"]);
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);

            echo $this->Form->control('predecessora',['class'=> "form-control"]);
            echo $this->Form->control('archivedate',['empty' => true]);
            echo $this->Form->control('archivereason',['empty' => true]);         
            echo $this->Form->control('referenciaid',['class'=> "form-control"]);

            echo '<p>';
        ?>
         <div class="form-check form-check-inline">                  
                    <div class="filho">
                        <?= $this->Form->control('archivestatus',['class'=> "form-control"]); ?>
                    </div>  
            </div>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>



</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
        </div>      
        </div>      
    </section>