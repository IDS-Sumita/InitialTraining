<?php

    class DemoController extends framework
    {
        public $department = [];
        public $position = [];
        public $model;

        public function __construct()
        {
            // DBに接続
            $this->model = $this->model("DemoModel");
            // 事業部リストの取得
            $department_data = $this->model->getDepartment();
            // 事業部リストをidとnameで配列化
            foreach ($department_data as $dep) {
                $this->department[$dep->department_id] = $dep->department_name;
            }
            // 役職リストの取得
            $position_data = $this->model->getPosition();
            // 役職リストをidとnameで配列化
            foreach ($position_data as $pos) {
                $this->position[$pos->position_id] = $pos->position_name;
            }
        }

        public function index()
        {
            // ユーザーリストの取得
            $this->users = $this->model->getUsers();
            // Viewを表示
            $this->view("DemoView");
        }

        public function search()
        {
            // ユーザーリストの取得
            $this->users = $this->model->getSearchUsers($_POST);
            // Viewを表示
            $this->view("DemoView");
        }

    }

