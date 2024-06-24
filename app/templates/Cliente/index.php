<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<div class="cliente index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'btn btn-bordo float-right mb-3']) ?>
    <h3 class="mb-4"><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('cpf', 'CPF') ?></th>
                <th><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                <th><?= $this->Paginator->sort('numero', 'Número') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->nome) ?></td>
                    <td><?= h($cliente->cpf) ?></td>
                    <td><?= h($cliente->email) ?></td>
                    <td><?= h($cliente->numero) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id], ['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-warning btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'btn btn-danger btn-sm']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('Primeiro'), ['class' => 'page-link']) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior'), ['class' => 'page-link']) ?>
            <?= $this->Paginator->numbers(['class' => 'page-link']) ?>
            <?= $this->Paginator->next(__('Próximo') . ' >', ['class' => 'page-link']) ?>
            <?= $this->Paginator->last(__('Último') . ' >>', ['class' => 'page-link']) ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter('Página {{page}} de {{pages}}, visualizando {{current}} linha(s) de um total de {{count}}') ?></p>
    </div>
</div>
