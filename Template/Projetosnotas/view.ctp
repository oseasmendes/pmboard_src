<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnota $projetosnota
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
<div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">

        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $projetosnota->id],['class'=>'btn btn-primary btn-sm']) ?> 
        <?= $this->Form->postLink(__('Excluir Nota'), ['action' => 'delete', $projetosnota->id],['class'=>'btn btn-primary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosnota->id)],['class'=>'btn btn-primary btn-sm']) ?> 
        <?= $this->Html->link(__('Listar Notas'), ['action' => 'index'],['class'=>'btn btn-primary btn-sm']) ?> 
        <?= $this->Html->link(__('Nova Nota'), ['action' => 'add'],['class'=>'btn btn-primary btn-sm']) ?>         
    </div>  
</nav>
<div class="projetosnotas view large-9 medium-8 columns content">
    <h3><?= "Project Note#".h($projetosnota->id) ?></h3>
    
    <table class="table">
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= $projetosnota->has('notatipo') ? $this->Html->link($projetosnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosnota->notatipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosnota->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosnota->has('projeto') ? $this->Html->link($projetosnota->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosnota->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosnota->referencia) ?></td>
        </tr>       
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosnota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosnota->modified) ?></td>
        </tr>
    </table>
    <div>
        <h4><?= __('Historico') ?></h4>
    </div>
    <blockquote class="blockquote">
    <div class="row">
        
    <p></p>
        <p><?= $this->Text->autoParagraph(h($projetosnota->historico)); ?></p>
    </div>
    </blockquote>
</div>




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>