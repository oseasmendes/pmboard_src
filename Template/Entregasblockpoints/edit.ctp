<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpoint $entregasblockpoint
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

<div class="entregasblockpoints form large-9 medium-8 columns content">
    <?= $this->Form->create($entregasblockpoint) ?>
    <fieldset>
        <legend><?= __('Editar o Impedimento') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas,'disabled' => 'disabled', 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);            
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
            echo $this->Form->control('resolvidoem', ['empty' => true]);
            echo $this->Form->control('planoacao',['class'=> "form-control"]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('risco');
            echo $this->Form->control('flag');
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
