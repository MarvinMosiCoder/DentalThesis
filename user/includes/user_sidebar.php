<?php include('check.php'); ?>
<?php include('header.php'); ?>
<div class="site-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <header>
                <a href="">
                    <span class="fa fa-hospital"></span>
                </a><h3>RTN Clinic</h3>
            </header>
            <nav class="menu">
                <ul>
                    <li><a href="dashboard.php" class="active menu-item">
                            <span class="menu-icon far fa-calendar"></span>
                            <span class="menu-label"> Dashboard </span>
                        </a>
                    </li>
                    <li><a href="appointment.php" class="menu-item">
                            <span class="menu-icon fa fa-dumbbell"></i></span>
                            <span class="menu-label"> Appoinment </span>
                        </a>
                    </li>
                    <li><a href="" class="menu-item">
                            <span class="menu-icon fas fa-bolt"></span>
                            <span class="menu-label"> Teachers </span>
                        </a>
                    </li>
                    <li><a href="" class="menu-item">
                            <span class="menu-icon fa fa-utensils"></span>
                            <span class="menu-label"> Sections </span>
                        </a>
                    </li>
                    <li><a href="" class="menu-item">
                            <span class="menu-icon far fa-dot-circle"></span>
                            <span class="menu-label"> Programs </span>
                        </a>
                    </li>
                    <li><a href="" class="menu-item">
                            <span class="menu-icon far fa-comment-alt"></span>
                            <span class="menu-label"> Messages </span>
                        </a>
                    </li>
                    <li><a href="" class="menu-item">
                            <span class="menu-icon far fa-user"></span>
                            <span class="menu-label"> Profile </span>
                        </a>
                    </li>
                    <li><a href="logout.php" class="menu-item">
                            <span class="menu-icon far fa-user"></span>
                            <span class="menu-label"> Logout </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- End Sidebar -->

        <?php include('script.php'); ?>