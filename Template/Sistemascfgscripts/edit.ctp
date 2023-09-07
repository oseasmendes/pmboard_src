<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgscript $sistemascfgscript
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


<div class="sistemascfgscripts form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgscript) ?>
    <fieldset>
        <legend><?= __('Edit Script') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            //echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));             
            echo $this->Form->control('documento_id', ['options' => $documentos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('scriptstipo_id', ['options' => $scriptstipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('codenome', ['label' => 'Codenome','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao', ['label' => 'Descrição','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('scriptaplicado', ['label' => 'Script','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('versaonumero', ['label' => 'Versão','empty' => true,'class'=>['class'=> 'form-control']]);  
            
            echo $this->Form->control('instrucaotecnica', ['label' => 'Instruções Técnicas','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('advertencias', ['label' => 'Advertencias','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('palavraschave', ['label' => 'Palavras Chaves','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('autor', ['label' => 'Autor','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataroteiro', ['empty' => true]);
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

