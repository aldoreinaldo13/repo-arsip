<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="javascript:void(0)">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="javascript:void(0)">St</a>
  </div>
  <ul class="sidebar-menu">
    <li>
      <a class="nav-link" href="{{ url('/arsip/tambah') }}">
        <i class="icon-item fas fa-file"></i> <span>Buat Data</span>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ url('/arsip') }}">
        <i class="icon-item fas fa-file"></i> <span>Data Arsip</span>
      </a>
    </li>
  </ul>
</aside>
