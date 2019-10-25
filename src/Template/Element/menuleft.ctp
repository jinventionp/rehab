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
                <a href="<?=$this->Url->build(["controller" => "Profiles", "action" => "index"])?>"> <?= __("Profiles")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Roles", "action" => "index"])?>"> <?= __("Roles")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Advertisements", "action" => "index"])?>"> <?= __("Advertisements")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Phones", "action" => "index"])?>"> <?= __("Phones")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Modules", "action" => "index"])?>"> <?= __("Modules")?> </a>
            </li>
            <li>
                <a href="<?=$this->Url->build(["controller" => "Fields", "action" => "index"])?>"> <?= __("Fields")?> </a>
            </li>
        </ul>
    </li>

</ul>