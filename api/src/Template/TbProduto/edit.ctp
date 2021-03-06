<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbProduto->cd_produto],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbProduto->cd_produto)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Produto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbProduto form large-9 medium-8 columns content">
    <?= $this->Form->create($tbProduto) ?>
    <fieldset>
        <legend><?= __('Edit Tb Produto') ?></legend>
        <?php
            echo $this->Form->input('cd_categoria');
            echo $this->Form->input('nm_produto');
            echo $this->Form->input('ds_produto');
            echo $this->Form->input('qt_produto');
            echo $this->Form->input('cd_doacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
