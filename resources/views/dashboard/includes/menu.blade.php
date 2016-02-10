<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env"> <!-- logo -->
            <div class="logo">
                <a href="{{ route('dashboard.index') }}">
                    <img src="{{ asset('assets/dashboard/images/logo@2x.png') }}" width="120" alt=""/>
                </a>
            </div> <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="active opened active has-sub"><a href="{{ asset('dashboard.index') }}">
                    <i class="entypo-gauge"></i>
                        <span class="title">
                            Dashboard
                        </span>
                </a>
                <ul class="visible">
                    <li class="active">
                        <a href="{{ asset('dashboard.index') }}">
                            <span class="title">Dashboard 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://demo.neontheme.com/dashboard/main-2/">
                            <span class="title">Dashboard 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://demo.neontheme.com/dashboard/main-3/">
                                <span class="title">
                                    Dashboard 3
                                </span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="http://demo.neontheme.com/skins/black/">
                                <span class="title">
                                    Skins
                                </span>
                        </a>
                        <ul>
                            <li>
                                <a href="http://demo.neontheme.com/skins/facebook/">
                                        <span class="title">
                                            Facebook Skin
                                        </span>
                                        <span class="badge badge-secondary badge-roundless">
                                            New
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://demo.neontheme.com/dashboard/highlights/">
                                <span class="title">
                                    What's New
                                </span>
                                <span class="badge badge-success badge-roundless">
                                    v2.0
                                </span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>