<x-front-layout>
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('front/images/banner/edit.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>User Profile </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Perfil Usuario</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h4>Perfil de usuario</h4>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html">
                                            <img
                                                src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                                alt=""></a></figure>
                                    <h5><a href="blog-details.html">{{ Auth::user()->name }}</a></h5>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>

                        @include('frontend.profile.innersidebar')

                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">

                                <div class="lower-content">
                                    <h3>Tus datos</h3>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card-body" style="background-color: #1baf65;">
                                                <h1 class="card-title" style="color: white; font-weight: bold;">0</h1>
                                                <h5 class="card-text" style="color: white;"> Propiedades aprobadas</h5>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card-body" style="background-color: #ffc107;">
                                                <h1 class="card-title" style="color: white; font-weight: bold; ">0</h1>
                                                <h5 class="card-text" style="color: white;"> Propiedades pendientes</h5>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="card-body" style="background-color: #002758;">
                                                <h1 class="card-title" style="color: white; font-weight: bold;">0</h1>
                                                <h5 class="card-text" style="color: white; "> Propiedades
                                                    rechazadas</h5>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">

                                <div class="lower-content">
                                    <h3>Perfil</h3>
                                    <hr>
                                    <form id="inspiry-edit-user" class="submit-form" method="post"
                                          action="{{ route('profile.imageupdate') }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-option user-profile-img-wrapper clearfix">
                                                    <div id="user-profile-img">
                                                        <div class="profile-thumb">
                                                            <img class="img-responsive"
                                                                 src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                                                 alt="User Image">
                                                            <input type="hidden" class="profile-image-id"
                                                                   name="profile-image-id" value="4018">
                                                        </div>
                                                    </div>
                                                    <!-- #user-profile-img -->
                                                    <div class="profile-img-controls">
                                                        <ul class="field-description list-unstyled">
                                                            <li><span>*</span>La imagen de perfil debe tener un ancho
                                                                mínimo y
                                                                altura de 220px.
                                                            </li>
                                                            <li><span>*</span>Asegúrese de guardar los cambios después
                                                                de cargar el
                                                                nueva imagen.
                                                            </li>
                                                        </ul>
                                                        <input id="photo" name="photo" type="file"
                                                               class="btn-default"
                                                               accept="image/png, image/gif, image/jpeg" required>
                                                        {{--                                                    <a id="select-profile-image" class="btn-default" href="#"><i--}}
                                                        {{--                                                            class="fa fa-picture-o"></i>Cambiar</a>--}}
                                                        @if (session('status') === 'image-updated')
                                                            <div id="errors-log">Imagen Actualizada</div>
                                                            <div id="plupload-container"></div>
                                                        @endif
                                                    </div>
                                                    <!-- .profile-img-controls -->
                                                </div>
                                                <!-- .user-profile-img-wrapper -->
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 20px">
                                            <button type="submit" id="update-user" name="update-user"
                                                    class="theme-btn btn-one">Guardar
                                            </button>
                                        </div>
                                        @if (session('status') === 'password-updated')
                                            <blockquote style="margin-top: 20px">
                                                <h4>Imagen actualizada.</h4>
                                            </blockquote>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->


    @include('frontend.components.suscribe')


</x-front-layout>
