<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreqsref $projetosprodutosreqsref
 */
?>

<div class="projetosprodutosreqsrefs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosreqsref) ?>
    <fieldset>
        <legend><?= __('Add Projetosprodutosreqsref') ?></legend>
        <?php
            echo '<div class="form-row">';
            echo '<div class="col">';
            echo $this->Form->control('referencia',['class'=> "form-control"]);
             echo '</div>';
            echo '<div class="col">';
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo '</div>';
            echo '</div>';
            echo $this->Form->control('projetosprodutosreq_id', ['options' => $projetosprodutosreqs, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('cancelled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
