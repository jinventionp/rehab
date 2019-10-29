<?php use Cake\I18n\Time; ?>
<div class="table-responsive">
    <table class="table table-sm mb-0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('typecontract_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
            <th scope="col"><?= $this->Paginator->sort('number_classes') ?></th>
            <th scope="col"><?= $this->Paginator->sort('customer_can_cancel') ?></th>
            <th scope="col"><?= $this->Paginator->sort('contract_frequency') ?></th>
            <th scope="col"><?= $this->Paginator->sort('number_contract_frecuency') ?></th>
            <th scope="col"><?= $this->Paginator->sort('time_to_recur') ?></th>
            <th scope="col"><?= $this->Paginator->sort('payment_recur') ?></th>
            <th scope="col"><?= $this->Paginator->sort('active') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach ($contracts as $contract): ?>
	        <tr>
	            <td><?= $this->Number->format($contract->id) ?></td>
                <td><?= $contract->typecontract->name ?></td>
                <td><?= h($contract->name) ?></td>
                <td><?= h($contract->price) ?></td>
                <td><?= $this->Number->format($contract->number_classes) ?></td>
                <td><?= h($contract->customer_can_cancel) ?></td>
                <td><?= h($contract->contract_frequency) ?></td>
                <td><?= $this->Number->format($contract->number_contract_frecuency) ?></td>
                <td><?= $this->Number->format($contract->time_to_recur) ?></td>
                <td><?= h($contract->payment_recur) ?></td>
                <td><?= h($contract->active) ?></td>
                <td><?= h($contract->created) ?></td>
                <td><?= h($contract->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$contract->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Contracts", "action" => "edit", $contract->id])?>" data-title="<?=__('Edit Contract')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$contract->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "Contracts", "action" => "delete", $contract->id])?>" data-url-action="<?=$this->Url->build(["controller" => "Contracts", "action" => "delete", $contract->id])?>" data-title="<?=__('Delete Contract')?>" data-id="<?=$contract->id?>" data-question='Seguro que desea eliminar el <?=__('Contract')?> <span class="badge bg-soft-primary text-primary"><?=$contract->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $contract->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contract->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>