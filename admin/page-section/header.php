<nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                    <div class="sidebar-toggle-icon" id="sidebarCollapse">
                        sidebar toggle<span></span>
                    </div>
                    <!--/.sidebar toggle icon-->
                    <div class="d-flex flex-grow-1">
                        <ul class="navbar-nav flex-row align-items-center ml-auto">
                            <li class="nav-item dropdown quick-actions">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <i class="typcn typcn-th-large-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="nav-grid-row row">
                                        <a href="index.php" class="icon-menu-item col-4">
                                            <i class="typcn typcn-home d-block"></i>
                                            <span>Home</span>
                                        </a>
                                        <a href="users" class="icon-menu-item col-4">
                                            <i class="typcn typcn-group-outline d-block"></i>
                                            <span>Users</span>
                                        </a>
                                        <a href="logout.php" class="icon-menu-item col-4">
                                            <i class="typcn typcn-power-outline d-block"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--/.dropdown-->
                            <li class="nav-item dropdown notification">

                                <div class="dropdown-menu dropdown-menu-right">
                                    <h6 class="notification-title">Notifications</h6>
                                    <p class="notification-text">You have 3 unread notification</p>
                                    <div class="notification-list">
                                        <div class="media new">
                                            <div class="img-user"><img src="assets/dist/img/avatar.png" alt=""></div>
                                            <div class="media-body">
                                                <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries
                                                </h6>
                                                <span>Mar 15 12:32pm</span>
                                            </div>
                                        </div>
                                        <!--/.media -->
                                        <div class="media new">
                                            <div class="img-user online"><img src="assets/dist/img/avatar.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
                                                <span>Mar 13 04:16am</span>
                                            </div>
                                        </div>
                                        <!--/.media -->
                                        <div class="media">
                                            <div class="img-user"><img src="assets/dist/img/avatar.png" alt=""></div>
                                            <div class="media-body">
                                                <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
                                                <span>Mar 13 02:56am</span>
                                            </div>
                                        </div>
                                        <!--/.media -->
                                        <div class="media">
                                            <div class="img-user"><img src="assets/dist/img/avatar.png" alt=""></div>
                                            <div class="media-body">
                                                <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
                                                <span>Mar 12 10:40pm</span>
                                            </div>
                                        </div>
                                        <!--/.media -->
                                    </div>
                                    <!--/.notification -->
                                    <div class="dropdown-footer"><a href="orders.php">View All Notifications</a></div>
                                </div>
                                <!--/.dropdown-menu -->
                            </li>
                            <!--/.dropdown-->
                            <?php
$obj = new Operation();
$count = $obj->selectbystatuscount("orderproduct", 1);
?>
                            <li class="nav-item dropdown notification">
                                <a class="nav-link dropdown-toggle <?php if ($count == !0) {echo "badge-dot";}?>" href="#" data-toggle="dropdown">
                                    <i class="typcn typcn-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <h6 class="notification-title">Notifications</h6>
                                    <p class="notification-text">You have <?php echo $count; ?> ordered products</p>
                                    <div class="notification-list">

                                        <!--/.media -->
                                        <?php
$stmt = $obj->selectbystatus("orderproduct", 1, 5);
while ($rows = $stmt->fetch()) {
    $id = $rows["id"];
    $name = $rows["name"];
    $tel = $rows["tel"];
    $date = $rows["date"];

    ?>
                                        <a href="product.php?order=<?php echo $id; ?>">
                                        <div class="media new">

                                            <div class="img-user online"><img src="image/profile.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6><?php echo $name; ?></h6>
                                                <i>+<?php echo $tel; ?></i>
                                                <span><?php echo $date; ?></span>
                                            </div>

                                        </div>
                                        </a>
<?php }?>
                                        <!--/.media -->
                                    </div>
                                    <!--/.notification -->
                                    <div class="dropdown-footer"><a href="orders">View All Notifications</a></div>
                                </div>
                                <!--/.dropdown-menu -->
                            </li>
                            <!--/.dropdown-->

                        </ul>
                        <!--/.navbar nav-->
                        <div class="nav-clock">
                            <div class="time">
                                <span class="time-hours"></span>
                                <span class="time-min"></span>
                                <span class="time-sec"></span>
                            </div>
                        </div><!-- nav-clock -->
                    </div>
                </nav>
