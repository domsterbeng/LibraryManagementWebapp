<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <?php
                            $admid=$_SESSION['fosaid'];
                            $ret=mysqli_query($con,"select AdminName from tbladmin where ID='$admid'");
                            $row=mysqli_fetch_array($ret);
                            $name=$row['AdminName'];
                        ?>
                        <span class="text-muted text-xs block"><?php echo $name; ?></span>
                    </a>
                </div>
            </li>         
            <li>
                <a href="list.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
            </li>   
            <li>
                <a href="addbook.php"><i class="fa fa-edit"></i> <span class="nav-label">Add Book</span> <span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="search.php"><i class="fa fa-th-large"></i> <span class="nav-label">Search Book</span> <span class="fa arrow"></span></a>
            </li>
        </ul>
    </div>
</nav>