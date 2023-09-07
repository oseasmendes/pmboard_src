<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsimg $sistemaprostepsimg
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



<div class="sistemaprostepsimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaprostepsimg) ?>
    <fieldset>
        <legend><?= __('Editar Referencia de Imagem') ?></legend>
        <?php
            echo $this->Form->control('sistemaprostep_id', ['options' => $sistemaprosteps, 'empty' => true]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('imagemoriginal',['class'=> "form-control"]);
            echo $this->Form->control('url',['class'=> "form-control"]);
            echo $this->Form->control('imagemoriginalid',['class'=> "form-control"]);
            echo $this->Form->control('imagempath',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('imagem',['class'=> "form-control"]);
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