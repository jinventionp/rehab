<div class="table-responsive">
    <table class="table table-sm mb-0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
            <th scope="col"><?= $this->Paginator->sort('description') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach ($products as $product): ?>
	        <tr>
	            <td scope="row"><?= $this->Number->format($product->id) ?></td>
	            <td><?= h($product->name) ?></td>
                <td><?= h($product->price) ?></td>
	            <td><?= h($product->description) ?></td>
                <td><?= h($product->created) ?></td>
                <td><?= h($product->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$product->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Products", "action" => "edit", $product->id])?>" data-title="<?=__('Edit Product')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$product->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "products", "action" => "delete", $product->id])?>" data-url-action="<?=$this->Url->build(["controller" => "Products", "action" => "delete", $product->id])?>" data-title="<?=__('Delete product')?>" data-id="<?=$product->id?>" data-question='Seguro que desea eliminar el <?=__('Product')?> <span class="badge bg-soft-primary text-primary"><?=$product->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>