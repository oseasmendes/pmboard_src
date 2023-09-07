<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosimage $projetosimage
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Roll Actions</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


<div class="sistemaprostepsimg form large-9 medium-8 columns content">              
        <?= $this->Form->create($sistemaprostepsimg,['type' => 'file'],['$paramid' => 'Imagem']) ?>
        <?php $paramid = $this->request->getParam('$paramid');?>                
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <?php           
            
             echo $this->Form->control('image[]',['label' => 'Imagem', 'type' => 'file','multiple'=>'true']);
            

               echo $this->Form->control('sistemaprostep_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
        ?>
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
    </section>