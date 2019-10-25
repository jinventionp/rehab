<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CouponsPackage $couponsPackage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coupons Package'), ['action' => 'edit', $couponsPackage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coupons Package'), ['action' => 'delete', $couponsPackage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couponsPackage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupons Package'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coupons'), ['controller' => 'Coupons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupon'), ['controller' => 'Coupons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="couponsPackages view large-9 medium-8 columns content">
    <h3><?= h($couponsPackage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coupon') ?></th>
            <td><?= $couponsPackage->has('coupon') ? $this->Html->link($couponsPackage->coupon->id, ['controller' => 'Coupons', 'action' => 'view', $couponsPackage->coupon->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract') ?></th>
            <td><?= $couponsPackage->has('contract') ? $this->Html->link($couponsPackage->contract->name, ['controller' => 'Contracts', 'action' => 'view', $couponsPackage->contract->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($couponsPackage->id) ?></td>
        </tr>
    </table>
</div>
