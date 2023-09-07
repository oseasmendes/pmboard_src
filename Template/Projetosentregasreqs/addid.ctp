<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreq $projetosentregasreq
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Novo Requisito</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="projetosentregasreqs form large-9 medium-8 columns content">
            <?= $this->Form->create($projetosentregasreq) ?>
            <?php $paramid = $_POST['Requisito']; ?>
            <?php $this->projetosprodutosentrega_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Abertura de Requisitos') ?></legend>

        <?php
            //echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('solicitante',['class'=> "form-control"]);
            echo $this->Form->control('wave',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('origem',['class'=> "form-control"]);
            echo $this->Form->control('docversion',['empty' => true,'label'=>'Versão','class'=> "form-control"]);
            echo $this->Form->control('docreference',['empty' => true,'label'=>'Doc. Referencia','class'=> "form-control"]);
            echo $this->Form->control('docchangereference',['empty' => true,'label'=>'Resumo Técnico da Melhoria','class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);            
            echo $this->Form->control('objetivo',['class'=> "form-control"]);
            echo $this->Form->control('regradenegocio',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);                      
            echo $this->Form->control('sample',['class'=> "form-control"]);                        
            echo $this->Form->control('previsaoanalise',['class'=> "form-control"]);
            echo $this->Form->control('previsaosprints',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('developer_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('unidademedida_id', ['options' => $unidademedidas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('frente_id', ['options' => $frentes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('outofscope',['empty' => true,'label'=>'Fora de Escopo']);
            echo $this->Form->control('outofscopedescription',['empty' => true,'label'=>'Fora de Escopo - Detalhes','class'=> "form-control"]);

            echo $this->Form->control('reqstatus',['class'=> "form-control"]);            
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
        </div>      
    </section>