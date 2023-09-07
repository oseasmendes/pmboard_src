<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atasdetalhe $atasdetalhe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atasdetalhe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atasdetalhe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atasdetalhes form large-9 medium-8 columns content">
    <?= $this->Form->create($atasdetalhe) ?>
    <fieldset>
        <legend><?= __('Edit Atasdetalhe') ?></legend>
        <?php
            echo $this->Form->control('ata_id', ['options' => $atas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('resumo',['class'=> "form-control"]);
            echo $this->Form->control('detalhamento',['class'=> "form-control"]);
            echo $this->Form->control('responsavel_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('statusacao');            
            echo $this->Form->control('atadetallheordem',['class'=> "form-control"]);
            echo $this->Form->control('etapa_id', ['options' => $etapas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('atividade_id', ['options' => $atividades, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('fivewthreeh_id', ['options' => $fivewthreehs, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo '<div>';
            echo $this->Form->control('dataexecutada', ['empty' => true,'class'=>['class'=> 'form-control']]);
            echo '</div>';
            echo $this->Form->control('horaexecutada', ['empty' => true]);
            echo $this->Form->control('dataprevista', ['empty' => true]);
            echo $this->Form->control('horainicio', ['empty' => true]);
            echo $this->Form->control('horafim', ['empty' => true]);
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
