<?php ?>
<ul class="metismenu" id="side-menu">

    <li class="menu-title"> Menu Principal </li>

    <li>
        <a href="<?=$this->Url->build(["controller" => "Users", "action" => "dashboard"])?>">
            <i class="fe-airplay"></i>
            <span class="badge badge-success badge-pill float-right">4</span>
            <span> Dashboards </span>
        </a>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="fe-settings"></i>
            <span> Configuración </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="<?=$this->Url->build(["controller" => "Users", "action" => "index"])?>"> <?= __("Users")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Cards", "action" => "index"])?>"> <?= __("Cards")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Contracts", "action" => "index"])?>"> <?= __("Contracts")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Typecontracts", "action" => "index"])?>"> <?= __("Typecontracts")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Profiles", "action" => "index"])?>"> <?= __("Profiles")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Categories", "action" => "index"])?>"> <?= __("Categories")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Products", "action" => "index"])?>"> <?= __("Products")?> </a>
            </li>
            
            <li>
                <a href="<?=$this->Url->build(["controller" => "Coupons", "action" => "index"])?>"> <?= __("Coupons")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Payments", "action" => "index"])?>"> <?= __("Payments")?> </a>
            </li>
        </ul>
    </li>

</ul>