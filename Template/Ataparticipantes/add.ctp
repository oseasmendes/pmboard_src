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
        <li><?= $this->Html->link(__('List Ataparticipantes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataparticipantes form large-9 medium-8 columns content">
    <?= $this->Form->create($ataparticipante) ?>
            <?php $paramid = $_POST['Pessoas']; ?>
            <?php $this->ata_id = $paramid; ?> 
    <fieldset>
        <legend><?= __('Add Ataparticipante') ?></legend>
        <?php
             echo $this->Form->control('ata_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); 
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
