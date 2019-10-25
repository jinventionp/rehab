<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CouponsCustomer $couponsCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coupons Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Coupons'), ['controller' => 'Coupons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupon'), ['controller' => 'Coupons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="couponsCustomers form large-9 medium-8 columns content">
    <?= $this->Form->create($couponsCustomer) ?>
    <fieldset>
        <legend><?= __('Add Coupons Customer') ?></legend>
        <?php
            echo $this->Form->control('coupon_id', ['options' => $coupons]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
