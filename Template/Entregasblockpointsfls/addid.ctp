<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpointsfl $entregasblockpointsfl
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<div class="entregasblockpointsfls form large-9 medium-8 columns content">
    <?= $this->Form->create($entregasblockpointsfl) ?>
            <?php $paramid = $_POST['BlockFUP']; ?>
            <?php $this->entregasblockpoint_id = $paramid; ?>      
    <fieldset>
        <legend><?= __('Add Follow-Up') ?></legend>
        <?php            
            echo $this->Form->control('entregasblockpoint_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
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
        </div>      
    </section>
