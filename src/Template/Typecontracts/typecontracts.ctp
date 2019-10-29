<div class="table-responsive">
    <table class="table table-sm mb-0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('description') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach ($typecontracts as $typecontract): ?>
	        <tr>
	            <td scope="row"><?= $this->Number->format($typecontract->id) ?></td>
	            <td><?= h($typecontract->name) ?></td>
	            <td><?= h($typecontract->description) ?></td>
                <td><?= h($typecontract->created) ?></td>
                <td><?= h($typecontract->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$typecontract->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Typecontracts", "action" => "edit", $typecontract->id])?>" data-title="<?=__('Edit Typecontract')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$typecontract->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "Typecontracts", "action" => "delete", $typecontract->id])?>" data-url-action="<?=$this->Url->build(["controller" => "Typecontracts", "action" => "delete", $typecontract->id])?>" data-title="<?=__('Delete Typecontract')?>" data-id="<?=$typecontract->id?>" data-question='Seguro que desea eliminar el <?=__('Typecontract')?> <span class="badge bg-soft-primary text-primary"><?=$typecontract->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $typecontract->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typecontract->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typecontract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecontract->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>