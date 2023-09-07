<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pareto $pareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pareto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pareto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paretosmestres'), ['controller' => 'Paretosmestres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paretosmestre'), ['controller' => 'Paretosmestres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasparetos'), ['controller' => 'Projetosentregasparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregaspareto'), ['controller' => 'Projetosentregasparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List View Kanbanentregas'), ['controller' => 'ViewKanbanentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New View Kanbanentrega'), ['controller' => 'ViewKanbanentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paretos form large-9 medium-8 columns content">
    <?= $this->Form->create($pareto) ?>
    <fieldset>
        <legend><?= __('Edit Pareto') ?></legend>
        <?php
            echo $this->Form->control('Kanban');
            echo $this->Form->control('Workload');
            echo $this->Form->control('Unidade');
            echo $this->Form->control('prioridade');
            echo $this->Form->control('cor');
            echo $this->Form->control('ativo');
            echo $this->Form->control('rotulo');
            echo $this->Form->control('semaforo');
            echo $this->Form->control('projeto_id');
            echo $this->Form->control('responsabilidade');
            echo $this->Form->control('fechamento');
            echo $this->Form->control('prefechamento');
            echo $this->Form->control('paretosmestre_id', ['options' => $paretosmestres, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
