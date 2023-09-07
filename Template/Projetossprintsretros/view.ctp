<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretro $projetossprintsretro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsretro'), ['action' => 'edit', $projetossprintsretro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsretro'), ['action' => 'delete', $projetossprintsretro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['controller' => 'Projetossprintsretrositems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['controller' => 'Projetossprintsretrositems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetossprintsretros view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsretro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetossprint') ?></th>
            <td><?= $projetossprintsretro->has('projetossprint') ? $this->Html->link($projetossprintsretro->projetossprint->id, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsretro->projetossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetossprintsretro->has('pareto') ? $this->Html->link($projetossprintsretro->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetossprintsretro->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetossprintsretro->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacao') ?></th>
            <td><?= h($projetossprintsretro->observacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referenciaboard') ?></th>
            <td><?= h($projetossprintsretro->referenciaboard) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetossprintsretro->has('statusfuncional') ? $this->Html->link($projetossprintsretro->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetossprintsretro->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsretro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataretro') ?></th>
            <td><?= h($projetossprintsretro->Dataretro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsretro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsretro->modified) ?></td>
        </tr>
    </table>  
    <div class="related">
        <h4><?= __('Related Projetossprintsretrositems') ?></h4>
        <?php if (!empty($projetossprintsretro->projetossprintsretrositems)): ?>
            <table class="table table-striped table-responsive">  
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('RtrId','Projetossprintsretro Id') ?></th>              
                <th scope="col"><?= __('Descricao') ?></th>                
                <th scope="col"><?= __('Ação','Geraplanoacao') ?></th>                
                <th scope="col"><?= __('Classificacao') ?></th>
                <th scope="col"><?= __('Referenciaoriginal') ?></th>           
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetossprintsretro->projetossprintsretrositems as $projetossprintsretrositems): ?>
            <tr>
                <td><?= h($projetossprintsretrositems->id) ?></td>
                <td><?= h($projetossprintsretrositems->projetossprintsretro_id) ?></td>                
                <td><?= h($projetossprintsretrositems->descricao) ?></td>                
                <td><?= h($projetossprintsretrositems->geraplanoacao) ?></td>                
                <td><?= h($projetossprintsretrositems->classificacao) ?></td>
                <td><?= h($projetossprintsretrositems->referenciaoriginal) ?></td>         
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetossprintsretrositems', 'action' => 'view', $projetossprintsretrositems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetossprintsretrositems', 'action' => 'edit', $projetossprintsretrositems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetossprintsretrositems', 'action' => 'delete', $projetossprintsretrositems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrositems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
