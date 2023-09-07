<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusfuncional $statusfuncional
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusfuncional->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusfuncional->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['controller' => 'Projetosalocsprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsprofile'), ['controller' => 'Projetosalocsprofiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfinances'), ['controller' => 'Projetosprodutosfinances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfinance'), ['controller' => 'Projetosprodutosfinances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosruns'), ['controller' => 'Projetosprodutosruns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosrun'), ['controller' => 'Projetosprodutosruns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statusfuncionals form large-9 medium-8 columns content">
    <?= $this->Form->create($statusfuncional) ?>
    <fieldset>
        <legend><?= __('Edit Statusfuncional') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
