<?php

    class framework
    {
        public function view($viewName)
        {
            if (file_exists("../src/views/" . $viewName . ".php")) {
                require_once "../src/views/" . $viewName . ".php";
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Not Founf View</div>";
            }
        }

        public function model($modelName)
        {
            if (file_exists("../src/models/" . $modelName . ".php")) {
                require_once "../src/models/" . $modelName . ".php";
                return new $modelName;
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Not Founf Model</div>";
            }
        }

    }