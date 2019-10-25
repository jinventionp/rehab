<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CouponsPackage $couponsPackage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $couponsPackage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $couponsPackage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coupons'), ['controller' => 'Coupons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupon'), ['controller' => 'Coupons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="couponsPackages form large-9 medium-8 columns content">
    <?= $this->Form->create($couponsPackage) ?>
    <fieldset>
        <legend><?= __('Edit Coupons Package') ?></legend>
        <?php
            echo $this->Form->control('coupon_id', ['options' => $coupons]);
            echo $this->Form->control('contract_id', ['options' => $contracts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
