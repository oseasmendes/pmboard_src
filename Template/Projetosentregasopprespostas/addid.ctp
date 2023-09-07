<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasoppresposta $projetosentregasoppresposta
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




<div class="projetosentregasopprespostas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasoppresposta) ?>
            <?php $paramid = $_POST['OppResposta']; ?>
            <?php $this->projetosentregasopenpoint_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Registrar Resposta OPP') ?></legend>
        <?php            
            echo $this->Form->control('projetosentregasopenpoint_id', array('default'=>$paramid,'label'=>'Open Point','disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo $this->Form->control('respondidopor',['label'=>'Respondido Por','class'=> "form-control"]);
            echo $this->Form->control('respondidopara',['label'=>'Respondido Para','class'=> "form-control"]);
            echo $this->Form->control('descricao',['label'=>'Descrição','class'=> "form-control"]);
            echo $this->Form->control('resumo',['label'=>'Resumo','class'=> "form-control"]);
            echo $this->Form->control('docreferencia',['label'=>'Referência','class'=> "form-control"]);
            echo $this->Form->control('docdata', ['label'=>'Data Doc','empty' => true]);
            echo $this->Form->control('doccanal',['label'=>'Canal','class'=> "form-control"]);
            echo $this->Form->control('docassunto',['label'=>'Assunto','class'=> "form-control"]);
            echo $this->Form->control('planoacao',['label'=>'Plano de Ação']);
            echo $this->Form->control('validado',['label'=>'Validado']);
            echo $this->Form->control('conclusao',['label'=>'Conclusão','class'=> "form-control"]);            
            echo $this->Form->control('statusprojeto', ['options' => ['AGUARDANDO_CONFIRMACAO'=>'AGUARDANDO_CONFIRMACAO','RESPOSTA_ACEITA'=>'RESPOSTA_ACEITA','RESPOSTA_INSUFICIENTE'=>'RESPOSTA_INSUFICIENTE','NAO_SE_APLICA'=>'NAO_SE_APLICA','DESCONSIDERAR'=>'DESCONSIDERAR','ESCALADO'=>'ESCALADO','REDIRECIONADO'=>'REDIRECIONADO'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
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