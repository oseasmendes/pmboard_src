<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosrestrictionsfl $projetosrestrictionsfl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosrestrictionsfl->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestrictionsfl->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosrestrictionsfls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosrestrictions'), ['controller' => 'Projetosrestrictions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosrestriction'), ['controller' => 'Projetosrestrictions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosrestrictionsfls form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosrestrictionsfl) ?>
    <fieldset>
        <legend><?= __('Edit Projetosrestrictionsfl') ?></legend>
        <?php
            echo $this->Form->control('projetosrestriction_id', ['options' => $projetosrestrictions, 'empty' => true]);
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
