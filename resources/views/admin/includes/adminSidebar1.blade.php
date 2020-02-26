

<?php
    $roleId = Session::get('roleId');

// ========================== for admin ============================
    if ($roleId == 1) { ?>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Add User  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <?php
                            $roleId = Session::get('roleId');
                            if ($roleId == 1) { ?>
                            <!-- <li>
                                <a href="{{url('/add/distributorInfo')}}">Add Distributor Information</a>
                            </li>
                            <li> 
                                <a href="{{url('/add/managerInfo')}}">Add Manager Information</a>
                            </li> -->
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/userInfo')}}">Manage User Information</a>
                            </li>

                            <?php } else if ($roleId == 2) { ?>
                            <!-- <li> 
                                <a href="{{url('/add/managerInfo')}}">Add Manager Information</a>
                            </li> -->
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/userInfo')}}">Manage User Information</a>
                            </li>
                            
                            <?php } else if ($roleId == 3) { ?>
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/userInfo')}}">Manage User Information</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add/product')}}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{url('/manage/product')}}">Manage Product </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blog <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add/blogInfo')}}">Add Blog Info</a>
                        </li>
                        <li>
                            <a href="{{url('/manage/blogInfo')}}"> Manage Blog Info</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Client Contact Info  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/manage/contactInfo')}}">MAnage Contact Info</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
        </div>
    </nav>


    <!-- ======================= for distributor ===================== -->
    <?php } else if ($roleId == 2) { ?>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Add User  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <?php
                            $roleId = Session::get('roleId');
                            if ($roleId == 1) { ?>
                            <li>
                                <a href="{{url('/add/distributorInfo')}}">Add Distributor Information</a>
                            </li>
                            <li> 
                                <a href="{{url('/add/managerInfo')}}">Add Manager Information</a>
                            </li>
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>

                            <?php } else if ($roleId == 2) { ?>
                            <!-- <li> 
                                <a href="{{url('/add/managerInfo')}}">Add Manager Information</a>
                            </li> -->
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/userInfo')}}">Manage User Information</a>
                            </li>
                            
                            <?php } else if ($roleId == 3) { ?>
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add/product')}}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{url('/manage/product')}}">Manage Product </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Client Contact Info  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/manage/contactInfo')}}">MAnage Contact Info</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
        </div>
    </nav>


    <!-- ======================= for manager ===================== -->           
    <?php } else if ($roleId == 3) { ?>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Add User  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <?php
                            $roleId = Session::get('roleId');
                            if ($roleId == 1) { ?>
                            <li>
                                <a href="{{url('/add/distributorInfo')}}">Add Distributor Information</a>
                            </li>
                            <li> 
                                <a href="{{url('/add/managerInfo')}}">Add Manager Information</a>
                            </li>
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>

                            <?php } else if ($roleId == 2) { ?>
                            <li> 
                                <a href="{{url('/add/managerInfo')}}">Add Manager Information</a>
                            </li>
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                            
                            <?php } else if ($roleId == 3) { ?>
                            <li>
                                <a href="{{url('/add/userInfo')}}">Add User Information</a>
                            </li>
                            <li>
                                <a href="{{url('/manage/userInfo')}}">Manage User Information</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add/product')}}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{url('/manage/product')}}">Manage Product </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Client Contact Info  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/manage/contactInfo')}}">MAnage Contact Info</a>
                        </li>
                    </ul>
                </li>
        </div>
    </nav>


    <!-- ======================= for user ===================== -->                
    <?php } else { ?> 

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add/product')}}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{url('/manage/product')}}">Manage Product </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blog <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/add/blogInfo')}}">Add Blog Info</a>
                        </li>
                        <li>
                            <a href="{{url('/manage/blogInfo')}}"> Manage Blog Info</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Client Contact Info  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/manage/contactInfo')}}">MAnage Contact Info</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            
        </div>
    </nav>

                    
<?php } ?>




