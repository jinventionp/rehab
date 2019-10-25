<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon $coupon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coupon'), ['action' => 'edit', $coupon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coupon'), ['action' => 'delete', $coupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coupons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coupons Customers'), ['controller' => 'CouponsCustomers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupons Customer'), ['controller' => 'CouponsCustomers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['controller' => 'CouponsPackages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupons Package'), ['controller' => 'CouponsPackages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coupons view large-9 medium-8 columns content">
    <h3><?= h($coupon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coupon Code') ?></th>
            <td><?= h($coupon->coupon_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coupon->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coupon Value') ?></th>
            <td><?= $this->Number->format($coupon->coupon_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Limit Use Per Coupon') ?></th>
            <td><?= $this->Number->format($coupon->Limit_use_per_coupon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Limit Use Per Package') ?></th>
            <td><?= $this->Number->format($coupon->Limit_use_per_package) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Limit Use Per Customer') ?></th>
            <td><?= $this->Number->format($coupon->Limit_use_per_customer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration Date') ?></th>
            <td><?= h($coupon->expiration_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($coupon->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($coupon->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($coupon->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coupons Customers') ?></h4>
        <?php if (!empty($coupon->coupons_customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Coupon Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($coupon->coupons_customers as $couponsCustomers): ?>
            <tr>
                <td><?= h($couponsCustomers->id) ?></td>
                <td><?= h($couponsCustomers->coupon_id) ?></td>
                <td><?= h($couponsCustomers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CouponsCustomers', 'action' => 'view', $couponsCustomers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CouponsCustomers', 'action' => 'edit', $couponsCustomers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CouponsCustomers', 'action' => 'delete', $couponsCustomers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couponsCustomers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coupons Packages') ?></h4>
        <?php if (!empty($coupon->coupons_packages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Coupon Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($coupon->coupons_packages as $couponsPackages): ?>
            <tr>
                <td><?= h($couponsPackages->id) ?></td>
                <td><?= h($couponsPackages->coupon_id) ?></td>
                <td><?= h($couponsPackages->contract_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CouponsPackages', 'action' => 'view', $couponsPackages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CouponsPackages', 'action' => 'edit', $couponsPackages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CouponsPackages', 'action' => 'delete', $couponsPackages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couponsPackages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
