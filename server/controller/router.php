<?php
include 'Home_Controller.php';
//$controlerMethod = new Controller_Method();

$data = json_decode($_POST['data']);
$request = $_SERVER['QUERY_STRING'];
$safeData = array();

if (is_object($data)||empty($request)) {
    
    $page = "Home_Controller";
    $target = /* SERVER_ROOT . */'server/controller/' . $page . '.php';
    
    if (file_exists($target)) {
        //modify page to fit naming convention
        $class = $page;
        $controller = new $class;
        $controller->main_page();
    }
    //echo "[{type:'text', name:'username'}, {type:'textarea',name:'comments'}]";
    /*foreach ($data as $key => $value) {
        
          //make an array with html entities and special chars of $POST[] data----
          //$safeData[htmlentities(htmlspecialchars($key), ENT_QUOTES)] = htmlentities(htmlspecialchars($value), ENT_QUOTES);
          //----------------------------------------------------------------------
         
        if ($value == "") {
            return "Δεν έχετε δώσει τιμές σε όλα τα κελιά.";
            exit;
        }
    }*/

    /*$method = htmlentities(htmlspecialchars($data->method), ENT_QUOTES);
    $res = call_user_func_array(array($controlerMethod, $method), array($data));
    if (is_object($res) || is_array($res)) {
        echo json_encode($res);
    } else {
        echo $res;
    }*/
} else {
    echo 'Δεν έχετε δικαιώματα';
}
?>
