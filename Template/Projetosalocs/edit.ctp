<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosaloc $projetosaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosaloc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosaloc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsnotas'), ['controller' => 'Projetosalocsnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsnota'), ['controller' => 'Projetosalocsnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['controller' => 'Projetosalocsprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsprofile'), ['controller' => 'Projetosalocsprofiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosaloc) ?>
    <fieldset>
        <legend><?= __('Edit Projetosaloc') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('tipoaloc_id', ['options' => $tipoalocs, 'empty' => true]);
            echo $this->Form->control('dataalocacao', ['empty' => true]);
            echo $this->Form->control('desalocacaoprevista', ['empty' => true]);
            echo $this->Form->control('desalocacaorealizada', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('percentual');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
