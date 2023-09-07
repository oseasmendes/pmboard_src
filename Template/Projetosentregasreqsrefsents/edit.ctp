<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsent $projetosentregasreqsrefsent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosentregasreqsrefsent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsents form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsrefsent) ?>
    <fieldset>
        <legend><?= __('Edit Projetosentregasreqsrefsent') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id', ['options' => $projetosentregasreqsrefs, 'empty' => true]);            
            echo $this->Form->control('tabela',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('campo',['class'=> "form-control"]);
            echo $this->Form->control('tipo',['class'=> "form-control"]);
            echo $this->Form->control('formato',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('chave',['class'=> "form-control"]);
            echo $this->Form->control('comentario',['class'=> "form-control"]);

            echo $this->Form->control('original');
            echo $this->Form->control('modificado');
            echo $this->Form->control('naoprevisto');
            echo $this->Form->control('descontinuado');


        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
