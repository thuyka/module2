<?php
class Application {
    public static $instance;

    public function __construct() {
    }

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();
$app3 = new Application();


