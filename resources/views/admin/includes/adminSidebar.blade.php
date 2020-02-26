

<?php  $roleId = Session::get('roleId'); 

    if (in_array($roleId, [1, 2, 3, 4] )) { ?>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('/add/product')}}">Add Product</a></li>
                    <li><a href="{{url('/manage/product')}}">Manage Product </a></li>
                </ul>
        </li>

    <?php } if (in_array($roleId, [1, 2, 3] )) { ?>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Add User<span class="fa arrow"></span>
            </a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('/add/userInfo')}}">Add User Information</a></li>
                    <li><a href="{{url('/manage/userInfo')}}">Manage User Information</a></li>
                </ul>
        </li>


    <?php } if (in_array($roleId, [1, 4] )) { ?>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blog <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('/add/blogInfo')}}">Add Blog Info</a></li>
                    <li><a href="{{url('/manage/blogInfo')}}"> Manage Blog Info</a></li>
                </ul>
        </li>


    <?php } if (in_array($roleId, [1, 3, 4] )) { ?>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Client Contact Info  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{url('/manage/contactInfo')}}">MAnage Contact Info</a></li>
                </ul>
        </li>
                
    </div>
</nav>
<?php } ?>