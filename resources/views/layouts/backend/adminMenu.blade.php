<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('dashboard') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>



    <li class="menu-label">Diseño Principal</li>



    <li>
        <a href="{{ route('admin.configuration.index') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Imagen Principal</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.configuration.index.menu') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Cabecera/Pie Pagina</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.configuration.video.index') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Video</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.testimonies.index') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Testimonios</div>
        </a>
    </li>




    <li>
        <a href="{{ route('admin.configuration.reasons.index') }}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Razones</div>
        </a>
    </li>


    <li class="menu-label">Configuraciones</li>



    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-house"></i>
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
            <div class="parent-icon"><i class="bi bi-house"></i>
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
            <li><a href="{{ route('admin.properties.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
            <li><a href="{{ route('admin.properties.register') }}"><i class="bi bi-circle"></i>Agregar</a></li>
        </ul>
    </li>


    <li class="menu-label">Posibles Interesados</li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bi bi-building-add"></i>
            </div>
            <div class="menu-title">Potenciales clientes</div>
        </a>
        <ul>
            <li><a href="{{ route('admin.possible.users.index') }}"><i class="bi bi-circle"></i>Listado</a></li>
        </ul>
    </li>

    {{--        <li>--}}
    {{--            <a href="pages-timeline.html">--}}
    {{--                <div class="parent-icon"><i class="bi bi-house"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Tipos de propiedades</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="javascript:;" class="has-arrow">--}}
    {{--                <div class="parent-icon"><i class="bi bi-house-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Vistas</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href=""><i class="bi bi-circle"></i>Vista Agente</a></li>--}}
    {{--                <li><a href="{{ route('index') }}"><i class="bi bi-circle"></i>Vista usuario</a></li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="javascript:;" class="has-arrow">--}}
    {{--                <div class="parent-icon"><i class="bi bi-grid-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Aplicaciones</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="app-emailbox.html"><i class="bi bi-circle"></i>Email</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="app-chat-box.html"><i class="bi bi-circle"></i>Chat Box</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="app-file-manager.html"><i class="bi bi-circle"></i>File Manager</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="app-to-do.html"><i class="bi bi-circle"></i>Todo List</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="app-invoice.html"><i class="bi bi-circle"></i>Invoice</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="app-fullcalender.html"><i class="bi bi-circle"></i>Calendar</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}

    {{--        <li>--}}
    {{--            <a href="javascript:;" class="has-arrow">--}}
    {{--                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">eCommerce</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Products List</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Products Grid</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-products-categories.html"><i class="bi bi-circle"></i>Categories</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-orders.html"><i class="bi bi-circle"></i>Orders</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Order details</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add New Product</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Add New Product 2</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="ecommerce-transactions.html"><i class="bi bi-circle"></i>Transactions</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-award-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Components</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="component-alerts.html"><i class="bi bi-circle"></i>Alerts</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-accordions.html"><i class="bi bi-circle"></i>Accordions</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-badges.html"><i class="bi bi-circle"></i>Badges</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-buttons.html"><i class="bi bi-circle"></i>Buttons</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-cards.html"><i class="bi bi-circle"></i>Cards</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-carousels.html"><i class="bi bi-circle"></i>Carousels</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-list-groups.html"><i class="bi bi-circle"></i>List Groups</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-media-object.html"><i class="bi bi-circle"></i>Media Objects</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-modals.html"><i class="bi bi-circle"></i>Modals</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-navs-tabs.html"><i class="bi bi-circle"></i>Navs & Tabs</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-navbar.html"><i class="bi bi-circle"></i>Navbar</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-paginations.html"><i class="bi bi-circle"></i>Pagination</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-popovers-tooltips.html"><i class="bi bi-circle"></i>Popovers & Tooltips</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-progress-bars.html"><i class="bi bi-circle"></i>Progress</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-spinners.html"><i class="bi bi-circle"></i>Spinners</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-notifications.html"><i class="bi bi-circle"></i>Notifications</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="component-avtars-chips.html"><i class="bi bi-circle"></i>Avatrs & Chips</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Icons</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="icons-line-icons.html"><i class="bi bi-circle"></i>Line Icons</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="icons-boxicons.html"><i class="bi bi-circle"></i>Boxicons</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="icons-feather-icons.html"><i class="bi bi-circle"></i>Feather Icons</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li class="menu-label">Forms & Tables</li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Forms</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="form-elements.html"><i class="bi bi-circle"></i>Form Elements</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="form-input-group.html"><i class="bi bi-circle"></i>Input Groups</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="form-layouts.html"><i class="bi bi-circle"></i>Forms Layouts</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="form-validations.html"><i class="bi bi-circle"></i>Form Validation</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="form-wizard.html"><i class="bi bi-circle"></i>Form Wizard</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="form-date-time-pickes.html"><i class="bi bi-circle"></i>Date Pickers</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="form-select2.html"><i class="bi bi-circle"></i>Select2</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Tables</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="table-basic-table.html"><i class="bi bi-circle"></i>Basic Table</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="table-advance-tables.html"><i class="bi bi-circle"></i>Advance Tables</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="table-datatable.html"><i class="bi bi-circle"></i>Data Table</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li class="menu-label">Pages</li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-lock-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Authentication</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="authentication-signin.html" target="_blank"><i class="bi bi-circle"></i>Sign In</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="authentication-signup.html" target="_blank"><i class="bi bi-circle"></i>Sign Up</a>--}}
    {{--                </li>--}}


    {{--                <li><a href="authentication-forgot-password.html" target="_blank"><i class="bi bi-circle"></i>Forgot--}}
    {{--                        Password</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="authentication-reset-password.html" target="_blank"><i class="bi bi-circle"></i>Reset--}}
    {{--                        Password</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="pages-user-profile.html">--}}
    {{--                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">User Profile</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="pages-timeline.html">--}}
    {{--                <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Timeline</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Errors</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="pages-errors-404-error.html" target="_blank"><i class="bi bi-circle"></i>404 Error</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="pages-errors-500-error.html" target="_blank"><i class="bi bi-circle"></i>500 Error</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="pages-errors-coming-soon.html" target="_blank"><i class="bi bi-circle"></i>Coming Soon</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="pages-blank-page.html" target="_blank"><i class="bi bi-circle"></i>Blank Page</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="pages-faq.html">--}}
    {{--                <div class="parent-icon"><i class="bi bi-question-lg"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">FAQ</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="pages-pricing-tables.html">--}}
    {{--                <div class="parent-icon"><i class="bi bi-tags-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Pricing Tables</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
    {{--        <li class="menu-label">Charts & Maps</li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Charts</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="charts-apex-chart.html"><i class="bi bi-circle"></i>Apex</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="charts-chartjs.html"><i class="bi bi-circle"></i>Chartjs</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="charts-highcharts.html"><i class="bi bi-circle"></i>Highcharts</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-pin-map-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Maps</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="map-google-maps.html"><i class="bi bi-circle"></i>Google Maps</a>--}}
    {{--                </li>--}}
    {{--                <li><a href="map-vector-maps.html"><i class="bi bi-circle"></i>Vector Maps</a>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li class="menu-label">Others</li>--}}
    {{--        <li>--}}
    {{--            <a class="has-arrow" href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-music-note-list"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Menu Levels</div>--}}
    {{--            </a>--}}
    {{--            <ul>--}}
    {{--                <li><a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>--}}
    {{--                    <ul>--}}
    {{--                        <li><a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level Two</a>--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-file-code-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Documentation</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
    {{--        <li>--}}
    {{--            <a href="javascript:;">--}}
    {{--                <div class="parent-icon"><i class="bi bi-telephone-fill"></i>--}}
    {{--                </div>--}}
    {{--                <div class="menu-title">Support</div>--}}
    {{--            </a>--}}
    {{--        </li>--}}
</ul>
