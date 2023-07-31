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
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-building-add"></i>
            </div>
            <div class="menu-title">Propiedades</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.allProperties') }}"><i class="bi bi-circle"></i>Listado propiedades</a></li>
            <li><a href="{{ route('admin.registerProperties') }}"><i class="bi bi-circle"></i>Agregar propiedad</a></li>
        </ul>
    </li>
</ul>
