<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataparticipante $ataparticipante
 */
?>
 <?= $this->Html->script(['script.min.js']) ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ataparticipante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ataparticipante->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ataparticipantes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataparticipantes form large-9 medium-8 columns content">
    <?= $this->Form->create($ataparticipante) ?>
    <fieldset>
        <legend><?= __('Edit Ataparticipante') ?></legend>
        <?php
            echo $this->Form->control('ata_id', ['options' => $atas, 'empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('nome',['class'=> "form-control",'readonly' => 'readonly']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>    

    $('#participante-id').change(function() {
   
    var e = document.getElementById("participante-id");
    var strUser = e.options[e.selectedIndex].text;
    document.getElementById("nome").value = strUser;
});
</script>