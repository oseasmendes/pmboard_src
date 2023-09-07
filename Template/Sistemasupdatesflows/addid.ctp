<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdatesflow $sistemasupdatesflow
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



<div class="sistemasupdatesflows form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasupdatesflow) ?>
            <?php $paramid = $_POST['follow'];?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasupdatesflow') ?></legend>
        <?php
            //echo $this->Form->control('sistemasupdate_id', ['options' => $sistemasupdates, 'empty' => true]);
            echo $this->Form->control('sistemasupdate_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber 
            echo '<br>';
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ambiente_id', ['options' => $ambientes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('who',['class'=> "form-control"]);           
            echo $this->Form->control('forwho',['class'=> "form-control"]);           
            echo $this->Form->control('descricao',['class'=> "form-control"]);           
            echo $this->Form->control('historico',['class'=> "form-control"]);     
            echo $this->Form->control('referencia',['class'=> "form-control"]);                 
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('dataprevistaretorno', ['empty' => true]);
            echo $this->Form->control('dataprevistarelizacao', ['empty' => true]);
            echo $this->Form->control('datarealizadaretorno', ['empty' => true]);
            echo $this->Form->control('datarealizadaoficial', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
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
