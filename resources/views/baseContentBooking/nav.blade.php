<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-left info">
                <p></p>

            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="{{url('/')}}">
                    <i class="fa fa-dashboard"></i> <span>Home</span>
                </a>
            </li>
            @if(isset(Auth::user()->role)&& Auth::user()->role === 'admin')

                <li class="treeview">
                    <a href="#"><i class="fa fa-cog "></i><span class="hidden-tablet"> Admin-Panel </span><span
                                class="fa fa-angle-left pull-right"></span></a>
                    <ul class="treeview-menu">
                        <li><a class="submenu" href="{{action('UserController@index')}}"><i
                                        class="fa fa-male"></i><span
                                        class="hidden-tablet"> Gebruikers</span></a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>