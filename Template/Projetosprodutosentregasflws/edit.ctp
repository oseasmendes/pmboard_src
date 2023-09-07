<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasflw $projetosprodutosentregasflw
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

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosentregasflw->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasflw->id)]
            )
        ?></li>        
    </ul>
</nav>
<div class="projetosprodutosentregasflws form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentregasflw) ?>
    <fieldset>
        <legend><?= __('Editar FollowUp') ?></legend>
        <?php
            
			echo $this->Form->control('data', ['empty' => true]);		
            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$projetosprodutosentregasflw->projetosprodutosentrega_id,'disabled' => 'disabled','value'=>$projetosprodutosentregasflw->projetosprodutosentrega_id,'class'=>['class'=> 'form-control'])); 			
			echo $this->Form->control('descricao',['class'=> "form-control"]);
			echo $this->Form->control('who',['class'=> "form-control"]);      
            echo $this->Form->control('forwho',['class'=> "form-control"]);
            echo $this->Form->control('actwho',['class'=> "form-control"]);      
            echo $this->Form->control('historico',['class'=> "form-control"]);
			echo $this->Form->control('forum',['class'=> "form-control"]);
			echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('kronusitem_id', ['options' => $kronusitems, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('iniciaatividade',['label'=>'Inicia Atividade']);
            echo $this->Form->control('encerraatividade',['label'=>'Encerra Atividade']);
            echo $this->Form->control('encerraevidencia',['class'=> "form-control"]);
            echo $this->Form->control('encerradopor',['class'=> "form-control"]);
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