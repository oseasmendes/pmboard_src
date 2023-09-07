<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataconsultore $ataconsultore
 */
?>
 <?= $this->Html->script(['script.min.js']) ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ataconsultores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataconsultores form large-9 medium-8 columns content">
      <?= $this->Form->create($ataconsultore) ?>
            <?php $paramid = $_POST['Consultores']; ?>
            <?php $this->ata_id = $paramid; ?>     
    <fieldset>
        <legend><?= __('Add Ataconsultore') ?></legend>
        <?php
            echo $this->Form->control('ata_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));             
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('nome',['class'=> "form-control",'readonly' => 'readonly']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>    

    $('#consultore-id').change(function() {
   
    var e = document.getElementById("consultore-id");
    var strUser = e.options[e.selectedIndex].text;
    document.getElementById("nome").value = strUser;
});
</script>