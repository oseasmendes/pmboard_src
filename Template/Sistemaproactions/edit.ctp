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
    <fieldset>
        <legend><?= __('Edit Sistemaproaction') ?></legend>
        <?php
            echo $this->Form->control('sistemasprocesso_id', ['options' => $sistemasprocessos,'class'=>['class'=> 'form-control'], 'empty' => true]);
            echo $this->Form->control('evento_id', ['options' => $eventos,'class'=>['class'=> 'form-control'], 'empty' => true]);
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
