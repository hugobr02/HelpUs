<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tbImgProduto->cd_img],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tbImgProduto->cd_img)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tb Img Produto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbImgProduto form large-9 medium-8 columns content">
    <?= $this->Form->create($tbImgProduto) ?>
    <fieldset>
        <legend><?= __('Edit Tb Img Produto') ?></legend>
        <?php
            echo $this->Form->input('nm_endereco');
            echo $this->Form->input('nm_extensao');
            echo $this->Form->input('cd_produto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
