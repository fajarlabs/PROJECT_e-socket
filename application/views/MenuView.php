<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- domenu master -->
    <link href="<?php echo base_url(); ?>assets/js/plugins/domenu-master/jquery.domenu-0.48.53.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<style>
.cf:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

* html .cf {zoom: 1;}

*:first-child+html .cf {zoom: 1;}
    </style>
        <!-- jQuery 2.0.2 -->
        <script type="text/javascript">
            // Global base url
            window.base_url = "<?php echo base_url(); ?>";
        </script>

        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/domenu-master/jquery.domenu-0.48.53.js"></script>   
        <script>     
        $(document).ready(function(){
            var updateOutput = function(e) {
                var list   = e.length ? e : $(e.target),
                output = list.data('output');
                if (window.JSON) {
                    
                    // Not using textarea debug
                    output.val(window.JSON.stringify(list.domenu('serialize')));
                } else {
                    alert("JSON browser support required for get data");
                    output.val('JSON browser support required for this demo.');
                }
            };

            $('#domenu-1').domenu({
                slideAnimationDuration: 0,
                onDomenuInitialized: [function() {
                    console.log('event: onDomenuInitialized', 'arguments:', arguments, 'context:', this);
                }],
                data: '<?php echo $menu_json; ?>'
            }).parseJson()
            .onParseJson(function() {
                console.log('event: onFromJson', 'arguments:', arguments, 'context:', this);
            })
            .onToJson(function() {
                console.log('event: onToJson', 'arguments:', arguments, 'context:', this);
            })
            .onSaveEditBoxInput(function() {
                console.log('event: onSaveEditBoxInput', 'arguments:', arguments, 'context:', this);
                updateOutput($('#domenu-1').data('output', $('#nestable-output')));
            })
            .onItemDrag(function() {
                console.log('event: onItemDrag', 'arguments:', arguments, 'context:', this);
            })
            .onItemDrop(function() {
                console.log('event: onItemDrop', 'arguments:', arguments, 'context:', this);
            })
            .onItemAdded(function() {
                console.log('event: onItemAdded', 'arguments:', arguments, 'context:', this);

            })
            .onItemRemoved(function() {
                console.log('event: onItemRemoved', 'arguments:', arguments, 'context:', this);
            })
            .onItemStartEdit(function() {
                console.log('event: onItemStartEdit', 'arguments:', arguments, 'context:', this);
            })
            .onItemEndEdit(function() {
                console.log('event: onItemEndEdit', 'arguments:', arguments, 'context:', this);
            })
            .onItemAddChildItem(function() {
                console.log('event: onItemAddChildItem', 'arguments:', arguments, 'context:', this);
            });

            $("#save-menu").on("click",function() {
                updateOutput($('#domenu-1').data('output', $('#nestable-output')));
                $.post( window.base_url+"MenuController/webService/update/",{ json_menu : $('#nestable-output').val(), <?php echo $csrf_token_name; ?> : "<?php echo $csrf_hash; ?>"  }, function( data ) {
                    if("success" === data)
                        alert("Saved!");
                    else 
                        alert("Failed!");
                }).error(function() {
                    alert("Error!");
                });                
            });

        });
</script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
      </head>
      <body>
        <div class="wrapper row-offcanvas">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Setting</li>
                    <li class="active">Menus</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="mod mod-flat-glass">
                            <div class="dd" id="domenu-1">

                                <button id="domenu-add-item-btn" class="dd-new-item">+</button>
                                <!-- .dd-item-blueprint is a template for all .dd-item's -->
                                <li class="dd-item-blueprint">
                                    <div class="dd-handle dd3-handle">&nbsp;</div>
                                    <div class="dd3-content">
                                        <span>[item_name]</span>
                                        <!-- @migrating-from 0.13.29 button container-->
                                        <div class="button-container">
                                            <!-- @migrating-from 0.13.29 add button-->
                                            <button class="item-add">+</button>
                                            <button class="item-remove" data-confirm-class="item-remove-confirm">&times;</button>
                                        </div>
                                        <div class="dd-edit-box" style="display: none;">
                                            <!-- data-placeholder has a higher priority than placeholder -->
                                            <!-- data-placeholder can use token-values; when not present will be set to "" -->
                                            <!-- data-default-value specifies a default value for the input; when not present will be set to "" -->
                                            <input type="text" name="title" autocomplete="off" placeholder="Item" data-placeholder="Menu name ?" data-default-value="doMenu List Item. {?numeric.increment}">
                                            <input type="text" name="http" placeholder="Link or http ?" value="" />
                            <!--select name="superselect">
                                <option>select something...</option>
                                <optgroup label="Pages">
                                    <option value="1">http://example.com/page/1</option>
                                    <option value="2">http://example.com/page/2</option>
                                </optgroup>
                                <optgroup label="Categories">
                                    <option value="3">News</option>
                                    <option value="4">Stories</option>
                                </optgroup>
                            </select-->
                            <!-- @migrating-from 0.13.29 an element ".end-edit" within ".dd-edit-box" exists the edit mode on click -->
                            <i class="end-edit">&#x270e;</i>
                        </div>
                    </div>
                </li>
                <ol class="dd-list"></ol>
                <br />
                <button class="btn btn-primary btn-sm" id="save-menu"><i class="fa fa-save"></i> &nbsp;Save</button>
            </div>
        </div>
    </section>
    <br />
    <textarea style="visibility:hidden;" id="nestable-output"></textarea>
</div>
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- ./wrapper -->
</body>
</html>