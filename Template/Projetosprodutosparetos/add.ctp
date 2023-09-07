<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutospareto $projetosprodutospareto
 */
?>

<div class="projetosprodutosparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutospareto) ?>
            <?php $paramid = $_POST['Pareto']; ?>
            <?php $this->projetosproduto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Novo Status do Produto') ?></legend>
        <?php
            echo $this->Form->control('projetosproduto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
              
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            //echo $this->Form->control('historico');
             echo '</p>';
            echo $this->Form->control('historico',[
                                            'templates' => [
                                            'inputContainer' => '{{content}}'
                                            ],
                                            "type" => "textarea",
                                            "aria-invalid" => "false",
                                            "aria-required" => "true",
                                            "class" => "form-control valid",
                                            "placeholder" => "Detalhe os trabalhos se necessario",
                                            "autocomplete" => "on",                    
                                            'label' => false
                                            ]); 
            echo '</p>';

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
