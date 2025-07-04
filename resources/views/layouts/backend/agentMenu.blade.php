<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('dashboard') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    <li class="menu-label">Configuraciones</li>
    <li>
        <a href="{{ route('admin.packages.select') }}">
            <div class="parent-icon"><i class="bi bi-cart-check-fill"></i>
            </div>
            <div class="menu-title">Paquetes</div>
        </a>
    </li>

    <li class="menu-label">Propiedades</li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-building-add"></i>
            </div>
            <div class="menu-title">Proyectos</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.project.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
            <li><a href="{{ route('admin.project.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-building-add"></i>
            </div>
            <div class="menu-title">Propiedades</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.properties.index') }}"><i class="bi bi-circle"></i>Todas</a></li>
            <li><a href="{{ route('admin.properties.own') }}"><i class="bi bi-circle"></i>Mias</a></li>
            <li><a href="{{ route('admin.project.units') }}"><i class="bi bi-circle"></i>Unidades</a></li>
            <li><a href="{{ route('admin.properties.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>
</ul>
