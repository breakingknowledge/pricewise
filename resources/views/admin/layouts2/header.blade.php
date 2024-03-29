 <!--start header -->
 <header>
     <div class="topbar d-flex align-items-center">
         <nav class="navbar navbar-expand">
             <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
             </div>
             <!-- <div class="search-bar flex-grow-1">
                 <div class="position-relative search-bar-box">
                     <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                     <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                 </div>
             </div> -->
             <div class="top-menu ms-auto">
                 <ul class="navbar-nav align-items-center">
                     <li class="nav-item mobile-search-icon">
                         <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                         </a>
                     </li>

                     <li class="nav-item dropdown dropdown-large">
                         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">0</span>
                             <i class='bx bx-bell'></i>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                             <a href="javascript:;">
                                 <div class="msg-header">
                                     <p class="msg-header-title">Notifications</p>
                                     <p class="msg-header-clear ms-auto">Marks all as read</p>
                                 </div>
                             </a>
                             <div class="header-notifications-list">
                                 <!-- <a class="dropdown-item" href="javascript:;">
                                     <div class="d-flex align-items-center">
                                         <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                         </div>
                                         <div class="flex-grow-1">
                                             <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                     ago</span></h6>
                                             <p class="msg-info">5 new user registered</p>
                                         </div>
                                     </div>
                                 </a> -->
                                
                             </div>
                             <a href="javascript:;">
                                 <div class="text-center msg-footer">View All Notifications</div>
                             </a>
                         </div>
                     </li>
                     <li class="nav-item dropdown dropdown-large" style="display: none">
                         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                             <i class='bx bx-comment'></i>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end">
                             <a href="javascript:;">
                                 <div class="msg-header">
                                     <p class="msg-header-title">Messages</p>
                                     <p class="msg-header-clear ms-auto">Marks all as read</p>
                                 </div>
                             </a>
                             <div class="header-message-list">

                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
             <div class="user-box dropdown">
                 <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 @if (Auth::guard('admin')->user()->profileImage != null || Auth::guard('admin')->user()->profileImage != '')
                     <img src="{{asset('images/'.Auth::guard('admin')->user()->profileImage)}}" alt="image" id="pImage" class="user-img">
                     @else
                     <img src="{{asset('assets/images/default.jpg')}}" class="user-img" alt="user avatar">
                     @endif
                     <div class="user-info ps-3">
                         <p class="user-name mb-0">{{Auth::guard('admin')->user()->name}}</p>
                         <!-- <p class="designattion mb-0">Web Designer</p> -->
                     </div>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end">
                     <!-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                     </li>
                     <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                     </li>
                     <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                     </li>
                     <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                     </li>
                     <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
                     </li>
                     <li>
                         <div class="dropdown-divider mb-0"></div>
                     </li> -->
                     <li><a class="dropdown-item" href="{{route('admin.edit-profile',['id' => Auth::guard('admin')->user()->id])}}"><i class="bx bx-user"></i><span>Profile</span></a>
                     </li>
                     <li><a class="dropdown-item" href="{{route('admin.change-password',['id' => Auth::guard('admin')->user()->id])}}"><i class="lni lni-key"></i><span>Change Password</span></a>
                     </li>
                     <li>
                         <form method="POST" action="{{ route('admin.logout') }}">
                             @csrf
                             <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                 <i class='bx bx-log-out-circle'></i><span>Logout</span>
                             </a>
                         </form>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
 </header>
 <!--end header -->