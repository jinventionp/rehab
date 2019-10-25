<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon $coupon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coupon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coupons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coupons Customers'), ['controller' => 'CouponsCustomers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupons Customer'), ['controller' => 'CouponsCustomers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['controller' => 'CouponsPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupons Package'), ['controller' => 'CouponsPackages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coupons form large-9 medium-8 columns content">
    <?= $this->Form->create($coupon) ?>
    <fieldset>
        <legend><?= __('Edit Coupon') ?></legend>
        <?php
            echo $this->Form->control('coupon_code');
            echo $this->Form->control('description');
            echo $this->Form->control('coupon_value');
            echo $this->Form->control('expiration_date', ['empty' => true]);
            echo $this->Form->control('Limit_use_per_coupon');
            echo $this->Form->control('Limit_use_per_package');
            echo $this->Form->control('Limit_use_per_customer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
