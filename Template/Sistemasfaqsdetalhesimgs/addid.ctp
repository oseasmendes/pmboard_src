<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhesimg $sistemasfaqsdetalhesimg
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Add Img</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>




<div class="sistemasfaqsdetalhesimgs form large-9 medium-8 columns content">
    
    <?php echo $this->Form->create($sistemasfaqsdetalhesimg,['type' => 'file'],['$paramid' => 'Imagem']) ?>    
            <?php $paramid = $this->request->getParam('$paramid');?>   
            <?php $this->sistemasfaqsdetalhe_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Inserir Imagem') ?></legend>
        <?php
            echo $this->Form->control('sistemasfaqsdetalhe_id', array('options' => $sistemasfaqsdetalhes,'default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('image[]',['label' => 'Imagem', 'type' => 'file','multiple'=>'true']);
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