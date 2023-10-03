<?php
    echo 'localhost';
    $controller = isset($_GET['controllers']) ? $_GET['controllers']:'home';
    $action = isset($_GET['action']) ? $_GET['action']: 'index';
    if($controller=='home'){
        require_once APP_ROOT . '../controllers/AdminController.php';
        $homeController = new HomeController();
//Chọn hành động
        if($action=='index'){
            $homeController->index();
        }else{
        }
    }else{
        echo '404';
    }
?>