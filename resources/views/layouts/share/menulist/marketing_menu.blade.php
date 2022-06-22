<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">Menu</li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('marketing_dahsboard.index') }}"
                            data-dropdown-toggle="false">
                            <span class="site-menu-title">
                                Dashboard
                            </span>
                        </a>
                    </li>


                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="{{ route('marketing_team.index') }}"
                            data-dropdown-toggle="false">
                            <span class="site-menu-title">
                                Makerting Team
                            </span>
                        </a>
                    </li>


                    <li class="dropdown site-menu-item has-sub">
                        <a href="{{ route('follow_up.index') }}">
                            Follow Up Report
                            <span class="badge badge_noti_count">
                                {{ $follow_up_total ?? 0 }}
                            </span>
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                            <span class="site-menu-title">Report</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="site-menu-scroll-wrap is-list">
                                <div>
                                    <div>
                                        <ul class="site-menu-sub site-menu-normal-list">
                                            <li class="site-menu-item">
                                                <a href="{{ route('marketing_report.index') }}">
                                                    <span class="site-menu-title">
                                                        Marketing Report
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="site-menu-item">
                                                <a href="{{ route('oncall_report.index') }}">
                                                    <span class="site-menu-title">
                                                        Oncall Report
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a href="{{ route('reject.index') }}">
                            Reject
                        </a>
                    </li>

                    <li class="dropdown site-menu-item has-sub">
                        <a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
                            <span class="site-menu-title">Configuration</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="site-menu-scroll-wrap is-list">
                                <div>
                                    <div>
                                        <ul class="site-menu-sub site-menu-normal-list">
                                            <li class="site-menu-item">
                                                <a href="{{ route('interest_rate.index') }}">
                                                    <span class="site-menu-title">
                                                        Interest Rate
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="site-menu-item">
                                                <a href="{{ route('property_type.index') }}">
                                                    <span class="site-menu-title">
                                                        Property Type
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="site-menu-item">
                                                <a href="{{ route('region.index') }}">
                                                    <span class="site-menu-title">
                                                        Region
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="site-menu-item">
                                                <a href="{{ route('township.index') }}">
                                                    <span class="site-menu-title">
                                                        Township
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="site-menu-item">
                                                <a href="{{ route('ward.index') }}">
                                                    <span class="site-menu-title">
                                                        Ward
                                                    </span>
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
