<template>
    <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            </ul>
                        </li>
                        <li>
                            <a href="/demographics">
                                <i class="fas fa-chart-bar"></i>Demographic Data</a>
                        </li>
                        <li>
                            <a href="/certireq">
                                <i class="fas fa-table"></i>Certificate Request</a>
                        </li>
                        <li>
                            <a href="/residentinfo">
                                <i class="far fa-check-square"></i>Resident Information</a>
                        </li>
                        <li>
                            <a href="/brgycertificate">
                                <i class="fas fa-calendar-alt"></i>Barangay Certificates</a>
                        </li>
                        <li>
                            <a href="/announcement">
                                <i class="fas fa-map-marker-alt"></i>Announcement</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <!-- <img src="images/icon/logo.png" alt="Cool Admin" /> -->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                                           
                        </li>
                        <li>
                            <a href="/demographics">
                                <i class="fas fa-chart-bar"></i>Demograpic Data</a>
                        </li>
                        <li>
                            <a href="/certireq">
                                <i class="fas fa-table"></i>Certificate Request</a>
                        </li>
                        <li>
                            <a href="/residentinfo">
                                <i class="far fa-check-square"></i>Resident Information</a>
                        </li>
                        <li>
                            <a href="/brgycertificate">
                                <i class="fas fa-calendar-alt"></i>Barangay Certificates</a>
                        </li>
                        <li>
                            <a href="/announcement">
                                <i class="fas fa-map-marker-alt"></i>Announcement</a>
                        </li>
                            </ul>
                </nav>
            </div>
        </aside>
</template>