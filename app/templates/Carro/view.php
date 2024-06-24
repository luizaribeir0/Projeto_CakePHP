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
            <?= $this->Html->link(__('Edit Carro'), ['action' => 'edit', $carro->id], ['class' => 'btn btn-warning mb-2']) ?>
            <?= $this->Form->postLink(__('Delete Carro'), ['action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id), 'class' => 'btn btn-danger mb-2']) ?>
            <?= $this->Html->link(__('List Carro'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2']) ?>
            <?= $this->Html->link(__('New Carro'), ['action' => 'add'], ['class' => 'btn btn-bordo mb-2']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carro view content">
            <h3 class="mb-4"><?= h($carro->nome) ?></h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $carro->hasValue('cliente') ? $this->Html->link($carro->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $carro->cliente->id]) : 'Disponível' ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalmente Pago') ?></th>
                    <td><?= $carro->totalmente_pago ? 'Sim' : 'Não' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($carro->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($carro->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($carro->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($carro->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= $carro->ano ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<style>
    .view {
        width: 700px;
        margin-left: 40px;
    }
    .carro.view h3 {
        color: #800020;
        font-weight: bold;
    }
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
    }
    .pagination .page-link {
        color: #800020;
    }
    .pagination .page-link:hover {
        color: #5a0015;
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
