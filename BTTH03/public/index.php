<?php
    require_once('../app/config/config.php');
    require_once APP_ROOT. '/app/libs/DBConnection.php';
//     require_once APP_ROOT.'../app/controllers/HomeControllers.php';

    
if(isset($_GET['action']) && isset($_GET['controller'])){
    $controller = $_GET['controller']; //class
    $controllerPatient = ucfirst($controller) . "Controller";  //ClassController
    $controllerName = ucfirst($controller) . "Controller.php";
    $controllerFile = APP_ROOT . "/app/controllers/" . $controllerName;
    $action = $_GET["action"];
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        if(class_exists($controllerPatient)){
                $controller = new $controllerPatient();
                if(method_exists($controller,$action)){
                    $controller->$action();
                    // echo " có action";
                }else{
                    $controller->index();
                    // echo "Không có action";
                }
            // echo "Có class";
        }else{
            echo "Không có class";
        }
        // echo 'Có file';
    }else{
        // require_once(APP_ROOT . "/app/controllers/ClassController.php");
        // $ClassController = new ClassController();
        // $ClassController->index();
         echo 'Không có file';
    }
}else{
     require_once(APP_ROOT . "/app/controllers/PatientController.php");
    $PatientController = new PatientController();
    $PatientController->index();
      //echo 'Không có action';
}
//    $homeController = new HomeController();
//    $homeController->index();
    // $controller = isset ($_GET['controller']) ?$_GET['controller']:'home';
    // $action = isset ($_GET['action']) ?$_GET['action']:'index';
    // if($controller=='home'){
    //     require_once APP_ROOT. '/app/controllers/StudentControllers.php';
    //     $studentController = new StudentControllers();
    //     $studentController ->index();

    // }else if($controller=='student'){
    //     require_once APP_ROOT. '/app/controllers/StudentControllers.php';
    //     $studentController = new StudentControllers();
    //     $studentController->index();
    // }else{
    //     echo "Khong tồn tại URL";
    // }
?>