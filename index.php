<?php
/**
 * WEB_ROOT_FOLDER is the name of the parent folder you created these 
 * documents in.
 */
define('SERVER_ROOT' , 'comfy.gr/demo/framework');
//yoursite.com is your webserver
define('SITE_ROOT' , 'http://framework.gr');

/**
 * Fetch the router
 */
require_once(/*SERVER_ROOT . */'server/controller/' . 'router.php');
?>
<!--<html>
    <head>
        <script src="scripts/jquery.js" type="text/javascript"></script>
        <script src="client/JModel/model.js" type="text/javascript"></script>
        <script src="client/JView/view.js" type="text/javascript"></script>
        <script src="client/JController/controller.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="console">
        </div>
        <script type="text/javascript">
            $(function() {
                var model = new $.Model();
                var view = new $.View($("#console"));
                var controller = new $.Controller(model, view);
            });
        </script>
    </body>
</html>-->