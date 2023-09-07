<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueue $fupqueue
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<div class="fupqueues form large-9 medium-8 columns content">
    <?= $this->Form->create($fupqueue) ?>
    <fieldset>
        <legend><?= __('Edit Fupqueue') ?></legend>
        <?php
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('observacao',['class'=> "form-control"]);
            echo $this->Form->control('tickets');
            echo $this->Form->control('improvements');
            echo $this->Form->control('projects');
            echo $this->Form->control('fup');
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
        </div>      
    </section>