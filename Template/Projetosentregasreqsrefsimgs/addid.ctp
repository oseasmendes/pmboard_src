<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsimg $projetosentregasreqsrefsimg
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



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsimgs form large-9 medium-8 columns content">
    
    <?php echo $this->Form->create($projetosentregasreqsrefsimg,['type' => 'file'],['$paramid' => 'Imagem']) ?>    
            <?php $paramid = $this->request->getParam('$paramid');?>   
            <?php $this->projetosentregasreqsref_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasreqsrefsimg') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id', array('options' => $projetosentregasreqsrefs,'default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
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