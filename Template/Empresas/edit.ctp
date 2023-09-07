<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Edit Empresa') ?></legend>
        <?php
            echo $this->Form->control('fantasia',['class'=> "form-control"]);
            echo $this->Form->control('razaosocial',['class'=> "form-control"]);
            echo $this->Form->control('cnpj',['class'=> "form-control"]);
            echo $this->Form->control('ie',['class'=> "form-control"]);
            echo $this->Form->control('inscmunicipal',['class'=> "form-control"]);
            echo $this->Form->control('endereco',['class'=> "form-control"]);
            echo $this->Form->control('bairro',['class'=> "form-control"]);
            echo $this->Form->control('cidade',['class'=> "form-control"]);
            echo $this->Form->control('cep',['class'=> "form-control"]);
            echo $this->Form->control('telefone',['class'=> "form-control"]);
            echo $this->Form->control('contato',['class'=> "form-control"]);
            echo $this->Form->control('datafundacao', ['empty' => true,['class'=> "form-control"]]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
