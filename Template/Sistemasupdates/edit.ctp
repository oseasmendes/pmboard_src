<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdate $sistemasupdate
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
</div>




<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasupdate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasupdate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasupdates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasupdates form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasupdate) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasupdate') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true,'disabled' => 'disabled']);
            echo '<br>';
            echo $this->Form->control('sistemasmodulo_id', ['options' => $sistemasmodulos, 'empty' => true, 'label'=>'Modulos','class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataupdate', ['empty' => true,'label'=>'Data Liberação do Update: ']);
            echo $this->Form->control('descricao',['label'=>'Descrição', 'class'=> "form-control"]);
            echo $this->Form->control('descricaotecnica',['label'=>'Descrição Técnica','class'=> "form-control"]);
            echo $this->Form->control('executavel',['label'=>'Nome do Executável','class'=> "form-control"]);
            echo $this->Form->control('liberadoparaaplicacao',['label'=>'Deployed']);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true, 'label'=>'Status','class'=>['class'=> 'form-control']]);
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
