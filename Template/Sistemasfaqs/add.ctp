<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaq $sistemasfaq
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


<div class="sistemasfaqs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasfaq) ?>
    <fieldset>
        <legend><?= __('Add Sistemasfaq') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('Descricao',['class'=> "form-control"]);
            echo $this->Form->control('Historico',['class'=> "form-control"]);
            echo $this->Form->control('FrequentlyAskedQuestions');
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
    </section>
