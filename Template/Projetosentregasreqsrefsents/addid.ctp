<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsent $projetosentregasreqsrefsent
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
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsents form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsrefsent) ?>
            <?php $paramid = $_POST['entity']; ?>
            <?php $this->projetosentregasreqsref_id = $paramid; ?>
            <?php echo $paramid; ?>
    <fieldset>
        <legend><?= __('Add Entidade/Atributo') ?></legend>
        <?php
            //echo $this->Form->control('projetosentregasreqsref_id', ['options' => $projetosentregasreqsrefs, 'empty' => true]);
            //, array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('projetosentregasreqsref_id', array('options' => $projetosentregasreqsrefs,'default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('tabela',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('campo',['class'=> "form-control"]);
            echo $this->Form->control('tipo',['class'=> "form-control"]);
            echo $this->Form->control('formato',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('chave',['class'=> "form-control"]);
            echo $this->Form->control('comentario',['class'=> "form-control"]);
            echo $this->Form->control('original');
            echo $this->Form->control('naoprevisto');
            
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