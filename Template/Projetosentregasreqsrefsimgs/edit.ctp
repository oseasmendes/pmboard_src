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

                        <h3 class="card-title">Editar Evidencia de Requisito</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosentregasreqsrefsimg->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsimg->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsrefsimg) ?>
    <fieldset>
        
        <?php
             echo $this->Form->control('projetosentregasreqsref_id', ['options' => $projetosentregasreqsrefs, 'empty' => true,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);
             echo $this->Form->control('imagestipo_id', ['options' => $imagestipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
             echo $this->Form->control('referencia',['class'=> "form-control"]);
             echo $this->Form->control('descricao',['class'=> "form-control"]);
             echo $this->Form->control('imagempath',array('disabled' => 'disabled','class'=>['class'=> "form-control"]));             
             echo $this->Form->control('imagemoriginal',array('disabled' => 'disabled','class'=>['class'=> "form-control"]));
             echo $this->Form->control('imagemid',array('disabled' => 'disabled','class'=>['class'=> "form-control"]));
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