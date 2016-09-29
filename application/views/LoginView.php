<!DOCTYPE html>

<html class="bg-black">

    <head>

        <meta charset="UTF-8">

        <title><?php echo $title; ?></title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- bootstrap 3.0.2 -->

        <link href="<?php echo base_url() ; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- font Awesome -->

        <link href="<?php echo base_url() ; ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme style -->

        <link href="<?php echo base_url() ; ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

        <![endif]-->

    </head>

    <body class="bg-black">



        <div class="form-box" id="login-box">

            <div class="header"><i class="fa fa-lock"></i> LOGIN PANEL</div>

            <form action="<?php echo base_url(); ?>login/auth/" method="post">

                <div class="body bg-gray">

                	<?php if(!empty($error_message)) : ?>

                	<div class="form-group">

                		<label><?php echo $error_message; ?></label>

                	</div>

                	<?php endif; ?>

                    <div class="form-group">

                        <input type="text" name="userName" class="form-control" placeholder="username"/>

                    </div>

                    <div class="form-group">

                        <input type="password" name="passWord" class="form-control" placeholder="password"/>

                    </div>          

                    <div class="form-group">

                        <input type="checkbox" name="rememberMe"/> <?php echo lang("remember_me"); ?>

                    </div>

                </div>

                <div class="footer"> 

                	<input type="hidden" name="monitor" value="<?php echo $monitor; ?>" />                                                              

                	<input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_hash; ?>" />                                                              

                    <button type="submit" class="btn bg-olive btn-block">Log in</button>  

                    <!--

                    <p><a href="#">I forgot my password</a></p>

                    -->

                    <a href="<?php echo base_url(); ?>signup" class="text-center">Register a new membership</a>

                	

                </div>

            </form>



            <!--div class="margin text-center">

                <span>Sign in using social networks</span>

                <br/>

                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>

                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>

                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>



            </div-->

        </div>





        <!-- jQuery 2.0.2 -->

        <script src="<?php base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>

        <!-- Bootstrap -->

        <script src="<?php base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>   

        <script type="text/javascript">

            // Checking if in frame

            var ifIframe = function() {

                try {

                    return window.self !== window.top;

                } catch (e) {

                    return true;

                }

            }



            // Breakout from iframe

            var breakOut = function() {

                if (window.top != window.self) {

                    window.top.location = "<?php echo base_url(); ?>login";

                }

            }



            if(ifIframe()) breakOut();

        </script>     



    </body>

</html>