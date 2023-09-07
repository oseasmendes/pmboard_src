<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaproaction $sistemaproaction
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

<div class="sistemaproactions form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaproaction) ?>
            <?php $paramid = $_POST['Sistemaprocesso'];
            //var_dump($tktid); ?>
            <?= $this->sistemasprocesso_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemaproaction') ?></legend>
        <?php
            echo $this->Form->control('sistemasprocesso_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));    
            //echo $this->Form->control('sistemasprocesso_id', ['options' => $sistemasprocessos, 'empty' => true]);
            echo $this->Form->control('evento_id', ['options' => $eventos, 'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
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
