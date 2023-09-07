<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretrositem $projetossprintsretrositem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsretrositem'), ['action' => 'edit', $projetossprintsretrositem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsretrositem'), ['action' => 'delete', $projetossprintsretrositem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrositem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretros'), ['controller' => 'Projetossprintsretros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretro'), ['controller' => 'Projetossprintsretros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="row no-gutters" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projetossprintsretrositem, ['url'=>['controller' => 'Projetossprintsretrosactions', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('NewAction',['default'=> $this->Number->format($projetossprintsretrositem->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Ação',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                                         
            </div>
<div class="projetossprintsretrositems view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsretrositem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetossprintsretro') ?></th>
            <td><?= $projetossprintsretrositem->has('projetossprintsretro') ? $this->Html->link($projetossprintsretrositem->projetossprintsretro->id, ['controller' => 'Projetossprintsretros', 'action' => 'view', $projetossprintsretrositem->projetossprintsretro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetossprintsretrositem->has('pareto') ? $this->Html->link($projetossprintsretrositem->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetossprintsretrositem->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetossprintsretrositem->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Geraplanoacao') ?></th>
            <td><?= h($projetossprintsretrositem->geraplanoacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacao') ?></th>
            <td><?= h($projetossprintsretrositem->observacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classificacao') ?></th>
            <td><?= h($projetossprintsretrositem->classificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referenciaoriginal') ?></th>
            <td><?= h($projetossprintsretrositem->referenciaoriginal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsretrositem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numerocard') ?></th>
            <td><?= $this->Number->format($projetossprintsretrositem->numerocard) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsretrositem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsretrositem->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetossprintsretrositem->detalhes)); ?>
    </div>
</div>
