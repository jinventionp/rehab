<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">            
            <h4 class="page-title"><?= __('Users')?></h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="txtSearch" class="sr-only">Buscar</label>
                            <input type="txtSearch" class="form-control" id="txtSearch" placeholder="Buscar...">
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="cboNumRegister" class="mr-2">Registros</label>
                            <select class="custom-select" id="cboNumRegister">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modalAdd" data-url="<?=$this->Url->build(["controller" => "Users", "action" => "add"])?>" data-title="<?= __('New User')?>" id="openModalAdd"><i class="mdi mdi-plus-circle mr-1"></i> <?= __('New User')?></a>
                    </div>
                </div><!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div id="msgFormActions"></div> 
            <div id="contentList"></div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>