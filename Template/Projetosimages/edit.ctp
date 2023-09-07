<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosimage $projetosimage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosimage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosimage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosimages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosimages form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosimage) ?>
    <fieldset>
        <legend><?= __('Edit Projetosimage') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('pathimage');
            echo $this->Form->control('imagestipo_id', ['options' => $imagestipos, 'empty' => true]);
            echo $this->Form->control('image');
            $ativo = ['N' => 'Inativo', 'A' => 'Ativo'];
            echo $this->Form->select('ativo', $ativo, ['default' => 'A']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
