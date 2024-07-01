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
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-warning mb-2']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'btn btn-danger mb-2']) ?>
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'btn btn-secondary mb-2']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'btn btn-bordo mb-2']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente view content">
            <h3 class="mb-4"><?= h($cliente->nome) ?></h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= __('CPF') ?></th>
                    <td><?= h($cliente->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('E-mail') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Número') ?></th>
                    <td><?= h($cliente->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Devedor') ?></th>
                    <td><?= $cliente->devedor ? 'Sim' : 'Não' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagou Tudo') ?></th>
                    <td><?= $cliente->pagou_tudo ? 'Sim' : 'Não' ?></td>
                </tr>
            </table>
            <div class="related">
                <h4 class="mb-3"><?= __('Carros') ?></h4>
                <?php if (!empty($cliente->carro)) : ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th><?= __('Nome') ?></th>
                                <th><?= __('Tipo') ?></th>
                                <th><?= __('Marca') ?></th>
                                <th><?= __('Ano') ?></th>
                                <th><?= __('Cor') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cliente->carro as $carro) : ?>
                                <tr>
                                    <td><?= h($carro->nome) ?></td>
                                    <td><?= h($carro->tipo) ?></td>
                                    <td><?= h($carro->marca) ?></td>
                                    <td><?= h($carro->ano) ?></td>
                                    <td><?= h($carro->cor) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Carro', 'action' => 'view', $carro->id], ['class' => 'btn btn-info btn-sm']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Carro', 'action' => 'edit', $carro->id], ['class' => 'btn btn-warning btn-sm']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carro', 'action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id), 'class' => 'btn btn-danger btn-sm']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<style>
    .view {
        width: 800px;
        margin-left: 40px;
    }
    .cliente.view h3 {
        color: #800020;
        font-weight: bold;
    }
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
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
