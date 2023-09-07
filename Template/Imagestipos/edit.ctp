<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagestipo $imagestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imagestipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagestipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosimages'), ['controller' => 'Projetosimages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosimage'), ['controller' => 'Projetosimages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagestipos form large-9 medium-8 columns content">
    <?= $this->Form->create($imagestipo) ?>
    <fieldset>
        <legend><?= __('Edit Imagestipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
