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
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente view content">
            <h3>Cliente</h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cliente->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($cliente->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
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
                <h4><?= __('Carros') ?></h4>
                <?php if (!empty($cliente->carro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Marca') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th><?= __('Cor') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->carro as $carro) : ?>
                        <tr>
                            <td><?= h($carro->nome) ?></td>
                            <td><?= h($carro->tipo) ?></td>
                            <td><?= h($carro->marca) ?></td>
                            <td><?= h($carro->ano) ?></td>
                            <td><?= h($carro->cor) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Carro', 'action' => 'view', $carro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Carro', 'action' => 'edit', $carro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Carro', 'action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
