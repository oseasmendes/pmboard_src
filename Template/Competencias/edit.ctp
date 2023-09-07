<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competencia $competencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocacoespapeis'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocacoespapei'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competencias form large-9 medium-8 columns content">
    <?= $this->Form->create($competencia) ?>
    <fieldset>
        <legend><?= __('Edit Competencia') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('resumo');
            echo $this->Form->control('ativo');   
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
