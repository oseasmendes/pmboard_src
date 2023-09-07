<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregaspareto $projetosentregaspareto
 */
?>

<div class="projetosentregasparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregaspareto) ?>
            <?php $paramid = $_POST['Pareto']; ?>
            <?php $this->projetosprodutosentrega_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Novo Status da Entrega') ?></legend>
        <?php
            // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
              echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));

            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true,'class'=>['class'=> 'form-control']]);  
            echo $this->Form->control('dataorigem',['class'=> "form-control"]);
            echo $this->Form->control('canal', ['options' => ['JIRA'=>'JIRA','MANUAL'=>'MANUAL','ESUPPORT'=>'ESUPPORT','SERVICENOW'=>'SERVICENOW','EMAIL'=>'EMAIL','TEAMS'=>'TEAMS'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            
            echo $this->Form->control('descricao',['class'=> "form-control"]);

          //  echo $this->Form->control('historico', array('type' => 'textarea'));
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



            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('responsabilidade_id', ['options' => $responsabilidades, 'empty' => true,'class'=>['class'=> 'form-control']]);
            
            echo '</p>';
        ?>
        
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
