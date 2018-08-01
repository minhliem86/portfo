<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{!! route('admin.dashboard') !!}"><i class="icon-speedometer"></i> Bảng Điều Khiển </a>
            </li>

            <li class="nav-item">
                <a href="{!! route('admin.skill.index') !!}" class="nav-link {!! LP_lib::setActive(2,'skill') !!}"><i class="icon-drawer"></i> Skills</a>
            </li>
            <li class="nav-item">
                <a href="{!! route('admin.service.index') !!}" class="nav-link {!! LP_lib::setActive(2,'service') !!}"><i class="icon-drawer"></i> Services</a>
            </li>

            <li class="nav-item">
                <a href="{!! route('admin.projecttype.index') !!}" class="nav-link {!! LP_lib::setActive(2,'projecttype') !!}"><i class="icon-drawer"></i> Project Type</a>
            </li>
            <li class="nav-item">
                <a href="{!! route('admin.project.index') !!}" class="nav-link {!! LP_lib::setActive(2,'project') !!}"><i class="icon-drawer"></i> Projects</a>
            </li>

            <li class="divider"></li>

            <li class="nav-item">
                <a href="{!! route('admin.company.index') !!}" class="nav-link {!! LP_lib::setActive(2,'company') !!}"><i class="icon-drawer"></i> Information</a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>