@extends('auth.auth')

@section('content')
    <div id="login-box" class="login-box visible widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-coffee green"></i>
                    Por favor , introduzca su información
                </h4>

                <div class="space-6"></div>

                <form role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="email" class="form-control"
                                   placeholder="Email" name="email"
                                   value="{{ old('email') }}"/>
                            <i class="ace-icon fa fa-envelope"></i>
                        </span>
                        </label>

                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="password" class="form-control"
                                       placeholder="Password" name="password"/>
                                <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <div class="space"></div>

                        <div class="clearfix">
                            <label class="inline">
                                <input type="checkbox" class="ace" name="remember"/>
                                <span class="lbl"> Recuérdame </span>
                            </label>

                            <button type="submit"
                                    class="width-35 pull-right btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-key"></i>
                                <span class="bigger-110">Inicia sesión</span>
                            </button>
                        </div>

                        <div class="space-4"></div>
                    </fieldset>
                </form>

                <div class="social-or-login center">
                    <span class="bigger-110">O inicia sesión usando</span>
                </div>

                <div class="space-6"></div>

                <div class="social-login center">
                    <a class="btn btn-primary">
                        <i class="ace-icon fa fa-facebook"></i>
                    </a>

                    <a class="btn btn-info">
                        <i class="ace-icon fa fa-twitter"></i>
                    </a>

                    <a class="btn btn-danger">
                        <i class="ace-icon fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <!-- /.widget-main -->

            <div class="toolbar clearfix">
                <div>
                    <a href="{{ url('/password/email') }}" data-target="#forgot-box" class="forgot-password-link">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Olvidé mi contraseña
                    </a>
                </div>

                <div>
                    <a href="{{ url('/auth/register') }}" data-target="#signup-box" class="user-signup-link">
                        Quiero registrarme
                        <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.widget-body -->
    </div>
    <!-- /.login-box -->
@endsection
