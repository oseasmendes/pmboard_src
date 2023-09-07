<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrisco $sistemasrisco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aplicabilidades'), ['controller' => 'Aplicabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aplicabilidade'), ['controller' => 'Aplicabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasriscos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasrisco) ?>
            <?php $paramid = $_POST['Riscos'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasrisco') ?></legend>
        <?php
            
             echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('risco_id', ['options' => $riscos, 'empty' => true]);
            echo $this->Form->control('aplicabilidade_id', ['options' => $aplicabilidades, 'empty' => true]);
            echo $this->Form->control('nivel');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('probabilidade');
            echo $this->Form->control('tempoprevistoimpacto');
            echo $this->Form->control('pessoasafetadas');
            echo $this->Form->control('estimativafinanceiradorisco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
