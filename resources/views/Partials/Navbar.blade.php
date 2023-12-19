<!-- partial -->
<div class="container-fluid page-body-wrapper ">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav bg-primary">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <span class="menu-title">Dashboard</span>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Old.Age')}}">
          <span class="menu-title">Old Person</span>

        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
          <span class="menu-title">Admin</span>

        </a>
      </li>
      <li class="nav-item">
        <a type="button" class="nav-link dropdown-toggle" href="{{route('staff')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="menu-titless">Staff</span>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('staff.doctor')}}">Doctor</a>
            <a class="dropdown-item" href="#">Cooker</a>
            <a class="dropdown-item" href="#">Event Orgnizer</a>
            <a class="dropdown-item" href="#">Helper</a>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="menu-title">Manager</span>

        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="pages/tables/basic-table.html"> -->
        <a type="button" class="nav-link dropdown-toggle" href="{{route('services')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="menu-title">Services</span>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('PersonalCare.Bend')}}">Personal Care</a>
            <a class="dropdown-item" href="{{route('meal.Bend')}}">Meals</a>
            <a class="dropdown-item" href="{{route('housekeeping.Bend')}}">Housekeeping</a>
            <a class="dropdown-item" href="#">Medical Care</a>
            <a class="dropdown-item" href="{{route('Transport.Bend')}}">Transport</a>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('donation')}}">
          <span class="menu-title">Donation</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('trustee.Bend')}}">
          <span class="menu-title">Trustee</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('expense')}}">
          <span class="menu-title">Expense</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="#">
          <span class="menu-title">Invoice</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="menu-title">Visitor</span>
        </a>
      </li>

      <li class="nav-item">
        <!-- <a class="nav-link" href="pages/tables/basic-table.html"> -->
        <a type="button" class="nav-link dropdown-toggle" href="{{route('services')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="menu-title">Report</span>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('donation.Report')}}">Donation Report</a>
            <a class="dropdown-item" href="{{route('meal.Bend')}}">Meals</a>
            <a class="dropdown-item" href="{{route('housekeeping.Bend')}}">Housekeeping</a>
            <a class="dropdown-item" href="#">Medical Care</a>
            <a class="dropdown-item" href="{{route('Transport.Bend')}}">Transport</a>
          </div>
        </a>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('donation.Report')}}">
          <span class="menu-title">Report</span>
        </a>
      </li> -->

      <li class="nav-item">
        <a href="{{route('pages.logout')}}" class="nav-link">
          <span class="menu-title">Logout</span>
        </a>
      </li>

      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Invoic</span>

      </a>
      </a>
      
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
      </li>
      <li class="nav-item sidebar-actions">
        <span class="nav-link">
          <div class="border-bottom">
            <h6 class="font-weight-normal mb-3">Projects</h6>
          </div>
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4"> Add a project</button>
          <div class="mt-4">
            <div class="border-bottom">
              <p class="text-secondary">Categories</p>
            </div>
            <ul class="gradient-bullet-list mt-4">
              <li>Free</li>
              <li>Pro</li>
            </ul>
          </div>
        </span>
      </li>
    </ul>
  </nav>