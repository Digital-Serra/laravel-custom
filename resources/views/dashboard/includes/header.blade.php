<div class="row">
    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">
        <ul class="user-info pull-left pull-none-xsm"> <!-- Profile Info -->
            <li class="profile-info dropdown">
                <!-- add class "pull-right" if you want to place this from right -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/dashboard/images/thumb-1@2x.png') }}" alt="" class="img-circle" width="44"/>
                    John Henderson
                </a>
                <ul class="dropdown-menu"> <!-- Reverse Caret -->
                    <li class="caret"></li> <!-- Profile sub-links -->
                    <li>
                        <a href="http://demo.neontheme.com/extra/timeline/">
                            <i class="entypo-user"></i>
                            Edit Profile
                        </a>
                    </li>
                    <li>
                        <a href="http://demo.neontheme.com/mailbox/main/">
                            <i class="entypo-mail"></i>
                            Inbox
                        </a>
                    </li>
                    <li>
                        <a href="http://demo.neontheme.com/extra/calendar/">
                            <i class="entypo-calendar"></i>
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-clipboard"></i>
                            Tasks
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="user-info pull-left pull-right-xs pull-none-xsm"> <!-- Raw Notifications -->
            <li class="notifications dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="entypo-attention"></i>
                    <span class="badge badge-info">6</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="top">
                        <p class="small"><a href="#" class="pull-right">Mark all Read</a>
                            You have <strong>3</strong> new notifications.
                        </p></li>
                    <li>
                        <ul class="dropdown-menu-list scroller">
                            <li class="unread notification-success"><a href="#">
                                    <i class="entypo-user-add pull-right"></i>
                                            <span class="line">
                                                <strong>New user registered</strong>
                                            </span>
                                            <span class="line small">
                                                30 seconds ago
                                            </span>
                                </a>
                            </li>
                            <li class="unread notification-secondary">
                                <a href="#">
                                    <i class="entypo-heart pull-right"></i>
                                            <span class="line">
                                                <strong>Someone special liked this</strong>
                                            </span>
                                            <span class="line small">
                                                2 minutes ago
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="#">
                            View all notifications
                        </a>
                    </li>
                </ul>
            </li> <!-- Message Notifications -->
            <li class="notifications dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="entypo-mail"></i>
                            <span class="badge badge-secondary">
                                10
                            </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <form class="top-dropdown-search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search anything..." name="s"/>
                            </div>
                        </form>
                        <ul class="dropdown-menu-list scroller">
                            <li class="active">
                                <a href="#">
                                            <span class="image pull-right">
                                                <img src="../../assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle"/>
                                            </span>
                                            <span class="line">
                                                <strong>
                                                    Luc Chartier
                                                </strong>
                                                - yesterday
                                            </span>
                                            <span class="line desc small">
                                                This ain’t our first item, it is the best of the rest.
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external">
                        <a href="http://demo.neontheme.com/mailbox/main/">
                            All Messages
                        </a>
                    </li>
                </ul>
            </li> <!-- Task Notifications -->
            <li class="notifications dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="entypo-list"></i>
                            <span class="badge badge-warning">
                                1
                            </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="top"><p>You have 6 pending tasks</p></li>
                    <li>
                        <ul class="dropdown-menu-list scroller">
                            <li><a href="#"> <span class="task"> <span class="desc">Procurement</span> <span
                                                class="percent">27%</span> </span> <span class="progress"> <span
                                                style="width: 27%;"
                                                class="progress-bar progress-bar-success"> <span
                                                    class="sr-only">27% Complete</span> </span> </span> </a>
                            </li>
                            <li><a href="#"> <span class="task"> <span
                                                class="desc">App Development</span> <span
                                                class="percent">83%</span> </span>
                                        <span class="progress progress-striped"> <span style="width: 83%;"
                                                                                       class="progress-bar progress-bar-danger"> <span
                                                        class="sr-only">83% Complete</span> </span> </span> </a></li>
                            <li><a href="#"> <span class="task"> <span
                                                class="desc">HTML Slicing</span> <span
                                                class="percent">91%</span> </span>
                                        <span class="progress"> <span style="width: 91%;"
                                                                      class="progress-bar progress-bar-success"> <span
                                                        class="sr-only">91% Complete</span> </span> </span> </a></li>
                            <li><a href="#"> <span class="task"> <span
                                                class="desc">Database Repair</span> <span
                                                class="percent">12%</span> </span>
                                        <span class="progress progress-striped"> <span style="width: 12%;"
                                                                                       class="progress-bar progress-bar-warning"> <span
                                                        class="sr-only">12% Complete</span> </span> </span> </a></li>
                            <li><a href="#"> <span class="task"> <span class="desc">Backup Create Progress</span> <span
                                                class="percent">54%</span> </span> <span
                                            class="progress progress-striped"> <span
                                                style="width: 54%;"
                                                class="progress-bar progress-bar-info"> <span
                                                    class="sr-only">54% Complete</span> </span> </span> </a>
                            </li>
                            <li><a href="#"> <span class="task"> <span
                                                class="desc">Upgrade Progress</span> <span
                                                class="percent">17%</span> </span> <span
                                            class="progress progress-striped"> <span
                                                style="width: 17%;" class="progress-bar progress-bar-important"> <span
                                                    class="sr-only">17% Complete</span> </span> </span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="external"><a href="#">See all tasks</a></li>
                </ul>
            </li>
        </ul>
    </div> <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        <ul class="list-inline links-list pull-right">
            <li class="dropdown language-selector">
                Language: &nbsp;
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    <img src="{{ asset('assets/dashboard/images/flags/flag-uk.png') }}" width="16" height="16"/> </a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#"> <img src="{{ asset('assets/dashboard/images/flags/flag-de.png') }}" width="16"
                                          height="16"/> <span>Deutsch</span> </a></li>
                    <li class="active"><a href="#"> <img src="{{ asset('assets/dashboard/images/flags/flag-uk.png') }}"
                                                         width="16" height="16"/> <span>English</span>
                        </a></li>
                    <li><a href="#"> <img src="{{ asset('assets/dashboard/images/flags/flag-fr.png') }}" width="16"
                                          height="16"/> <span>François</span> </a></li>
                    <li><a href="#"> <img src="{{ asset('assets/dashboard/images/flags/flag-al.png') }}" width="16"
                                          height="16"/> <span>Shqip</span> </a></li>
                    <li><a href="#"> <img src="{{ asset('assets/dashboard/images/flags/flag-es.png') }}" width="16"
                                          height="16"/> <span>Español</span> </a></li>
                </ul>
            </li>
            <li class="sep"></li>
            <li><a href="#" data-toggle="chat" data-collapse-sidebar="1"> <i class="entypo-chat"></i>
                    Chat
                    <span class="badge badge-success chat-notifications-badge is-hidden">0</span> </a></li>
            <li class="sep"></li>
            <li><a href="http://demo.neontheme.com/extra/login/">
                    Log Out <i class="entypo-logout right"></i> </a></li>
        </ul>
    </div>
</div>