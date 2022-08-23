<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">Menu</li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('hr_dahsboard.index') }}" data-dropdown-toggle="false">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">
                                Dashboard
                            </span>
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('employee.index') }}" data-dropdown-toggle="false">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">
                                Employees
                            </span>
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Configuration</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="site-menu-scroll-wrap is-list">
                                <div>
                                    <div>
                                        <ul class="site-menu-sub site-menu-normal-list">
                                            <li class="site-menu-item">
                                                <a href="{{ route('department.index') }}">
                                                    <span class="site-menu-title">Department</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="{{ route('role.index') }}">
                                                    <span class="site-menu-title">Role</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="{{ route('permission.index') }}">
                                                    <span class="site-menu-title">Permission</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>
