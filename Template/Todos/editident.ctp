<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo $todo
 */
?>
 <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">TO DO List</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $todo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Todos'), ['action' => 'index']) ?></li>
        
        <li><?= $this->Html->link(__('List Naturezas'), ['controller' => 'Naturezas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Natureza'), ['controller' => 'Naturezas', 'action' => 'add']) ?></li>       
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Todoseventos'), ['controller' => 'Todoseventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Todosevento'), ['controller' => 'Todoseventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Todosobservadores'), ['controller' => 'Todosobservadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Todosobservadore'), ['controller' => 'Todosobservadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
   <div class="row" > 
<div class="todos form large-9 medium-8 columns content">
    <?= $this->Form->create($todo) ?>
    <fieldset>
        <legend><?= __('Edit Todo') ?></legend>
        <?php
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('requisitante',['class'=> "form-control"]);
            echo $this->Form->control('assunto',['class'=> "form-control"]);
            echo $this->Form->control('resumotecnico',['class'=> "form-control"]);
            echo $this->Form->control('nrorequisicao',['class'=> "form-control"]);
            echo $this->Form->control('dataprevistaentrega', ['empty' => true]);
            echo $this->Form->control('dataapresentacao', ['empty' => true]);
            echo $this->Form->control('patrocinador',['class'=> "form-control"]);
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('observacao',['class'=> "form-control"]);
            echo $this->Form->control('natureza_id', ['options' => $naturezas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('atribuidopara',['class'=> "form-control"]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataexecucao', ['empty' => true]);
            echo $this->Form->control('dataentrega', ['empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('datareconhecimento', ['empty' => true]);
            echo $this->Form->control('requisitante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
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