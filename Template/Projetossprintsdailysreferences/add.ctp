<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsdailysreference $projetossprintsdailysreference
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsdailysreferences'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projetossprintsdailysreferences form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsdailysreference) ?>
    <fieldset>
        <legend><?= __('Add Projetossprintsdailysreference') ?></legend>
        <?php
            echo $this->Form->control('projetossprintsdaily_id');
            echo $this->Form->control('reference');
            echo $this->Form->control('resumo');
            echo $this->Form->control('cancelado');
            echo $this->Form->control('numericreference');
            echo $this->Form->control('done');
            echo $this->Form->control('doing');
            echo $this->Form->control('testing');
            echo $this->Form->control('collaboration');
            echo $this->Form->control('Selected');
            echo $this->Form->control('analysing');
            echo $this->Form->control('comments');
            echo $this->Form->control('actionsplans');
            echo $this->Form->control('generatenews');
            echo $this->Form->control('support');
            echo $this->Form->control('risk');
            echo $this->Form->control('customeraction');
            echo $this->Form->control('customeractionflag');
            echo $this->Form->control('lancadoem', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
