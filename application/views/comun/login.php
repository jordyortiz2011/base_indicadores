<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Login Page - Ace Admin</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?=base_url('public')?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=base_url('public')?>/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?=base_url('public')?>/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?=base_url('public')?>/assets/css/ace.min.css" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href="<?=base_url('public')?>/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-layout light-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-bar-chart-o green"></i>                                     
                                    <span class="grey" id="id-text2">SIGESIND v1.0</span>
                                </h1>
                                <h4 class="black" id="id-company-text"><span class="red">Petro</span>Perú&copy;</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <center>Iniciar Sessión</center>                                               
                                            </h4>

                                            <div class="space-6"></div>
                                            <?php 
                                           if( ! isset( $on_hold_message ) )
                                            {
                                                if( isset( $login_error_mesg ) )
                                                {
                                                    echo '
                                                        <div style="border:1px solid red;">
                                                            <p>
                                                                Error de Logeo #' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Nombre de usuario, correo o contraseña invalido.
                                                            </p>
                                                            <p>
                                                               usuario, correo y contraseña son sensibles a Mayúscula
                                                            </p>
                                                        </div>
                                                    ';
                                                }
                                            

                                            //<!--<form>-->
                                            
                                               echo form_open( $login_url, array('class' => 'std-form') ); 
                                           ?>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="login_string" id="login_string" class="form-control" placeholder="usuario o correo" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" name="login_pass" id="login_pass"  class="form-control" placeholder="contraseña" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>
                                                    <!-- Para permitir recordar sessión -->
                                                    <?php
                                                        if( config_item('allow_remember_me') )
                                                        {
                                                    ?>                                                    
                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" id="remember_me" name="remember_me" />
                                                            <span class="lbl"> Recordar</span>
                                                        </label>
                                                    <?php
                                                        }
                                                    ?>
                                                      <!--
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-primary">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Entrar</span>
                                                        </button>
                                                       -->
                                                       <input type="submit" name="submit" value="Entrar" id="submit_button" 
                                                       class="width-35 pull-right btn btn-sm btn-primary" />
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>
                                           <?php
                                            }
                                           else
                                            {
                                                // EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE 
                                                echo '
                                                    <div style="border:1px solid red;">
                                                        <p>
                                                            Intento de Inicio de sesión excedido
                                                        </p>
                                                        <p>
                                                           
                                                            Tú has excedido el número máximo de Logeos fallidos <br />
                                                            que este sistema permite.
                                                        <p>
                                                        <p>
                                                            Su acceso a "Iniciar Sesión" y "Recuperación de Cuenta" ha sido bloqueada ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutos.
                                                        </p>
                                                        <p>
                                                            Por favor use el <a href="/examples/recover">Recuperar Contraseña</a> después  de ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutos ,<br />
                                                            o contacte al administrador para acceder a su cuenta
                                                        </p>
                                                    </div>
                                                ';
                                            }   
                                          ?>

                                            <div class="space-6"></div>

                                            
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar clearfix">
                                            <div>
                                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Olvidé mi Contraseña
                                                </a>
                                            </div>

                                           <!-- <div>
                                                <a href="#" data-target="#signup-box" class="user-signup-link">
                                                    I want to register
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </div>-->
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="ace-icon fa fa-key"></i>
                                                Recuperar Contraseña
                                            </h4>

                                            <div class="space-6"></div>
                                            <p>
                                                Ingrese su correo para recibir instrucciones
                                            </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Correo" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                                            <span class="bigger-110">¡Enviar!</span>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                Volver 
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.forgot-box -->

                              
                            </div><!-- /.position-relative -->

                            <div class=" align-right">
                                <br />
                                &nbsp;
                                <a id="btn-login-dark" href="#">Oscuro</a>
                                &nbsp;
                                <span class="blue">/</span>
                                &nbsp;
                                <a id="btn-login-blur" href="#">Azúl</a>
                                &nbsp;
                                <span class="blue">/</span>
                                &nbsp;
                                <a id="btn-login-light" href="#">Claro</a>
                                &nbsp; &nbsp; &nbsp;
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?= base_url('public')?>/assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
             $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible');//hide others
                $(target).addClass('visible');//show target
             });
            });
            
            
            
            //you don't need this, just used for changing background
            jQuery(function($) {
             $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');
                
                e.preventDefault();
             });
             
            });
        </script>
    </body>
</html>
