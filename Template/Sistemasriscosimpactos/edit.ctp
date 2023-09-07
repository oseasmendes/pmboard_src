<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasriscosimpacto $sistemasriscosimpacto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasriscosimpacto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasriscosimpacto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscosimpactos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sistemasriscosimpactos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasriscosimpacto) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasriscosimpacto') ?></legend>
        <?php
            echo $this->Form->control('sistemarisco_id');
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhamento');
            echo $this->Form->control('tipo');
            echo $this->Form->control('nivel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
