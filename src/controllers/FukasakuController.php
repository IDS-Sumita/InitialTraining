<?php

    class FukasakuController extends framework
    {
        public function __construct()
        {

        }

        public function index()
        {
           // ユーザーリストの取得
           $this->users = $this->model->getUsers();
           // Viewを表示
           $this->view("fukasakuview");
        }

        public function search()
        {

        }

        public function register()
        {
            
        }

        public function edit()
        {

        }

    }

