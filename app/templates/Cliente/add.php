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
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Add Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('cpf', ['label' => 'CPF', 'class' => 'form-control mb-2']);
                    echo $this->Form->control('email', ['label' => 'E-mail', 'class' => 'form-control mb-2']);
                    echo $this->Form->control('numero', ['label' => 'Número', 'class' => 'form-control mb-2']);
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
    .carro.form legend {
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
