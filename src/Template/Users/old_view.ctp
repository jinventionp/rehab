<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts Customers'), ['controller' => 'ContractsCustomers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contracts Customer'), ['controller' => 'ContractsCustomers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coupons Customers'), ['controller' => 'CouponsCustomers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupons Customer'), ['controller' => 'CouponsCustomers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $user->has('profile') ? $this->Html->link($user->profile->name, ['controller' => 'Profiles', 'action' => 'view', $user->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($user->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movil') ?></th>
            <td><?= h($user->movil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($user->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cards') ?></h4>
        <?php if (!empty($user->cards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Number Card') ?></th>
                <th scope="col"><?= __('Expedition Date') ?></th>
                <th scope="col"><?= __('Token') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->cards as $cards): ?>
            <tr>
                <td><?= h($cards->id) ?></td>
                <td><?= h($cards->user_id) ?></td>
                <td><?= h($cards->name) ?></td>
                <td><?= h($cards->number_card) ?></td>
                <td><?= h($cards->expedition_date) ?></td>
                <td><?= h($cards->token) ?></td>
                <td><?= h($cards->created) ?></td>
                <td><?= h($cards->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cards', 'action' => 'view', $cards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cards', 'action' => 'edit', $cards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cards', 'action' => 'delete', $cards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contracts Customers') ?></h4>
        <?php if (!empty($user->contracts_customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col"><?= __('Renew Automatically') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->contracts_customers as $contractsCustomers): ?>
            <tr>
                <td><?= h($contractsCustomers->id) ?></td>
                <td><?= h($contractsCustomers->user_id) ?></td>
                <td><?= h($contractsCustomers->contract_id) ?></td>
                <td><?= h($contractsCustomers->renew_automatically) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractsCustomers', 'action' => 'view', $contractsCustomers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractsCustomers', 'action' => 'edit', $contractsCustomers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractsCustomers', 'action' => 'delete', $contractsCustomers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractsCustomers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coupons Customers') ?></h4>
        <?php if (!empty($user->coupons_customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Coupon Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->coupons_customers as $couponsCustomers): ?>
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
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($user->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Number Payment') ?></th>
                <th scope="col"><?= __('Date Payment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->user_id) ?></td>
                <td><?= h($payments->contract_id) ?></td>
                <td><?= h($payments->product_id) ?></td>
                <td><?= h($payments->name) ?></td>
                <td><?= h($payments->number_payment) ?></td>
                <td><?= h($payments->date_payment) ?></td>
                <td><?= h($payments->created) ?></td>
                <td><?= h($payments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
