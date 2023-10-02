<ul class="metismenu" id="menu">


    <li>
        <a href="{{ route('dashboard') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    <li>
        <a href="/" target="_blank">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">FrontPage</div>
        </a>
    </li>


    <li class="menu-label">Diseño Principal</li>



    <li>
        <a href="{{ route('admin.configuration.index') }}">
            <div class="parent-icon"><i class="bi bi-card-image"></i>
            </div>
            <div class="menu-title">Imagen Principal</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.configuration.index.menu') }}">
            <div class="parent-icon"><i class="bi bi-info-circle-fill"></i>
            </div>
            <div class="menu-title">Cabecera/Pie Pagina</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.configuration.video.index') }}">
            <div class="parent-icon"><i class="bi bi-camera-reels-fill"></i>
            </div>
            <div class="menu-title">Video</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.testimonies.index') }}">
            <div class="parent-icon"><i class="bi bi-quote"></i>
            </div>
            <div class="menu-title">Testimonios</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.configuration.reasons.index') }}">
            <div class="parent-icon"><i class="bi bi-emoji-smile-fill"></i>
            </div>
            <div class="menu-title">Razones</div>
        </a>
    </li>



    <li>
        <a href="{{ route('admin.configuration.advertising.index') }}">
            <div class="parent-icon"><i class="bi bi-tv"></i>
            </div>
            <div class="menu-title">Publicidad</div>
        </a>
    </li>


    <li class="menu-label">Configuraciones</li>



    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="fa-solid fa-city"></i>
            </div>
            <div class="menu-title">Ciudades</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.cities.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
            <li><a href="{{ route('admin.cities.register') }}"><i class="bi bi-circle"></i>Agregar</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-ubuntu"></i>
            </div>
            <div class="menu-title">Tipos de propiedades</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.TypesProperties.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
            <li><a href="{{ route('admin.TypesProperties.register') }}"><i class="bi bi-circle"></i>Agregar Tipo</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-emoji-laughing"></i>
            </div>
            <div class="menu-title">Tipos de Amenities</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.Amenities.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
            <li><a href="{{ route('admin.Amenities.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-building-add"></i>
            </div>
            <div class="menu-title">Servicios cercanos</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.Facilities.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
            <li><a href="{{ route('admin.Facilities.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-person-add"></i>
            </div>
            <div class="menu-title">Usuarios</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.users.index') }}"><i class="bi bi-circle"></i>Listado </a></li>
            <li><a href="{{ route('admin.users.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-cart-check-fill"></i>
            </div>
            <div class="menu-title">Paquetes</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.packages.index') }}"><i class="bi bi-circle"></i>Listado </a></li>
            <li><a href="{{ route('admin.packages.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
            <li><a href="{{ route('admin.packages.users.approval') }}"><i class="bi bi-circle"></i>Aprobaciones</a></li>
        </ul>
    </li>




    <li class="menu-label">Propiedades</li>


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="fa-solid fa-building-shield"></i>
            </div>
            <div class="menu-title">Proyectos</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.project.index') }}"><i class="bi bi-circle"></i>Todos</a></li>
            <li><a href="{{ route('admin.project.own') }}"><i class="bi bi-circle"></i>Mias</a></li>
            <li><a href="{{ route('admin.project.inactives') }}"><i class="bi bi-circle"></i>Inactivas</a></li>
            <li><a href="{{ route('admin.project.sale') }}"><i class="bi bi-circle"></i>Vendidas/Alquiladas/Etc</a></li>
            <li><a href="{{ route('admin.project.cancelled') }}"><i class="bi bi-circle"></i>Canceladas</a></li>
            <li><a href="{{ route('admin.project.units') }}"><i class="bi bi-circle"></i>Unidades</a></li>
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
            <li><a href="{{ route('admin.properties.inactives') }}"><i class="bi bi-circle"></i>Inactivas</a></li>
            <li><a href="{{ route('admin.properties.sale') }}"><i class="bi bi-circle"></i>Vendidas/Alquiladas/Etc</a></li>
            <li><a href="{{ route('admin.properties.cancelled') }}"><i class="bi bi-circle"></i>Canceladas</a></li>
            <li><a href="{{ route('admin.properties.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>


    <li class="menu-label">Posibles Interesados</li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="fa-solid fa-users"></i>
            </div>
            <div class="menu-title">Contactos</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.possible.users.index') }}"><i class="bi bi-circle"></i>Ver telefono</a></li>
            <li><a href="{{ route('admin.possible.users.contact') }}"><i class="bi bi-circle"></i>Contactenos</a></li>
        </ul>
    </li>

</ul>
