<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostep $sistemaprostep
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

<div class="sistemaprosteps form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaprostep) ?>
    <?php $paramid = $_POST['Sistemaproaction'];
            //var_dump($tktid); ?>
            <?= $this->sistemasprocesso_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemaprostep') ?></legend>
        <?php
            //echo $this->Form->control('sistemaproaction_id', ['options' => $sistemaproactions, 'empty' => true]);
            echo $this->Form->control('sistemaproaction_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));    
            echo $this->Form->control('stepaction',['class'=> "form-control"]);
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo $this->Form->control('historic',['class'=> "form-control"]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
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
