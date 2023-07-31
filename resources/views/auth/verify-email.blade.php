<x-guest-layout>

    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-5 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                            <img src="https://img.freepik.com/free-vector/man-thinking-concept-illustration_114360-7990.jpg?w=740&t=st=1662791646~exp=1662792246~hmac=a0cee1f7c7f898b2b47bfafc0c477f3f0ef9151e3488056c41b74ae4a3e6acb9" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Confirme su correo.</h5>
                                <p class="card-text mb-5">{{ __('Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.') }}</p>
                                @if (session('status') == 'verification-link-sent')
                                    <p class="card-text mb-5">{{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}</p>
                                @endif
                                <!-- Session Status -->
                                {{--                                <x-auth-session-status class="mb-4" :status="session('status')" />--}}
                                <form method="POST" action="{{ route('verification.send') }}" class="form-body">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="d-grid gap-3">
                                                <button type="submit" class="btn btn-lg btn-primary radius-30">Volver a enviar el mail de verificación</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form method="POST" action="{{ route('logout') }}" class="form-body" style="margin-top: 20px;">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="d-grid gap-3">
                                                <button type="submit" class="btn btn-lg btn-primary radius-30">Salir</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
