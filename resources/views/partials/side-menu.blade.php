<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

    <!--begin::Menu Container-->
    <div
        id="kt_aside_menu"
        class="aside-menu my-4 "
        data-menu-vertical="1"
        data-menu-scroll="1" data-menu-dropdown-timeout="500" 			>
        <!--begin::Menu Nav-->
        <ul class="menu-nav ">
            <li class="menu-item  menu-item-active" aria-haspopup="true" >
                <a  href="{{route('admin.index')}}" class="menu-link ">
                    <i class="menu-icon flaticon2-architecture-and-city"></i>
                    <span class="menu-text">Home</span>
                </a>
            </li>
            <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                <a  href="javascript;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-avatar"></i>
                    <span class="menu-text">Admins</span><i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu ">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true" >
                            <span class="menu-link"><span class="menu-text">Actions</span></span>
                        </li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('admin.admin-all')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">All</span></a></li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('create.admins')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Add</span></a></li>

                    </ul>
                </div></li>
            <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                <a  href="javascript;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-chart2"></i>
                    <span class="menu-text">Categories</span><i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu ">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true" >
                            <span class="menu-link"><span class="menu-text">Actions</span></span>
                        </li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('admin.categories-all')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">All</span></a></li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('create.category')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Add</span></a></li>

                    </ul>
                </div></li>
            <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                <a  href="javascript;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-menu"></i>
                    <span class="menu-text">Jobs</span><i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu ">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true" >
                            <span class="menu-link"><span class="menu-text">Actions</span></span>
                        </li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('admin.jobs-all')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">All</span></a></li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('create.jobs')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Add</span></a></li>

                    </ul>
                </div></li>
            <li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
                <a  href="javascript;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-contract"></i>
                    <span class="menu-text">Applications</span><i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu ">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true" >
                            <span class="menu-link"><span class="menu-text">Actions</span></span>
                        </li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="{{route('admin.applications-all')}}" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">All</span></a></li>
                        <li class="menu-item " aria-haspopup="true" >
                            <a  href="#" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Add</span></a></li>

                    </ul>
                </div></li>

            <li class="menu-item " aria-haspopup="true" ><a  href="{{route('admin.roles-all')}}" class="menu-link "><i class="menu-icon flaticon2-lock"></i><span class="menu-text">Roles</span></a></li>
\		<li class="menu-item " aria-haspopup="true" ><a  href="javascript:;" class="menu-link "><i class="menu-icon flaticon2-console"></i><span class="menu-text">Console</span></a></li>
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
