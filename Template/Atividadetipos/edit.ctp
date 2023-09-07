<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividadetipo $atividadetipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atividadetipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atividadetipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atividadetipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atividadetipos form large-9 medium-8 columns content">
    <?= $this->Form->create($atividadetipo) ?>
    <fieldset>
        <legend><?= __('Edit Atividadetipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
         <div class="form-check form-check-inline">                  
                    <div class="filho">
                        <?= $this->Form->control('notificacao'); ?>
                    </div>  
                    <div class="filho">
                        <?= $this->Form->control('tecnica'); ?>
                    </div>  
            </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
