<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsscript $projetosentregasreqsscript
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsscripts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsscripts form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsscript) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasreqsscript') ?></legend>
        <?php
            echo $this->Form->control('referencia');
            echo $this->Form->control('descricao');
            echo $this->Form->control('projetosentregasreqsref_id');
            echo $this->Form->control('scriptsemantic');
            echo $this->Form->control('observacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
