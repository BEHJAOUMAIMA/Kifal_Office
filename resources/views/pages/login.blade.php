<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">
    <head>
        @include('includes.head')
        <title>Login </title>
        <!-- Core CSS -->
        <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
        <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
        <link rel="stylesheet" href="../../assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
        <!-- Vendor -->
        <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

        <!-- Page -->
        <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css" />
    </head>

    <body>
        <!-- Content -->

        <div class="authentication-wrapper authentication-cover authentication-bg">
            <div class="authentication-inner row">
                <!-- /Left Text -->
                <div class="d-none d-lg-flex col-lg-6 p-0">
                    <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                        <img
                            src="../../assets/img/illustrations/auth-login-illustration-light.png"
                            alt="auth-login-cover"
                            class="img-fluid my-5 auth-illustration"
                            data-app-light-img="illustrations/auth-login-illustration-light.png"
                            data-app-dark-img="illustrations/auth-login-illustration-dark.png" />

                        <img
                            src="../../assets/img/illustrations/bg-shape-image-light.png"
                            alt="auth-login-cover"
                            class="platform-bg"
                            data-app-light-img="illustrations/bg-shape-image-light.png"
                            data-app-dark-img="illustrations/bg-shape-image-dark.png" />
                    </div>
                </div>
                <!-- /Left Text -->

                <!-- Login -->
                <div class="d-flex col-12 col-lg-6 align-items-center p-sm-5 p-3">

                    <div class="w-px-500 mx-auto">
                        <div class="mb-5">
                             @if (Session::has('success'))
                                <p class="alert alert-success mt-1 mb-3 text-center">{{session('success')}}</p>
                            @endif
                        </div>
                        <div class="mb-5">
                             @if (Session::has('success1'))
                                <p class="alert alert-success mt-1 mb-3 text-center">{{session('success1')}}</p>
                            @endif
                        </div>

                        <h3 class="mb-1 fw-bold text-center mb-3">Bienvenue Chez Kifal Auto ! 👋</h3>
                        <p class="mb-4 text-center">Veuillez vous connecter à votre compte et commencer l'aventure.</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="formAuthentication" class="mb-3" action="{{route('login.submit')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Entrer votre adresse Mail" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Mot de passe</label>
                                    <a href="#"> <small>Mot de passe oublié ?</small></a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember-me" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Se souvenir de moi </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100"> Se Connecter </button>
                        </form>
                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>

        <!-- / Content -->
        @include('includes.scripts')
        <!-- Core JS -->
        <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
        <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
        <!-- Vendors JS -->
        <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
        <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
        <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
        <!-- Page JS -->
        <script src="../../assets/js/pages-auth.js"></script>
    </body>
</html>
