 <!--sidebar wrapper -->
 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <!-- <div>
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div> -->
         <div>
             <h4 class="logo-text">NoPlan</h4>
         </div>
         <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="{{route('admin.dashboard')}}">
                 <div class="parent-icon"><i class='bx bx-home-circle'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>

         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="lni lni-users"></i>
                 </div>
                 <div class="menu-title">Customers</div>
             </a>
             <ul>
                 <li> <a href="{{route('admin.customers.index')}}"><i class="bx bx-right-arrow-alt"></i>Pending Customers</a>
                 </li>
                 <li> <a href="{{route('admin.approve-customers')}}"><i class="bx bx-right-arrow-alt"></i>Approved Customers</a>
                 </li>
                 <li> <a href="{{route('admin.reject-customers')}}"><i class="bx bx-right-arrow-alt"></i>Rejected Customers</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="{{route('admin.drivers.index')}}">
                 <div class="parent-icon"><i class='bx bx-face'></i>
                 </div>
                 <div class="menu-title">Drivers</div>
             </a>

         </li>

         <li>
             <a href="{{route('admin.events.index')}}">
                 <div class="parent-icon"><i class='bx bx-calendar-event
'></i>
                 </div>
                 <div class="menu-title">Events</div>
             </a>

         </li>
         <!-- <li class="menu-label">ADMINISTRATION</li> -->
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-category"></i>
                 </div>
                 <div class="menu-title">Access Management</div>
             </a>
             <ul>
                 <li> <a href="{{route('admin.users.index')}}"><i class="bx bx-right-arrow-alt"></i>Users</a>
                 </li>
                 @if(Auth::guard('admin')->user()->can('role-list'))
                 <li> <a href="{{route('admin.roles.index')}}"><i class="bx bx-right-arrow-alt"></i>Roles</a>
                 </li>
                 @endif
                 @if(Auth::guard('admin')->user()->can('permission-list'))
                 <li> <a href="{{route('admin.permissions.index')}}"><i class="bx bx-right-arrow-alt"></i>Permissions</a>
                 </li>
                 @endif
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-mail-send"></i>
                 </div>
                 <div class="menu-title">MailChimp</div>
             </a>
             <ul>
                 <li>
                     <a href="{{route('admin.create-campaign')}}"><i class="bx bx-right-arrow-alt"></i>MailChimp</a>
                     <a href="{{route('admin.subscribers-list')}}"><i class="bx bx-right-arrow-alt"></i>Subscribers List</a>
                     <a href="{{route('admin.contacts-list')}}"><i class="bx bx-right-arrow-alt"></i>Contacts List</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bx bx-cog"></i>
                 </div>
                 <div class="menu-title">Setting</div>
             </a>
             <ul>
                 <li>
                     <a href="{{route('admin.website-setting')}}"><i class="bx bx-right-arrow-alt"></i>Website Setting</a>
                     <a href="{{route('admin.mailchimp-setting')}}"><i class="bx bx-right-arrow-alt"></i>MailChimp Setting</a>
                     <a href="{{route('admin.newsletter-template')}}"><i class="bx bx-right-arrow-alt"></i>Newsletter</a>

                 </li>
             </ul>
         </li>
     </ul>
     <!--end navigation-->
 </div>
 <!--end sidebar wrapper -->