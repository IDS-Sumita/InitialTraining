<?php

    class FukasakuController extends framework
    {
        public function __construct()
        {

        }

        public function index()
        {
          
           // Viewを表示
           $this->view("Fukasakuview");
        }

        public function search()
        {
            $this->view("Fukasakuview");
        }

        public function register()
        {
            
        }

        public function edit()
        {

        }

    }

