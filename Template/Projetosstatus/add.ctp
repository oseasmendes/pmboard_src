<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosstatus $projetosstatus
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


<div class="projetosstatus form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosstatus) ?>
            <?php $paramid = $_POST['Prostatus']; ?>
            <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Projetosstatus') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('responsabilidade_id', ['options' => $responsabilidades, 'empty' => true,'class'=>['class'=> 'form-control']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>



</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
