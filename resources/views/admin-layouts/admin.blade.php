

@extends('admin-layouts.app')

@section('content')
 <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>ADMIN PANEL</h3>
                    <strong>LOGO</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#">
                            <i class="glyphicon glyphicon-dashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-plus"></i>
                            Add New
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-pencil"></i>
                            All Blog Posts
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Stocks
                        </a>
                    </li>	
                </ul>

            </nav>

            <!-- Page Content Holder -->
            <div id="content">

            	<span class="glyphicon glyphicon-arrow-left sideNavController"  id="sidebarCollapse"></span>
               
            </div>
@endsection
