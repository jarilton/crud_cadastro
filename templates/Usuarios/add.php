<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Adicionar Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('cep');
                    echo $this->Form->control('rua');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php echo $this->Html->script('buscaCep') ?>