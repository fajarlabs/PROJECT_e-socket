<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <i class="fa fa-flask"></i> <?php echo lang("logo_title"); ?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav ">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 0 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->

                                    <ul class="menu">
                                        <!--
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!--
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>

                                    </ul>
                                </li> -->
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!--
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li> -->

                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo ucfirst($session_object->getUsername()); ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url(); ?>data/members/<?php echo $session_object->getPhoto(); ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo ucfirst($session_object->getUsername()); ?> - Member
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!--  li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" onClick="createTab('Member Profile','MemberProfileController');" class="btn btn-default btn-flat">My Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>data/members/<?php echo $session_object->getPhoto(); ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo ucfirst($session_object->getUsername()); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <div class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" id="search-input" class="form-control" placeholder="<?php echo lang("placeholder_menu_search"); ?>"/>
                            <span class="input-group-btn">
                                <button type='button' name='search' id='search-btn' class="btn btn-flat" disabled><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" id="search-list">
                        <li class="active">
                            <a href="#" onClick="createTab('Dashboard','dashboard')" >
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" onClick="createTab('List Project','project');"><i class="fa fa-rocket"></i>
                                <span>Project</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>Setting</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#" onClick="createTab('Change Password','change_password');"><i class="fa fa-angle-double-right"></i> Change Password</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>logout">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!--iframe width="100%" frameborder="0" src="assets/index.html" onLoad="iframeLoaded(this)" /-->
                <div class="row" style="margin:15px 1px 1px 1px;">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul id="tab-list" class="nav nav-tabs" role="tablist"></ul>
                        <!-- Tab panes -->
                        <div id="tab-content" class="tab-content tab-content-custom" ></div>
                    </div>
                </div>
            </aside><!-- /.right-side -->
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url() ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Library Sortable -->
        <script src="<?php echo base_url() ?>assets/js/Sortable.min.js"></script>
        <script type="text/javascript">
            window.tabID = 1;

            function removeTab(e) {
                // Casting element to element jquery
                var rmv_tabID = $(e).parents('a').attr('href');
                $(e).parents('li').remove();
                $(rmv_tabID).remove();

                //display first tab
                var tabFirst = $('#tab-list a:first');
                tabFirst.tab('show');                
            }

            // Create Tab
            function createTab(title,src) {

                // Inner function 
                function _createTab(title,src) {
                    // Create unix id
                    window.tabID++;
                    $('#tab-list').append($('<li><a data-title="'+title+'" href="#tab' + window.tabID + '" role="tab" data-toggle="tab">'+ title + ' &nbsp;<button class="close" type="button" onClick="removeTab(this)" title="Remove this page">×</button></a></li>'));
                    $('#tab-content').append($('<div class="tab-pane fade" style="height:100% !important;" id="tab' + window.tabID + '"></div>'));
                    // Open in frame
                    appFrame(window.tabID,src);
                    //display first tab
                    var tabLast = $('#tab-list a:last');
                    tabLast.tab('show');  
                }

                // Check if tab id is 1
                if(window.tabID < 2)
                    _createTab(title,src);
                else {
                    var _flag = 0;
                    $('#tab-list li a').each(function(data,obj){
                        // Checking tabs if data-title is same ?
                        if( title === $(this).attr("data-title")) {
                            // Show tab
                            var tabContentId = $(this).attr("href");
                            var contentId = tabContentId.replace("#","");
                            var frameId = contentId.replace("tab","");
                            // Refresh Iframe
                            $("#"+frameId).attr('src', $("#"+frameId).attr('src'));
                            // Show Tab
                            $(this).tab('show');
                            // Flag
                            _flag = 1;
                        }
                    });

                    // Anti duplicate tabs
                    if(_flag == 0) 
                        _createTab(title,src);
                }
            }

            // Create Frame
            function appFrame(tab_id,src) {
                // Create component iframe
                var ifr=$('<iframe/>', {
                    id : tab_id ,
                    src : src,
                    style:'height:0px;width:100%;frameborder:0;border:none;',
                    load:function(){
                        // Error getComputedStyle jika mengunakan style display none
                        // ini adalah bugs browser
                        // Remove display none
                        //$(this).show();
                        // Original height iframe
                        var h = $(this).contents().height();
                        // Default height iframe is 1024px
                        var defaultHeight = 1024;
                        if(h > defaultHeight)
                            // fit iframe
                            h = (h/5)+h;
                        else 
                            h = defaultHeight;
                        // Set height
                        $(this).height(h);
                    }
                });
                $('#tab'+tab_id).append(ifr);     
            }

            // App JS untuk navtabs dan iframe
            $(document).ready(function () {
                createTab("<?php echo $first_page['tab_title']; ?>","<?php echo $first_page['src']; ?>");
                // Filter menu
                var list = document.getElementById("tab-list");
                new Sortable(list);

            });

        </script>
        <script src="<?php echo base_url() ?>assets/js/jquery.fastLiveFilter.js"></script>
        <script>
            $(function() {
                $('#search-input').fastLiveFilter('#search-list');
            });
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
        </div><!-- ./wrapper --> 
    </body>
</html>