<div id="modalDelete" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
            <div class="modal-body">
                <input type="hidden" name="_csrfToken" id="_csrfToken" autocomplete="off" value="<?=$this->request->getParam('_csrfToken')?>">
            	<input type="hidden" name="urlDetele"  id="urlDetele">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnDelete" class="btn btn-danger waves-effect waves-light">Eliminar</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->