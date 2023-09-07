<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprocesso $sistemasprocesso
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

<div class="sistemasprocessos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasprocesso) ?>
            <?php $paramid = $_POST['Processo'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Processos') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber 
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);          
            echo $this->Form->control('ativo');
            echo $this->Form->control('descontinuadoem', ['empty' => true]);
            echo $this->Form->control('descontinuadomotivo',['class'=> "form-control"]);
            echo $this->Form->control('motivo',['class'=> "form-control"]);
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
