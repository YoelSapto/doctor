<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li
                class="{{ request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'active' : '' }}">
                <a href="index.html"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class="navigation-header"><span><b>Management Access</b></span><i class="la la-ellipsis-h"
                    data-toggle="tooltip" data-placement="right" data-original-title="Pages"></i>
            </li>
            <li class="nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title"
                        data-i18n="Project">Management</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('backsite.permission.index') }}"><i></i><span
                                data-i18n="Project Summary">Permission</span></a>
                    </li>
                    <li><a class="menu-item" href="{{ route('backsite.role.index') }}"><i></i><span
                                data-i18n="Project Summary">Role</span></a>
                    </li>
                    <li><a class="menu-item" href="{{ route('backsite.typeuser.index') }}"><i></i><span
                                data-i18n="Project Task"> Type User</span></a>
                    </li>
                    <li><a class="menu-item" href="project-bugs.html"><i></i><span data-i18n="Project Bugs">Project
                                Bugs</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{ route('backsite.typeuser.index') }}"><i class="la la-share-alt"></i><span
                        class="menu-title" data-i18n="Social Feed">Type User</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('backsite.permission.index') }}"><i class="la la-share-alt"></i><span
                        class="menu-title" data-i18n="Social Feed">Permission</span></a>
            </li>
            <li class="nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title"
                        data-i18n="Project">Project</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="project-summary.html"><i></i><span
                                data-i18n="Project Summary">Project Summary</span></a>
                    </li>
                    <li><a class="menu-item" href="project-tasks.html"><i></i><span data-i18n="Project Task">Project
                                Task</span></a>
                    </li>
                    <li><a class="menu-item" href="project-bugs.html"><i></i><span data-i18n="Project Bugs">Project
                                Bugs</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title"
                        data-i18n="Calendars">Calendars</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"><i></i><span data-i18n="Full Calendar">Full Calendar</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="full-calender-basic.html"><i></i><span
                                        data-i18n="Basic">Basic</span></a>
                            </li>
                            <li><a class="menu-item" href="full-calender-events.html"><i></i><span
                                        data-i18n="Events">Events</span></a>
                            </li>
                            <li><a class="menu-item" href="full-calender-advance.html"><i></i><span
                                        data-i18n="Advance">Advance</span></a>
                            </li>
                            <li><a class="menu-item" href="full-calender-extra.html"><i></i><span
                                        data-i18n="Extra">Extra</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="calendars-clndr.html"><i></i><span data-i18n="CLNDR">CLNDR</span></a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header"><span>Master Data</span><i class="la la-ellipsis-h" data-toggle="tooltip"
                    data-placement="right" data-original-title="Pages"></i>
            </li>
            <li class="nav-item"><a href="news-feed.html"><i class="la la-newspaper-o"></i><span class="menu-title"
                        data-i18n="News Feed">News Feed</span></a>
            </li>
            <li class="nav-item"><a href="social-feed.html"><i class="la la-share-alt"></i><span class="menu-title"
                        data-i18n="Social Feed">Social Feed</span></a>
            </li>
            <li class="navigation-header"><span>Charts &amp; Maps</span><i class="la la-ellipsis-h"
                    data-toggle="tooltip" data-placement="right" data-original-title="Charts &amp; Maps"></i>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
