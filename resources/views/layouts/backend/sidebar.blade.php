<aside class="sidebar-wrapper" data-simplebar="true">
    @php
        $rolee = Auth::user()->role;
    @endphp
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo/PROpiedades_03.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ strtoupper($rolee) }} Panel </h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    @if($rolee == 'admin')
        @include('layouts.backend.adminMenu')
    @else
        @include('layouts.backend.agentMenu')
    @endif

    <!--end navigation-->
</aside>
