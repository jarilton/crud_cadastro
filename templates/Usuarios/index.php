<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="usuarios index content">
    <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('cep') ?></th>
                    <th><?= $this->Paginator->sort('rua') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->nome) ?></td>
                    <td><?= h($usuario->email) ?></td>
                    <td><?= h($usuario->telefone) ?></td>
                    <td><?= h($usuario->cep) ?></td>
                    <td><?= h($usuario->rua) ?></td>
                    <td><?= h($usuario->numero) ?></td>
                    <td><?= h($usuario->bairro) ?></td>
                    <td><?= h($usuario->cidade) ?></td>
                    <td><?= h($usuario->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $usuario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $usuario->id], ['confirm' => __('Tem certeza que quer apagar ?', $usuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
