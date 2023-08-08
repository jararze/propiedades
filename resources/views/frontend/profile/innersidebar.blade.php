<div class="sidebar-widget category-widget">
    <div class="widget-title">
        <h4>Categorias</h4>
    </div>
    @php
        $currenturl = Request::path();
    @endphp
    <div class="widget-content">
        <ul class="category-list ">
            <li class="
            @if($currenturl === 'userProfile')
                {{ 'current' }}
            @endif
            "><a href="{{ route('userProfile.edit') }}"><i class="fab fa fa-envelope "></i> Dashboard </a></li>
            <li class="
            @if($currenturl === 'userProfile/password')
                {{ 'current' }}
            @endif
            "><a href="{{ route('userProfile.editPassword') }}"><i class="fa fa-key" aria-hidden="true"></i> Seguridad
                </a></li>
            <li class="
            @if($currenturl === 'userProfile/image')
                {{ 'current' }}
            @endif
            "><a href="{{ route('userProfile.editImage') }}"><i class="fa fa-cog" aria-hidden="true"></i> Imagen </a></li>
            {{--                                    <li><a href="blog-details.html"><i class="fa fa-cog" aria-hidden="true"></i> Configuracion</a></li>--}}
            {{--                                    <li><a href="blog-details.html"><i class="fa fa-credit-card" aria-hidden="true"></i> Buy credits<span class="badge badge-info">( 10 credits)</span></a></li>--}}
            <li class="
            @if($currenturl === 'userProfile/wishlist/index')
                {{ 'current' }}
            @endif
            "><a href="{{ route("userProfile.wishlist.index") }}"><i class="fa fa-list-alt" aria-hidden="true"></i></i> Propiedades deseadas </a></li>
            <li class="
            @if($currenturl === 'userProfile.compare.index')
                {{ 'current' }}
            @endif
            "><a href="{{ route("userProfile.compare.index") }}"><i class="fa fa-indent" aria-hidden="true"></i> Comparar Propiedades </a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();"><i
                            class="fa fa-sign-out"></i> Salir</a>
                </form>
{{--                <a href="blog-details.html"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i> Salir </a>--}}
            </li>
        </ul>
    </div>
</div>
