<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhe $sistemasfaqsdetalhe
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
</div>

<div class="sistemasfaqsdetalhes form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasfaqsdetalhe) ?>
    <fieldset>
        <legend><?= __('Add Sistemasfaqsdetalhe') ?></legend>
        <?php
            echo $this->Form->control('sistemasfaq_id', ['options' => $sistemasfaqs, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('ordem');
            echo $this->Form->control('descricao');
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('historico');
            echo $this->Form->control('contribuicaode');
            echo $this->Form->control('faqprecedente');
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
