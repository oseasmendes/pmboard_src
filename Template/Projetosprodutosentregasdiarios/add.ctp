<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasdiario $projetosprodutosentregasdiario
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

<div class="projetosprodutosentregasdiarios form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentregasdiario) ?>
            <?php $paramid = $_POST['Daily']; ?>
            <?php $this->projetosproduto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Stand-Up') ?></legend>
        <?php
            echo $this->Form->control('data', ['empty' => true]);

            //echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true,'class'=>['class'=> 'form-control']]);

            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));

            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('resumo',['class'=> "form-control"]);
            echo $this->Form->control('feitoontem',['class'=> "form-control"]);
            echo $this->Form->control('feitohoje',['class'=> "form-control"]);
            echo $this->Form->control('impedimento',['class'=> "form-control"]);
            echo $this->Form->control('fivewthreeh_id', ['options' => $fivewthreehs, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '<p>';
            
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
        </div>      
    </section>
