<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasflw $projetosprodutosentregasflw
 */
?>

  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosentregasflw'), ['action' => 'edit', $projetosprodutosentregasflw->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosentregasflw'), ['action' => 'delete', $projetosprodutosentregasflw->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasflw->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasflws'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasflw'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosentregasflws view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosentregasflw->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosentregasflw->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasflw->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasflw->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $projetosprodutosentregasflw->has('motivo') ? $this->Html->link($projetosprodutosentregasflw->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosprodutosentregasflw->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Who') ?></th>
            <td><?= h($projetosprodutosentregasflw->who) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosentregasflw->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forum') ?></th>
            <td><?= h($projetosprodutosentregasflw->forum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosentregasflw->has('statusfuncional') ? $this->Html->link($projetosprodutosentregasflw->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosentregasflw->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregasflw->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosprodutosentregasflw->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentregasflw->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentregasflw->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosentregasflw->historico)); ?>
    </div>
</div>


                                    </div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>