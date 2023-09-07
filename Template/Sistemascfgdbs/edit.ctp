<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdb $sistemascfgdb
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
                ['action' => 'delete', $sistemascfgdb->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdb->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbdets'), ['controller' => 'Sistemascfgdbdets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdbdet'), ['controller' => 'Sistemascfgdbdets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgdbs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgdb) ?>
    <fieldset>
        <legend><?= __('Editar Fonte') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('banco_id', ['options' => $bancos, 'empty' => true]);
            echo $this->Form->control('ambiente_id', ['options' => $ambientes, 'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('contato',['class'=> "form-control"]);
            echo $this->Form->control('ipaddress',['class'=> "form-control"]);
            echo $this->Form->control('conn',['class'=> "form-control"]);
            echo $this->Form->control('versao',['class'=> "form-control"]);
            echo $this->Form->control('host',['class'=> "form-control"]);
            echo $this->Form->control('urlresumida',['class'=> "form-control"]);
            echo $this->Form->control('url',['class'=> "form-control"]);
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