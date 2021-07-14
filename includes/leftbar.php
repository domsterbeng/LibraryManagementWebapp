<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <?php
                        $admid=$_SESSION['fosaid'];
                        $ret=mysqli_query($con,"select AdminName from tbladmin where ID='$admid'");
                        $row=mysqli_fetch_array($ret);
                        $name=$row['AdminName'];
                    ?>
                    <div style="margin-top: 10px">
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 50px;"></i>
                    </div>
                    <span class="text-muted text-xs block"><?php echo $name; ?></span>
                </div>
            </li>         
            <li>
                <a href="list.php"><i class="fa fa-th-large"></i> <span class="nav-label">Books</span> <span class="fa arrow"></span></a>
            </li>   
            <li>
                <a href="addbook.php"><i class="fa fa-edit"></i> <span class="nav-label">Add Book</span> <span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="listgenre.php"><i class="fa fa-th-large"></i> <span class="nav-label">Genre</span> <span class="fa arrow"></span></a>
            </li>   
            <li>
                <a href="addgenre.php"><i class="fa fa-edit"></i> <span class="nav-label">Add Genre</span> <span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="search.php"><i class="fa fa-th-large"></i> <span class="nav-label">Search Book</span> <span class="fa arrow"></span></a>
            </li>
        </ul>
    </div>
</nav>