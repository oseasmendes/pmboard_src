<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupinprogre $fupinprogre
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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fupinprogre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fupinprogre->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fupinprogres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupinprogres form large-9 medium-8 columns content">
    <?= $this->Form->create($fupinprogre) ?>
    <fieldset>
        <legend><?= __('Edit Fupinprogre') ?></legend>
        <?php
            echo $this->Form->control('fupagenda_id', ['options' => $fupagendas, 'empty' => true]);
            echo $this->Form->control('departamento');
            echo $this->Form->control('kanban');
            echo $this->Form->control('esupportid');
            echo $this->Form->control('titulo');
            echo $this->Form->control('prio');
            echo $this->Form->control('requisitante');
            echo $this->Form->control('statusdetalhado');
            echo $this->Form->control('analista');
            echo $this->Form->control('comentario');
            echo $this->Form->control('lastupdate', ['empty' => true]);
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
