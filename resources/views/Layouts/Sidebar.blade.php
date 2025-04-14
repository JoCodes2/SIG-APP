        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <img src="{{ asset('assets/assets/logogereja.jpeg') }}" alt="Logo" class="img-fluid"
                            width="50" height="50">
                    </span>
                    <span class="text-start app-brand-text fw-bold ms-2"
                        style="color: red; text-shadow: 1px 1px 2px black;">
                        <small>SISTEM</small><br>
                        <small>INFORMASI</small><br>
                        <small>GEREJA</small>
                    </span>

                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard" class="menu-link">
                        <i class="menu-icon fa-solid fa-house"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('member') ? 'active' : '' }}">
                    <a href="/member" class="menu-link">
                        <i class="menu-icon fa-solid fa-user"></i>
                        <div data-i18n="Analytics">Member</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('timetable') ? 'active' : '' }}">
                    <a href="/timetable" class="menu-link">
                        <i class="menu-icon fa-solid fa-calendar-days"></i>
                        <div data-i18n="Analytics">Jadwal</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('galeri') ? 'active' : '' }}">
                    <a href="/galeri" class="menu-link">
                        <i class="menu-icon fa-solid fa-photo-film"></i>
                        <div data-i18n="Analytics">Galeri</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('news') ? 'active' : '' }}">
                    <a href="/news" class="menu-link">
                        <i class="menu-icon fa-solid fa-book"></i>
                        <div data-i18n="Analytics">Berita</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('link') ? 'active' : '' }}">
                    <a href="/link" class="menu-link">
                        <i class="menu-icon fa-solid fa-image"></i>
                        <div data-i18n="Analytics">Media</div>
                    </a>
                </li>


            </ul>
        </aside>
        <!-- / Menu -->
