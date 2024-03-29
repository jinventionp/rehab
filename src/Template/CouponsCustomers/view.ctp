<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CouponsCustomer $couponsCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coupons Customer'), ['action' => 'edit', $couponsCustomer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coupons Customer'), ['action' => 'delete', $couponsCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couponsCustomer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coupons Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupons Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coupons'), ['controller' => 'Coupons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupon'), ['controller' => 'Coupons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="couponsCustomers view large-9 medium-8 columns content">
    <h3><?= h($couponsCustomer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coupon') ?></th>
            <td><?= $couponsCustomer->has('coupon') ? $this->Html->link($couponsCustomer->coupon->id, ['controller' => 'Coupons', 'action' => 'view', $couponsCustomer->coupon->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $couponsCustomer->has('user') ? $this->Html->link($couponsCustomer->user->name, ['controller' => 'Users', 'action' => 'view', $couponsCustomer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($couponsCustomer->id) ?></td>
        </tr>
    </table>
</div>
