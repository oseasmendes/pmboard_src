<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis $testis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testes form large-9 medium-8 columns content">
    <?= $this->Form->create($testis) ?>
    <fieldset>
        <legend><?= __('Add Testis') ?></legend>
        <?php
            //echo $this->Form->control('dataemissao', ['empty' => true]);
            //echo $this->Form->control('dataemissao',['type'=>'date','empty' => true]);
            echo $this->Form->control('dataemissao', array('type' => 'date'));

            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
