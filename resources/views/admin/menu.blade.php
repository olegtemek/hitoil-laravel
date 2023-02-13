<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.home.index')}}" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item ">
          <a href="{{route('admin.factory.index')}}" class="nav-link {{(request()->is('admin/factory*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Заводы</p>
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{route('admin.sale.index')}}" class="nav-link {{(request()->is('admin/sale*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Акции</p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{route('admin.contact.index')}}" class="nav-link {{(request()->is('admin/contact*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Контакты</p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{route('admin.team.index')}}" class="nav-link {{(request()->is('admin/team*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Команда</p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{route('admin.partner.index')}}" class="nav-link {{(request()->is('admin/partner*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Партнеры</p>
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{route('admin.review.index')}}" class="nav-link {{(request()->is('admin/review*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Отзывы</p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{route('admin.certificate.index')}}" class="nav-link {{(request()->is('admin/certificate*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Сертификаты</p>
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{route('admin.page.index')}}" class="nav-link {{(request()->is('admin/page*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Страницы</p>
          </a>
        </li>
      
        <li class="nav-item ">
          <a href="{{route('admin.category.index')}}" class="nav-link {{(request()->is('admin/category*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Категории</p>
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{route('admin.petrol.index')}}" class="nav-link {{(request()->is('admin/petrol*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Все топливо</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link"> <i class="nav-icon fas fa-copy"></i> <p>Фильтры</p> <i class="fas fa-angle-left right"></i> </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{route('admin.filter.index', 0)}}" class="nav-link {{(request()->is('admin/filter/0*')) ? 'active' : ''}}">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Бренды</p>
                </a>
              </li> 
              <li class="nav-item ">
                <a href="{{route('admin.filter.index', 1)}}" class="nav-link {{(request()->is('admin/filter/1*')) ? 'active' : ''}}">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Объем</p>
                </a>
              </li> 
              <li class="nav-item ">
                <a href="{{route('admin.filter.index', 2)}}" class="nav-link {{(request()->is('admin/filter/2*')) ? 'active' : ''}}">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Вязкость</p>
                </a>
              </li> 
              <li class="nav-item ">
                <a href="{{route('admin.filter.index', 3)}}" class="nav-link {{(request()->is('admin/filter/3*')) ? 'active' : ''}}">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Тип</p>
                </a>
              </li> 
            </ul>
          </li>
        <li class="nav-item ">
          <a href="{{route('admin.product.index')}}" class="nav-link {{(request()->is('admin/product*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Масла</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>