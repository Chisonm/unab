<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Un<span>ab</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{ url('admin/dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/parcel') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">parcel</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Contacts</span>
        </a>
      </li>
      <li class="nav-item">
      
        <a href="{{ url('') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Quotes</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
