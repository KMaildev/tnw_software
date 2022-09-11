<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">Menu</li>
                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('sale_dashboard.index') }}" data-dropdown-toggle="false">
                            Sale Dashboard
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('sale_appointment.index') }}"
                            data-dropdown-toggle="false">
                            Sales Appointment
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('rent_appointment.index') }}"
                            data-dropdown-toggle="false">
                            Rent Appointment
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                            <span class="site-menu-title">Sales</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="site-menu-scroll-wrap is-list">
                                <div>
                                    <div>
                                        <ul class="site-menu-sub site-menu-normal-list">
                                            <li class="site-menu-item">
                                                <a href="{{ route('sale_lists.index') }}">
                                                    <span class="site-menu-title">Sales</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">
                                                        Sale Contract
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">
                                                        Sales Close / Sold Out
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">Sales Reject</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                            <span class="site-menu-title">Rent</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="site-menu-scroll-wrap is-list">
                                <div>
                                    <div>
                                        <ul class="site-menu-sub site-menu-normal-list">
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">Rent</span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">
                                                        Rent Contract
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">
                                                        Rent Close / Sold Out
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="site-menu-item">
                                                <a href="#">
                                                    <span class="site-menu-title">Rent Reject</span>
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
