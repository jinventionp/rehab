<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecontrac $typecontrac
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typecontrac'), ['action' => 'edit', $typecontrac->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typecontrac'), ['action' => 'delete', $typecontrac->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecontrac->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typecontracs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typecontrac'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typecontracs view large-9 medium-8 columns content">
    <h3><?= h($typecontrac->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typecontrac->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typecontrac->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typecontrac->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typecontrac->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($typecontrac->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contracts') ?></h4>
        <?php if (!empty($typecontrac->contracts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Typecontrac Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Number Classes') ?></th>
                <th scope="col"><?= __('Customer Can Cancel') ?></th>
                <th scope="col"><?= __('Contract Frequency') ?></th>
                <th scope="col"><?= __('Number Contract Frecuency') ?></th>
                <th scope="col"><?= __('Time To Recur') ?></th>
                <th scope="col"><?= __('Payment Recur') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typecontrac->contracts as $contracts): ?>
            <tr>
                <td><?= h($contracts->id) ?></td>
                <td><?= h($contracts->typecontrac_id) ?></td>
                <td><?= h($contracts->name) ?></td>
                <td><?= h($contracts->price) ?></td>
                <td><?= h($contracts->number_classes) ?></td>
                <td><?= h($contracts->customer_can_cancel) ?></td>
                <td><?= h($contracts->contract frequency) ?></td>
                <td><?= h($contracts->number_contract_frecuency) ?></td>
                <td><?= h($contracts->time_to_recur) ?></td>
                <td><?= h($contracts->payment_recur) ?></td>
                <td><?= h($contracts->active) ?></td>
                <td><?= h($contracts->description) ?></td>
                <td><?= h($contracts->created) ?></td>
                <td><?= h($contracts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contracts', 'action' => 'view', $contracts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contracts', 'action' => 'edit', $contracts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contracts', 'action' => 'delete', $contracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contracts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
