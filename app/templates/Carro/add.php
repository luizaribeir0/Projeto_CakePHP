<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carro $carro
 * @var \Cake\Collection\CollectionInterface|string[] $clientes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Carro'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carro form content">
            <?= $this->Form->create($carro) ?>
            <fieldset>
                <legend><?= __('Add Carro') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('tipo', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('marca', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('ano', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('cor', ['class' => 'form-control mb-2']);
                    echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => 'Disponível', 'class' => 'form-control mb-2']);
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
