<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" style="height: 80px" src="img/log.png"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="dashboard_2.html#">
                        <span class="block m-t-xs font-bold font-weight-bold">Maxsom +</span>
<!--                        <span class="text-muted text-xs block">App Controller </span>-->
                        <span class="text-muted text-xs block"><?= $fullname;  ?> </span>
                    </a>

                </div>
                <div class="logo-element">
                    MSR
                </div>
            </li>
            <li class="active">
                <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> <span
                            class="fa arrow"></span></a>
            </li>

            <li>
                <a href="host_patients.php"><i class="fa fa-users"></i> <span class="nav-label">Patients Profiles </span></a>
            </li>


            <li>
                <a href="host_outpatient"><i class="fa fa-user-o"></i> <span class="nav-label"> Patient Queue</span></a>
            </li>


            <li>
                <a href="ward_data"><i class="fa fa-user-circle"></i> <span class="nav-label">Dispensary </span></a>
            </li>


            <li>
                <a href="inventory_setups"><i class="fa fa-check-circle-o"></i> <span class="nav-label">Inventory </span></a>
            </li>


            <li>
                <a href="lab_accout.php"><i class="fa fa-money"></i> <span class="nav-label"> Finances </span></a>

            </li>

            <li>
                <a href="clients.php"><i class="fa fa-send-o"></i> <span class="nav-label">Messages</span></a>
            </li>

            <li>
                <a href="lab_quee.php"><i class="fa fa-user-circle-o"></i> <span class="nav-label">My Profile</span></a>
            </li>

            <li class="">
                <a href="inc/logout.php"><i class="fa fa-power-off"></i> <span class="nav-label">Logout</span> </a>
            </li>

        </ul>

    </div>
</nav>