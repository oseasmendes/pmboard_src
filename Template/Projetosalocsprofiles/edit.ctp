<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsprofile $projetosalocsprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosalocsprofile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsprofile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocsprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosalocsprofile) ?>
    <fieldset>
        <legend><?= __('Edit Projetosalocsprofile') ?></legend>
        <?php
            echo $this->Form->control('projetosaloc_id', ['options' => $projetosalocs, 'empty' => true]);
            echo $this->Form->control('percentual');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('dataalocacao', ['empty' => true]);
            echo $this->Form->control('competencia_id', ['options' => $competencias, 'empty' => true]);
            echo $this->Form->control('propostasaloc_id', ['options' => $propostasalocs, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('horasdia');
             echo $this->Form->control('consideracalculocapacidade',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
