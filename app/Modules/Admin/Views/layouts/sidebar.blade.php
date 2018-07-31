<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{!! route('admin.dashboard') !!}"><i class="icon-speedometer"></i> Bảng Điều Khiển </a>
            </li>

            <li class="nav-item">
                <a href="{!! route('admin.skill.index') !!}" class="nav-link active"><i class="icon-drawer"></i> Skill</a>
            </li>

            <li class="nav-item">
                <a href="{!! route('admin.projecttype.index') !!}" class="nav-link active"><i class="icon-drawer"></i> Project Type</a>
            </li>
            <li class="nav-item">
                <a href="{!! route('admin.project.index') !!}" class="nav-link active"><i class="icon-drawer"></i> Project</a>
            </li>

            <li class="divider"></li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>