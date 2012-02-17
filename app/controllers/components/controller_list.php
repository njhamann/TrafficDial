<?php
// app/controllers/components/controller_list.php
class ControllerListComponent extends Object {
    public function get() {
        $controllerClasses = App::objects('controller');

        foreach($controllerClasses as $controller) { 
            if ($controller != 'App') { 
                App::import('Controller', $controller);
                $className = $controller . 'Controller';
                $actions = get_class_methods($className);
                foreach($actions as $k => $v) {
                    if ($v{0} == '_') {
                        unset($actions[$k]);
                    }
                }
                $parentActions = get_class_methods('AppController');
                $controllers[$controller] = array_diff($actions, $parentActions);
            }
        }
             
        return $controllers;  
    }
}
?>
