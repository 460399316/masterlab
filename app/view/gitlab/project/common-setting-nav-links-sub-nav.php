
<div class="scrolling-tabs-container sub-nav-scroll">
    <div class="fade-left">
        <i class="fa fa-angle-left"></i>
    </div>
    <div class="fade-right">
        <i class="fa fa-angle-right"></i>
    </div>

    <div class="nav-links sub-nav scrolling-tabs is-initialized">
        <ul class="container-fluid">
            <li class="<? if($sub_nav_active=='basic_info') echo 'active';?>">
                <a title="General" href="<?=$project_root_url?>/settings_profile">
                    <span>基本信息</span>
                </a>
            </li>
            <li class="<? if($sub_nav_active=='issue_type') echo 'active';?>">
                <a title="事项类型" href="<?=$project_root_url?>/settings_issue_type">
                    <span>事项类型</span>
                </a>
            </li>
            <li class="<? if($sub_nav_active=='version') echo 'active';?>">
                <a title="版本" href="<?=$project_root_url?>/settings_version">
                    <span>版本</span>
                </a>
            </li>
            <li class="<? if($sub_nav_active=='module') echo 'active';?>">
                <a title="模块" href="<?=$project_root_url?>/settings_module">
                    <span>模块</span>
                </a>
            </li>
            <li class="<? if($sub_nav_active=='label') echo 'active';?>">
                <a title="标签" href="<?=$project_root_url?>/settings_label">
                    <span>标签</span>
                </a>
            </li>
            <!--li class="<? if($sub_nav_active=='permission') echo 'active';?>">
                <a title="权限" href="<?=$project_root_url?>/settings_permission">
                    <span>权限</span>
                </a>
            </li-->
            <li class="<? if($sub_nav_active=='project_role') echo 'active';?>">
                <a title="项目角色" href="<?=$project_root_url?>/settings_project_role"><span>项目角色</span>
                </a>
            </li>
        </ul>
    </div>
</div>
