<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosapontamento $projetosapontamento
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Deliverable</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="projetosapontamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosapontamento) ?>
            <?php $paramid = $_POST['Apont']; ?>
            <?php $this->projetosprodutosentrega_id = $paramid; ?>


    <fieldset>
        <legend><?= __('Apontamento') ?></legend>
        <?php
        echo '<div class="row">';
            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));

            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
        //    echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
        echo '</div>';
        echo '<div class="row">';
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->text('horainicio', array('type' => 'time'));
            echo $this->Form->text('horafim', array('type' => 'time'));   
          //  echo $this->Form->control('temporealizado');

        echo '</div>';
            //echo $this->Form->control('horainicio', ['empty' => true]);
            //echo $this->Form->control('horafim', ['empty' => true]);
            
            
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('canal', ['options' => ['JIRA'=>'JIRA','MANUAL'=>'MANUAL','ESUPPORT'=>'ESUPPORT','SERVICENOW'=>'SERVICENOW','EMAIL'=>'EMAIL','TEAMS'=>'TEAMS'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals,'class'=>['class'=> 'form-control'],'empty' => true]);
       ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>



</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
        </div>      
        </div>      
    </section>