<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupagenda $fupagenda
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


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupdeployed'), ['controller' => 'Fupdeployed', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupdeployed'), ['controller' => 'Fupdeployed', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupinprogres'), ['controller' => 'Fupinprogres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupinprogre'), ['controller' => 'Fupinprogres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupnotstarted'), ['controller' => 'Fupnotstarted', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupnotstarted'), ['controller' => 'Fupnotstarted', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupagendas form large-9 medium-8 columns content">
    <?= $this->Form->create($fupagenda) ?>
    <fieldset>
        <legend><?= __('Add Fupagenda') ?></legend>
        <?php
            echo $this->Form->control('fupqueue_id', ['options' => $fupqueues, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('checkpointdata', ['empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
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