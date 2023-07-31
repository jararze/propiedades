<x-guest-layout>
    <!--start content-->
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
                                <h5 class="card-title">¿Olvido la contraseña?</h5>
                                <p class="card-text mb-5">Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.</p>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('password.email') }}" class="form-body">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control form-control-lg radius-30" id="email" placeholder="Email" required autofocus>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid gap-3">
                                                <button type="submit" class="btn btn-lg btn-primary radius-30">Enviar</button>
                                                <a href="{{ route('login') }}" class="btn btn-lg btn-light radius-30">Regresar a identificarse</a>
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
