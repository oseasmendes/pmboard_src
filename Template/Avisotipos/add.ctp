<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avisotipo $avisotipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Avisotipos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="avisotipos form large-9 medium-8 columns content">
    <?= $this->Form->create($avisotipo) ?>
    <fieldset>
        <legend><?= __('Add Avisotipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
