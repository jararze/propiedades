@push('styles')
    <link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
@endpush
@push('script')
    <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/table-datatable3.js') }}"></script>
    <script>
        @if(isset($javascript))
            {!! $javascript !!}
            window.location.href = '{{ url()->previous() }}'; // Redirect the current tab
        @endif
    </script>

@endpush
<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Posibles clientes</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Posibles clientes</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($values as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#email{{$contact->id}}"><i
                                            class="bi bi-envelope"></i> {{ $contact->email }}</a></td>
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#whatsapp{{$contact->id}}"><i
                                            class="bi bi-whatsapp"></i> {{ $contact->phone }}</a></td>
                                <td><a href="#" data-bs-toggle="modal"
                                       data-bs-target="#message{{$contact->id}}"> {{ $contact->subject }}</a></td>
                                <td><a href="#" data-bs-toggle="modal" data-bs-target="#message{{$contact->id}}"><i
                                            class="bi bi-chat-dots"></i> Ver mensaje</a></td>
                                <td>
                                    @if($contact->response == 1)
                                        <span
                                            class="badge bg-light-success text-success w-100">Contactado por Correo</span>
                                    @elseif($contact->response == 2)
                                        <span
                                            class="badge bg-light-success text-success w-100">Contactado por Whatsapp</span>
                                    @else
                                        <span
                                            class="badge bg-light-info text-info w-100">Pendiente</span>
                                    @endif
                                </td>
                            </tr>

                            <div class="modal fade" id="email{{ $contact->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enviar un correo a {{ $contact->name }}?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="{{ route('admin.possible.users.contact') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $contact->id }}">
                                            <input type="hidden" name="email" value="{{ $contact->email }}">
                                            <div class="modal-body">
                                                <p>Escriba el mensaje para contestar a {{ $contact->name }}?</p>
                                                <label for="long_description" class="form-label"></label>
                                                <textarea id="long_description" name="long_description" type="text"
                                                          class="form-control"
                                                          placeholder="Mnesaje">{{ old('long_description') }}</textarea>
                                                <x-input-error :messages="$errors->get('long_description')"
                                                               class="mt-2"/>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                    Cancelar
                                                </button>
                                                <button type="submit" class="btn btn-dark" data-bs-dismiss="modal">
                                                    Enviar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="whatsapp{{ $contact->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enviar un whatsapp a {{ $contact->name }}?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form method="post"
                                              action="{{ route('admin.possible.users.contact.whatsapp') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $contact->id }}">
                                            <input type="hidden" name="phone" value="{{ $contact->phone }}">
                                            <div class="modal-body">
                                                <p>Escriba el mensaje para contestar por whatsapp a {{ $contact->name }}
                                                    ?</p>
                                                <label for="long_description" class="form-label"></label>
                                                <textarea id="long_description" name="long_description" type="text"
                                                          class="form-control"
                                                          placeholder="Mnesaje">{{ old('long_description') }}</textarea>
                                                <x-input-error :messages="$errors->get('long_description')"
                                                               class="mt-2"/>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                    Cancelar
                                                </button>
                                                <button type="submit" class="btn btn-dark" data-bs-dismiss="modal">
                                                    Enviar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="message{{ $contact->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"> {{ $contact->subject }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $contact->message }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->
</x-app-layout>
