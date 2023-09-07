<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasconsultore $sistemasconsultore
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

<div class="sistemasconsultores form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasconsultore) ?>
      <?php $paramid = $_POST['Consultant'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasconsultore') ?></legend>
        <?php
             echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('knowhow_id', ['options' => $knowhows, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('principalfuncao',['class'=> "form-control"]);
            echo $this->Form->control('atividadeexecutada',['class'=> "form-control"]);
            echo $this->Form->control('dataatividade', ['empty' => true]);
            echo $this->Form->control('consultoria',['class'=> "form-control"]);
            echo $this->Form->control('alocacao',['class'=> "form-control"]);
            
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
