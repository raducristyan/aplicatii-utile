<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="./assets/images/users/1.jpg" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Nume utilizator <span class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="fal fa-user"></i> Profile</a>
                    <a href="#" class="dropdown-item"><i class="fal fa-envelope"></i> Mesaje</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="fal fa-cog"></i> Setări cont</a>
                    <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item logout"><i class="fal fa-power-off"></i> Ieșire</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">CONT</li>
                <li class="{{ Route::is('/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}" aria-expanded="false"><i class="fal fa-cogs"></i><span class="hide-menu"> Dashboard</span></a>
                </li>
                <li class="{{ Route::is('/apps') ? 'active' : '' }}">
                    <a href="{{ url('/apps') }}" aria-expanded="false"><i class="fal fa-bullseye"></i><span class="hide-menu"> Aplicații</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="fal fa-cog"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="fal fa-envelope"></i></a>
        <!-- item-->
        <a href="" class="link logout" data-toggle="tooltip" title="Logout"><i class="fal fa-power-off"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->