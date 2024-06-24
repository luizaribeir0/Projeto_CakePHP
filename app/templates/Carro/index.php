<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carro> $carros
 */
?>
<div class="carro index content">
    <?= $this->Html->link(__('New Carro'), ['action' => 'add'], ['class' => 'btn btn-bordo float-right mb-3']) ?>
    <h3 class="mb-4"><?= __('Carros') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('ano') ?></th>
                <th><?= $this->Paginator->sort('cliente_id', 'Cliente') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($carros as $carro): ?>
                <tr>
                    <td><?= $this->Number->format($carro->id) ?></td>
                    <td><?= h($carro->nome) ?></td>
                    <td><?= h($carro->tipo) ?></td>
                    <td><?= $carro->ano ?></td>
                    <td><?= $carro->hasValue('cliente') ? $this->Html->link($carro->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $carro->cliente->id]) : 'Disponível' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $carro->id], ['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carro->id], ['class' => 'btn btn-warning btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id), 'class' => 'btn btn-danger btn-sm']) ?>
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
