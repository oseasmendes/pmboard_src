<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreq $projetosprodutosreq
 */
?>

<div class="projetosprodutosreqs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosreq) ?>
    <fieldset>
        <legend><?= __('Novo Requisito de Produto') ?></legend>
        <?php
            echo '<div class="form-row">';
            echo '<div class="col">';
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo '</div>';
            echo '</div>';
            echo '<div class="form-row">';
            echo '<div class="col">';
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';  
            echo '</div>';           
            echo '<div class="form-row">'; 
            echo '<div class="col">';
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';                        
            echo '<div class="col">';
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';                      
            echo '<div class="col">';
            echo $this->Form->control('solicitante',['class'=> "form-control"]);
            echo '</div>';
            echo '</div>';           
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo '<div class="form-row">';
            echo '<div class="col">';
            echo $this->Form->control('wave',['class'=> "form-control"]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('previsaoanalise',['class'=> "form-control"]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('unidademedida_id', ['options' => $unidademedidas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('previsaosprints',['class'=> "form-control"]);
            echo '</div>';
            echo '</div>';   
            echo '<div class="form-row">';
            echo '<div class="col">';        
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '</div>';   
             echo '<div class="form-row">';
            echo '<div class="col">';    
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('frente_id', ['options' => $frentes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo '</div>';  
             echo '<div class="form-row">';
            echo '<div class="col">';    
            echo $this->Form->control('ativo',['class'=> "form-control"]); 
            echo '</div>';
            echo '<div class="col">';    
            echo $this->Form->control('reqstatus', ['options' => ['IN_EVALUTATION_TECHNICAL'=>'IN_EVALUTATION_TECHNICAL','IN_EVALUATION_BUSINESS'=>'IN_EVALUATION_BUSINESS','APPROVED'=>'APPROVED','DELIVERED'=>'DELIVERED','CANCELLED'=>'CANCELLED','IN_REVISION'=>'IN_REVISION','CHANGED'=>'CHANGED','DEFINED'=>'DEFINED'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
             echo '</div>';
             echo '</div>';
             echo '</p>';   
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
