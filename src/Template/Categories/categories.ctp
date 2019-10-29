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
        	<?php foreach ($categories as $category): ?>
	        <tr>
	            <td scope="row"><?= $this->Number->format($category->id) ?></td>
	            <td><?= h($category->name) ?></td>
	            <td><?= h($category->description) ?></td>
                <td><?= h($category->created) ?></td>
                <td><?= h($category->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$category->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Categories", "action" => "edit", $category->id])?>" data-title="<?=__('Edit category')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$category->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "Categories", "action" => "delete", $category->id])?>"  data-title="<?=__('Delete Category')?>" data-id="<?=$category->id?>" data-question='Seguro que desea eliminar la <?=__('Category')?> <span class="badge bg-soft-primary text-primary"><?=$category->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>