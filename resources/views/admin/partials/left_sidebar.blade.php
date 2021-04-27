  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <p class="text-aqua" style="font-size: 2rem;margin:0 10px 0 0;">{{ Auth::user()->name }}</p>
        </div>
        <div class="pull-left">
          <a href="#" style="line-height: 30px;margin-left: 15px;"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active">
          <a href="{{ url('/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-cogs text-red"></i>
            <span>Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-circle-o text-aqua"></i> Manage Users</a></li>
              <li><a class="nav-link" href="{{ route('roles.index') }}"><i class="fa fa-circle-o text-red"></i> Manage Role</a></li>
              <!-- <li><a class="nav-link" href="{{ route('posts.index') }}"><i class="fa fa-circle-o text-yellow"></i> Manage Post</a></li> -->
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-users text-aqua"></i>
            <span>Group Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('group-members') }}"><i class="fa fa-circle-o text-aqua"></i>All Group Members </a></li>
              <li><a class="nav-link" href="{{ route('createGroup-member') }}"><i class="fa fa-circle-o text-aqua"></i>Create Group Member </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-map text-red"></i>
            <span>Regions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-regions') }}"><i class="fa fa-circle-o text-aqua"></i>All Regions </a></li>
              <li><a class="nav-link" href="{{ route('createRegion') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Region </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-sitemap text-aqua"></i>
            <span>Host NGO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-ngo') }}"><i class="fa fa-circle-o text-aqua"></i>All Host NGO </a></li>
              <li><a class="nav-link" href="{{ route('createNgo') }}"><i class="fa fa-circle-o text-aqua"></i>Create New NGO </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-users text-yellow"></i>
            <span>Committee Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('committee-members') }}"><i class="fa fa-circle-o text-aqua"></i>All Committee Members </a></li>
              <li><a class="nav-link" href="{{ route('createCommittee-member') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Committee Member </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-users text-aqua"></i>
            <span>Selected Institutions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-institution') }}"><i class="fa fa-circle-o text-aqua"></i>All Institutions </a></li>
              <li><a class="nav-link" href="{{ route('createInstitution') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Institution </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-tasks text-yellow"></i>
            <span>Activities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-activity') }}"><i class="fa fa-circle-o text-aqua"></i>All Activities</a></li>
              <li><a class="nav-link" href="{{ route('createActivity') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Activity </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file text-red"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('reports') }}"><i class="fa fa-circle-o text-aqua"></i>All Reports</a></li>
              <li><a class="nav-link" href="{{ route('createReport') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Report </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-book text-yellow"></i>
            <span>Bulletins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('bulletins') }}"><i class="fa fa-circle-o text-aqua"></i>All Bulletin</a></li>
              <li><a class="nav-link" href="{{ route('createBulletin') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Bulletin </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-rss-square text-aqua"></i>
            <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-blogs') }}"><i class="fa fa-circle-o text-aqua"></i>All Blogs</a></li>
              <li><a class="nav-link" href="{{ route('createBlog') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Blog </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-calendar text-yellow"></i>
            <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-events') }}"><i class="fa fa-circle-o text-aqua"></i>All Events</a></li>
              <li><a class="nav-link" href="{{ route('createEvent') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Event </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-book text-red"></i>
            <span>Research</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-research') }}"><i class="fa fa-circle-o text-aqua"></i>All Research</a></li>
              <li><a class="nav-link" href="{{ route('createResearch') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Research</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-book text-aqua"></i>
            <span>Publication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-publications') }}"><i class="fa fa-circle-o text-aqua"></i>All Publications</a></li>
              <li><a class="nav-link" href="{{ route('createPublication') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Publication</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-graduation-cap text-yellow"></i>
            <span>Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-courses') }}"><i class="fa fa-circle-o text-aqua"></i>All Courses</a></li>
              <li><a class="nav-link" href="{{ route('createCourse') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Course</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-picture-o text-red"></i>
            <span>Photo Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-photos') }}"><i class="fa fa-circle-o text-aqua"></i>All Photos</a></li>
              <li><a class="nav-link" href="{{ route('createPhoto') }}"><i class="fa fa-circle-o text-aqua"></i>Add Gallery Photo</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-tasks text-red"></i>
            <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-project') }}"><i class="fa fa-circle-o text-aqua"></i>All Project</a></li>
              <li><a class="nav-link" href="{{ route('createProject') }}"><i class="fa fa-circle-o text-aqua"></i>Add Project</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-sliders text-aqua"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('sliders') }}"><i class="fa fa-sliders text-aqua"></i>All Sliders</a></li>
              <li><a class="nav-link" href="{{ route('createSlider') }}"><i class="fa fa-sliders text-aqua"></i>Add Slider</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-sliders text-yellow"></i>
            <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('pressReleases') }}"><i class="fa fa-circle-o text-red"></i>Press Release</a></li>
              <li><a class="nav-link" href="{{ route('videos') }}"><i class="fa fa-circle-o text-aqua"></i>Videos</a></li>
          </ul>
        </li>

        <li>
          <a href="{{ route('subscribers') }}">
            <i class="fa fa-list text-yellow"></i>
            <span>Subscribers</span>
          </a>
        </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>