<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propostasaloc $propostasaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $propostasaloc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $propostasaloc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Propostas'), ['controller' => 'Propostas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposta'), ['controller' => 'Propostas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodotipos'), ['controller' => 'Periodotipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodotipo'), ['controller' => 'Periodotipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocsagendas'), ['controller' => 'Propostasalocsagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasalocsagenda'), ['controller' => 'Propostasalocsagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propostasalocs form large-9 medium-8 columns content">
    <?= $this->Form->create($propostasaloc) ?>
    <fieldset>
        <legend><?= __('Edit Propostasaloc') ?></legend>
        <?php
            echo $this->Form->control('proposta_id', ['options' => $propostas, 'empty' => true]);
            echo $this->Form->control('competencia_id', ['options' => $competencias, 'empty' => true]);
            echo $this->Form->control('grade');
            echo $this->Form->control('totalhoras');
            echo $this->Form->control('dataprevistainicio', ['empty' => true]);
            echo $this->Form->control('dataprevistafim', ['empty' => true]);
            echo $this->Form->control('hrinicio');
            echo $this->Form->control('hrfim');
            echo $this->Form->control('jornadatrabalho');
            echo $this->Form->control('tempototalintervalos');
            echo $this->Form->control('aprovadohoraextra');
            echo $this->Form->control('considerarsabadototal');
            echo $this->Form->control('considerardomingo');
            echo $this->Form->control('considerarferiado');
            echo $this->Form->control('considerarsabadoparcial');
            echo $this->Form->control('jornadatrabalholiquido');
            echo $this->Form->control('periodoqte');
            echo $this->Form->control('periodotipo_id', ['options' => $periodotipos, 'empty' => true]);
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
