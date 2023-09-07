<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaq $sistemasfaq
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


<div class="sistemasfaqs view large-9 medium-8 columns content">
    <h3><?= h($sistemasfaq->id) ?></h3>
    <div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($sistemasfaq, ['url'=>['controller' => 'Sistemasfaqsdetalhes', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('faqdet',['default'=> $this->Number->format($sistemasfaq->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Detalhes',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>        
        </div>        
</div>    

    <table class="table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasfaq->has('sistema') ? $this->Html->link($sistemasfaq->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasfaq->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistemasfaq->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasfaq->Descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mensagem do Erro') ?></th>
            <td><?= h($sistemasfaq->mensagemerro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasfaq->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasfaq->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasfaq->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FrequentlyAskedQuestions') ?></th>
            <td><?= $sistemasfaq->FrequentlyAskedQuestions ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasfaq->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasfaq->Historico)); ?>
    </div>

    <div class="related">
        <h4><?= __('Ações') ?></h4>
        <?php if (!empty($sistemasfaq->sistemasfaqsdetalhes)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('FaQ','Sistemasfaq Id') ?></th>
                <th scope="col"><?= __('Ref','Referencia') ?></th>
                <th scope="col"><?= __('Ordem','Ord') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Resp','Participante Id') ?></th>                
                <th scope="col"><?= __('Contribuição','Contribuicaode') ?></th>
                <th scope="col"><?= __('Precedente','Faqprecedente') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Lancto','Created') ?></th>
                <th scope="col"><?= __('Modif','Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasfaq->sistemasfaqsdetalhes as $sistemasfaqsdetalhes): ?>
            <tr>
                <td><?= h($sistemasfaqsdetalhes->id) ?></td>
                <td><?= h($sistemasfaqsdetalhes->sistemasfaq_id) ?></td>
                <td><?= h($sistemasfaqsdetalhes->referencia) ?></td>
                <td><?= h($sistemasfaqsdetalhes->ordem) ?></td>
                <td><?= h($sistemasfaqsdetalhes->descricao) ?></td>
                <td><?= h($sistemasfaqsdetalhes->participante_id) ?></td>                
                <td><?= h($sistemasfaqsdetalhes->contribuicaode) ?></td>
                <td><?= h($sistemasfaqsdetalhes->faqprecedente) ?></td>
                <td><?= h($sistemasfaqsdetalhes->ativo) ?></td>
                <td><?= h($sistemasfaqsdetalhes->created) ?></td>
                <td><?= h($sistemasfaqsdetalhes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'view', $sistemasfaqsdetalhes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'edit', $sistemasfaqsdetalhes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'delete', $sistemasfaqsdetalhes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaqsdetalhes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Entregas Relacionadas') ?></h4>
        <?php if (!empty($sistemasfaq->entregasfaqs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Sistemasfaq Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasfaq->entregasfaqs as $entregasfaqs): ?>
            <tr>
                <td><?= h($entregasfaqs->id) ?></td>
                <td><?= h($entregasfaqs->projetosprodutosentrega_id) ?></td>
                <td><?= h($entregasfaqs->sistemasfaq_id) ?></td>
                <td><?= h($entregasfaqs->descricao) ?></td>
                <td><?= h($entregasfaqs->created) ?></td>
                <td><?= h($entregasfaqs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entregasfaqs', 'action' => 'view', $entregasfaqs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entregasfaqs', 'action' => 'edit', $entregasfaqs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entregasfaqs', 'action' => 'delete', $entregasfaqs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregasfaqs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>



</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
