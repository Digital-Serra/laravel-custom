<div class="row">
    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">
        <ul class="user-info pull-left pull-none-xsm"> <!-- Profile Info -->
            <li class="profile-info dropdown">
                <!-- add class "pull-right" if you want to place this from right -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="https://image.freepik.com/free-icon/male-user-shadow_318-34042.png" alt="" class="img-circle" width="44"/>
                    {{ $user }}
                </a>
                <ul class="dropdown-menu"> <!-- Reverse Caret -->
                    <li class="caret"></li> <!-- Profile sub-links -->
                    <li>
                        <a href="http://demo.neontheme.com/extra/timeline/">
                            <i class="entypo-user"></i>
                            Editar Perfil
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="user-info pull-left pull-right-xs pull-none-xsm"> <!-- Raw Notifications -->
            <li class="notifications dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="entypo-mail"></i>
                    <span class="badge badge-secondary">6</span>
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
        </ul>
    </div> <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        <ul class="list-inline links-list pull-right">
            <!-- <li class="dropdown language-selector">
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
            <li class="sep"></li>-->
            <li><a href="{{ route('auth.logout') }}">
                    Sair<i class="entypo-logout right"></i> </a></li>
        </ul>
    </div>
</div>