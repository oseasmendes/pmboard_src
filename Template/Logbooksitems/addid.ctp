<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbooksitem $logbooksitem
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">TO DO List</h3>
                        </div>
                            <div class="card-body">
                                
            <div class="row" >


<div>
    <?= $this->Form->create($logbooksitem) ?>

    <?php 
          $paramid = $_POST['item']; 
          $this->logbook_id = $paramid;     
        
    ?>

    <fieldset>
        <legend><?= __('New Item') ?></legend>
        <?php
            echo '<div class="row" >';
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo $this->Form->control('logbook_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo '</p>';
            echo '<div class="row" >';
            echo $this->Form->text('hora',array(
                'type' => 'time',
                'class'=>'datepicker',
                'default' => date("H:i",strtotime("-1 hour", strtotime(date('H:i'))))
                //'default' => date('H:i')
            ));                      
            echo '</div>';
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('notificaracao');
            echo $this->Form->control('notificarcontato',['class'=> "form-control"]);
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
        ?>
    </fieldset>
    </p>
    <div class="col-2"> 
        <?= $this->Form->button('Submit',['class'=>'btn btn-info btn-sm btn-block']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>



</div>

                                    </div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
