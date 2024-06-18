<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carro $carro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carro form content">
            <?= $this->Form->create($carro) ?>
            <fieldset>
                <legend><?= __('Edit Carro') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('marca');
                    echo $this->Form->control('ano');
                    echo $this->Form->control('cor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>