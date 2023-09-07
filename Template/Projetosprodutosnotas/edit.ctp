<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosnota $projetosprodutosnota
 */
?>

<div class="projetosprodutosnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosnota) ?>
       
    <fieldset>
        <legend><?= __('Editar Anotação do Produto') ?></legend>
        <?php
           

            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);
            echo $this->Form->control('notatipo_id', ['options' => $notatipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
             echo '</p>';
            echo $this->Form->control('historico',[
                                            'templates' => [
                                            'inputContainer' => '{{content}}'
                                            ],
                                            "type" => "textarea",
                                            "aria-invalid" => "false",
                                            "aria-required" => "true",
                                            "class" => "form-control valid",
                                            "placeholder" => "Detalhe a anotação se necessario",
                                            "autocomplete" => "on",                    
                                            'label' => false
                                            ]); 
            echo '</p>';

            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
