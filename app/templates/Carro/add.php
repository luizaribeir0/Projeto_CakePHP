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
            <?= $this->Html->link(__('List Carro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carro form content">
            <?= $this->Form->create($carro) ?>
            <fieldset>
                <legend><?= __('Add Carro') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('marca');
                    echo $this->Form->control('ano');
                    echo $this->Form->control('cor');
                    echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => 'Disponível']);
                    echo $this->Form->hidden('totalmente_pago', ['type' => 'checkbox', 'value' => 0]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
