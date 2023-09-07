<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprint $projetossprint
 */
?>

                <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projetossprint, ['url'=>['controller' => 'Projetossprintsdailys', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('daily',['default'=> $this->Number->format($projetossprint->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Daily',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                </div>    
<div class="projetossprints view large-9 medium-8 columns content">
    <h3><?= h($projetossprint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetossprint->has('projeto') ? $this->Html->link($projetossprint->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetossprint->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetossprint->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sprinttipo') ?></th>
            <td><?= $projetossprint->has('sprinttipo') ? $this->Html->link($projetossprint->sprinttipo->id, ['controller' => 'Sprinttipos', 'action' => 'view', $projetossprint->sprinttipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicio') ?></th>
            <td><?= h($projetossprint->datainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafim') ?></th>
            <td><?= h($projetossprint->datafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprint->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetossprint->data) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Jiraetlversions') ?></h4>
        <?php if (!empty($projetossprint->jiraetlversions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Projetossprint Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetossprint->jiraetlversions as $jiraetlversions): ?>
            <tr>
                <td><?= h($jiraetlversions->id) ?></td>
                <td><?= h($jiraetlversions->versao) ?></td>
                <td><?= h($jiraetlversions->projetossprint_id) ?></td>
                <td><?= h($jiraetlversions->created) ?></td>
                <td><?= h($jiraetlversions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Jiraetlversions', 'action' => 'view', $jiraetlversions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Jiraetlversions', 'action' => 'edit', $jiraetlversions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jiraetlversions', 'action' => 'delete', $jiraetlversions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraetlversions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetossprintsforecasts') ?></h4>
        <?php if (!empty($projetossprint->projetossprintsforecasts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Version') ?></th>
                <th scope="col"><?= __('Projetossprint Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Storypoints') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Periodoinicial') ?></th>
                <th scope="col"><?= __('Periodofinal') ?></th>
                <th scope="col"><?= __('Numeroderecursos') ?></th>
                <th scope="col"><?= __('Tiporecursos') ?></th>
                <th scope="col"><?= __('Totalhorasprevistas') ?></th>
                <th scope="col"><?= __('Storypointstotal') ?></th>
                <th scope="col"><?= __('Storypointprevistodia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetossprint->projetossprintsforecasts as $projetossprintsforecasts): ?>
            <tr>
                <td><?= h($projetossprintsforecasts->id) ?></td>
                <td><?= h($projetossprintsforecasts->descricao) ?></td>
                <td><?= h($projetossprintsforecasts->version) ?></td>
                <td><?= h($projetossprintsforecasts->projetossprint_id) ?></td>
                <td><?= h($projetossprintsforecasts->data) ?></td>
                <td><?= h($projetossprintsforecasts->storypoints) ?></td>
                <td><?= h($projetossprintsforecasts->created) ?></td>
                <td><?= h($projetossprintsforecasts->modified) ?></td>
                <td><?= h($projetossprintsforecasts->statusfuncional_id) ?></td>
                <td><?= h($projetossprintsforecasts->periodoinicial) ?></td>
                <td><?= h($projetossprintsforecasts->periodofinal) ?></td>
                <td><?= h($projetossprintsforecasts->numeroderecursos) ?></td>
                <td><?= h($projetossprintsforecasts->tiporecursos) ?></td>
                <td><?= h($projetossprintsforecasts->totalhorasprevistas) ?></td>
                <td><?= h($projetossprintsforecasts->storypointstotal) ?></td>
                <td><?= h($projetossprintsforecasts->storypointprevistodia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetossprintsforecasts', 'action' => 'view', $projetossprintsforecasts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetossprintsforecasts', 'action' => 'edit', $projetossprintsforecasts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetossprintsforecasts', 'action' => 'delete', $projetossprintsforecasts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsforecasts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('BackLog Sprint') ?></h4>
        <?php if (!empty($projetossprint->projetossprintsitems)): ?>
            <table class="table table-striped table-responsive">  
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('SprintId','Projetossprint_id') ?></th>
                <th scope="col"><?= __('EntrId','Projetosprodutosentrega_id') ?></th>
                <th scope="col"><?= __('Ref','Referencia') ?></th>
                <th scope="col"><?= __('Main','Taskmain') ?></th>
                <th scope="col"><?= __('Sub','Tasksub') ?></th>                
                <th scope="col"><?= __('StoryP','Storyppoints') ?></th>
                <th scope="col"><?= __('Status','Statusfuncional_id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('StoryReview','Storypointsrevised') ?></th>                
                <th scope="col"><?= __('Pareto','Pareto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetossprint->projetossprintsitems as $projetossprintsitems): ?>
            <tr>
                <td><?= h($projetossprintsitems->id) ?></td>
                <td><?= h($projetossprintsitems->projetossprint_id) ?></td>
                <td><?= h($projetossprintsitems->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetossprintsitems->referencia) ?></td>
                <td><?= h($projetossprintsitems->taskmain) ?></td>
                <td><?= h($projetossprintsitems->tasksub) ?></td>                
                <td><?= h($projetossprintsitems->storyppoints) ?></td>
                <td><?= h($projetossprintsitems->statusfuncional_id) ?></td>
                <td><?= h($projetossprintsitems->created) ?></td>
                <td><?= h($projetossprintsitems->modified) ?></td>
                <td><?= h($projetossprintsitems->storypointsrevised) ?></td>                
                <td><?= h($projetossprintsitems->pareto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetossprintsitems', 'action' => 'view', $projetossprintsitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetossprintsitems', 'action' => 'edit', $projetossprintsitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetossprintsitems', 'action' => 'delete', $projetossprintsitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsitems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetossprintsrealizados') ?></h4>
        <?php if (!empty($projetossprint->projetossprintsrealizados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Projetossprint Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Storypoints') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Impedimento') ?></th>
                <th scope="col"><?= __('Novareferencia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetossprint->projetossprintsrealizados as $projetossprintsrealizados): ?>
            <tr>
                <td><?= h($projetossprintsrealizados->id) ?></td>
                <td><?= h($projetossprintsrealizados->consultore_id) ?></td>
                <td><?= h($projetossprintsrealizados->projetossprint_id) ?></td>
                <td><?= h($projetossprintsrealizados->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetossprintsrealizados->data) ?></td>
                <td><?= h($projetossprintsrealizados->storypoints) ?></td>
                <td><?= h($projetossprintsrealizados->referencia) ?></td>
                <td><?= h($projetossprintsrealizados->created) ?></td>
                <td><?= h($projetossprintsrealizados->modified) ?></td>
                <td><?= h($projetossprintsrealizados->observacao) ?></td>
                <td><?= h($projetossprintsrealizados->impedimento) ?></td>
                <td><?= h($projetossprintsrealizados->novareferencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetossprintsrealizados', 'action' => 'view', $projetossprintsrealizados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetossprintsrealizados', 'action' => 'edit', $projetossprintsrealizados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetossprintsrealizados', 'action' => 'delete', $projetossprintsrealizados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsrealizados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
