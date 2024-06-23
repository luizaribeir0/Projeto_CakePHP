<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carro> $carros
 */
?>
<div class="carro index content">
    <?= $this->Html->link(__('New Carro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carro') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carros as $carro): ?>
                <tr>
                    <td><?= $this->Number->format($carro->id) ?></td>
                    <td><?= h($carro->nome) ?></td>
                    <td><?= h($carro->tipo) ?></td>
                    <td><?= $this->Number->format($carro->ano) ?></td>
                    <td><?= $carro->hasValue('cliente') ? $this->Html->link($carro->cliente->id, ['controller' => 'Cliente', 'action' => 'view', $carro->cliente->id]) : 'Disponível' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}, visualizando {{current}} linha(s) de um total de {{count}}') ?></p>
    </div>
</div>
