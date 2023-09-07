<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistema $sistema
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

</div>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistema->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistema->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasareas'), ['controller' => 'Sistemasareas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasarea'), ['controller' => 'Sistemasareas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasbriefings'), ['controller' => 'Sistemasbriefings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasbriefing'), ['controller' => 'Sistemasbriefings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgrelacionados'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgrelacionado'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemashistoricos'), ['controller' => 'Sistemashistoricos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemashistorico'), ['controller' => 'Sistemashistoricos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemas form large-9 medium-8 columns content">
    <?= $this->Form->create($sistema) ?>
    <fieldset>
        <legend><?= __('Edit Sistema') ?></legend>
        <?php
            echo $this->Form->control('dataregistro', ['empty' => true]);
            echo $this->Form->control('codenome',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('urlprincipal',['class'=> "form-control"]);
            echo $this->Form->control('urlteste',['class'=> "form-control"]);
            echo $this->Form->control('urlqualidade',['class'=> "form-control"]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
            echo $this->Form->control('objetivo',['class'=> "form-control"]);
            echo $this->Form->control('dataimplantacao', ['empty' => true]);
            echo $this->Form->control('dataultimaatualizacao', ['empty' => true]);
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('empresasunidade_id', ['options' => $empresasunidades, 'empty' => true]);
            echo $this->Form->control('sistemasestrategia_id', ['options' => $sistemasestrategias, 'empty' => true]);
            echo $this->Form->control('sistemasqueue_id', ['options' => $sistemasqueues, 'empty' => true]);
            echo $this->Form->control('bookmarked');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
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
    </section>
