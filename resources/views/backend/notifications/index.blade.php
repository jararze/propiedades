@push('styles')

@endpush
@push('script')

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Notificaciones</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Todas las notificaciones</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Notificaciones No Leidas</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                @foreach($urNotificactions as $notification)
                                    {{--                                <a class="dropdown-item" href="{{ route('admin.markAsRead') }}">--}}
                                    <div class="d-flex align-items-center dropdown-item">
                                        <div class="notification-box {{ $notification->data['color'] }}">
                                            <i class="{{ $notification->data['icon'] }}"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">{{ $notification->data['name'] }}
                                                <span class="msg-time float-end text-secondary">{{ $notification->created_at->diffForHumans() }}</span>
                                            </h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">
                                                @switch($notification->data['type'])
                                                    @case('Property')
                                                        Nueva propiedad- {{ $notification->data['created_by'] }}
                                                        @break

                                                    @case('Project')
                                                        Nuevo proyecto- {{ $notification->data['created_by'] }}
                                                        @break

                                                    @default
                                                        Default case...
                                                @endswitch
                                            </small>
                                        </div>
                                    </div>
                                    {{--                                </a>--}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>


        <div class="card">
            <div class="card-header py-3">
                <h6 class="mb-0">Notificaciones Leidas</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                @foreach($rNotificactions as $notification)
                                    {{--                                <a class="dropdown-item" href="{{ route('admin.markAsRead') }}">--}}
                                    <div class="d-flex align-items-center dropdown-item">
                                        <div class="notification-box {{ $notification->data['color'] }}">
                                            <i class="{{ $notification->data['icon'] }}"></i>
                                        </div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">{{ $notification->data['name'] }}
                                                <span class="msg-time float-end text-secondary">{{ $notification->created_at->diffForHumans() }}</span>
                                            </h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">
                                                @switch($notification->data['type'])
                                                    @case('Property')
                                                        Nueva propiedad- {{ $notification->data['created_by'] }}
                                                        @break

                                                    @case('Project')
                                                        Nuevo proyecto- {{ $notification->data['created_by'] }}
                                                        @break

                                                    @default
                                                        Default case...
                                                @endswitch
                                            </small>
                                        </div>
                                    </div>
                                    {{--                                </a>--}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

    </main>
    <!--end page main-->
</x-app-layout>
