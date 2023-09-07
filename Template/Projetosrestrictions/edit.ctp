<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosrestriction $projetosrestriction
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
                ['action' => 'delete', $projetosrestriction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestriction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosrestrictions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosrestrictionsfls'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosrestrictionsfl'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosrestrictions form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosrestriction) ?>
    <fieldset>
        <legend><?= __('Edit Projetosrestriction') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
            echo $this->Form->control('resolvidoem', ['empty' => true]);
            echo $this->Form->control('planoacao');
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
    </section>