<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'btn btn-danger mb-2']
            ) ?>
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Edit Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('cpf', ['class' => 'form-control mb-2', 'label' => 'CPF']);
                    echo $this->Form->control('email', ['class' => 'form-control mb-2', 'label' => 'E-mail']);
                    echo $this->Form->control('numero', ['class' => 'form-control mb-2', 'label' => 'Número']);
                    echo $this->Form->control('devedor', ['type' => 'select', 'options' => [0 => 'Não', 1 => 'Sim'], 'class' => 'form-control mb-2']);
                    echo $this->Form->control('pagou_tudo', ['type' => 'select', 'options' => [0 => 'Não', 1 => 'Sim'], 'class' => 'form-control mb-2']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-bordo mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<style>
    .form {
        width: 700px;
        margin-left: 40px;
    }
    .cliente.form legend {
        color: #800020;
        font-weight: bold;
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #d31546;
    }
    .side-nav .btn {
        color: white;
        font-weight: bold;
        display: block;
        width: 100%;
        text-align: left;
        margin-bottom: 0.5rem;
    }
    .side-nav .btn:hover {
        font-weight: bold;
        color: white;
    }
</style>
