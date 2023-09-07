<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrisco $projetosprodutosrisco
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
                ['action' => 'delete', $projetosprodutosrisco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosrisco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicabilidades'), ['controller' => 'Aplicabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicabilidade'), ['controller' => 'Aplicabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscosimpactos'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosimpacto'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosriscos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosrisco) ?>
    <fieldset>
        <legend><?= __('Editar Lançamento de Risco') ?></legend>
        <?php
         $options = array(
                  'MUITO BAIXO' => 'MUITO BAIXO',  
                  'BAIXO' => 'BAIXO',
                  'MODERADO' => 'MODERADO',
                  'ALTO' => 'ALTO',
                  'MUITO ALTO' => 'MUITO ALTO',
                  'NAO SE APLICA' => 'NAO SE APLICA'
            );
            $ativo = array(
                'A' => 'ATIVO',  
                'N' => 'INATIVO'                
          );
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('risco_id', ['options' => $riscos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('aplicabilidade_id', ['options' => $aplicabilidades, 'empty' => true,'class'=>['class'=> 'form-control']]);  
            echo $this->Form->control('probabilidade_id', ['options' => $probabilidades, 'empty' => true,'class'=>['class'=> 'form-control']]);     
            echo $this->Form->control('severidade_id', ['options' => $severidades, 'empty' => true,'class'=>['class'=> 'form-control']]); 
            echo 'Nível';
            echo $this->Form->select('nivel', $options,['class'=> 'form-control']);
            echo $this->Form->control('resumo',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo $this->Form->control('probabilidadeindice',['class'=> "form-control"]);
            echo $this->Form->control('tempoprevistoimpacto',['class'=> "form-control"]);
            echo $this->Form->control('pessoasafetadas',['class'=> "form-control"]);
            echo $this->Form->control('estimativafinanceiradorisco',['class'=> "form-control"]);
            echo 'Ativo';           
            echo $this->Form->select('ativo', $ativo,['class'=> 'form-control']);
            echo '</p>';
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