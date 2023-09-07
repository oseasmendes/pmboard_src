<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrisco $projetosprodutosrisco
 */
?>

<div class="projetosprodutosriscos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosrisco) ?>
            <?php $paramid = $_POST['Riscos']; ?>
            <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Registrar Risco de Projeto') ?></legend>
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

           // echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
             echo $this->Form->control('projetosproduto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
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
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
