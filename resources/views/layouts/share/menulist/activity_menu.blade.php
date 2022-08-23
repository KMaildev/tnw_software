<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">Menu</li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('activity.index') }}" data-dropdown-toggle="false">
                            <span class="site-menu-title">
                                Login Activity
                            </span>
                        </a>
                    </li>

                    @foreach ($activitieslogs as $activitieslog)
                        <li class="dropdown site-menu-item has-sub">
                            <a data-toggle="dropdown" href="{{ route('activity.show', $activitieslog->log_name) }}"
                                data-dropdown-toggle="false">
                                <span class="site-menu-title">
                                    {{ Str::upper(str_replace('_', ' ', $activitieslog->log_name)) }}
                                </span>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>
