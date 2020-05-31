<?php

    class DemoController extends framework
    {
        public $department = [];
        public $position = [];
        public $salary = [];
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
            // 給与リストの取得
            $salary_data = $this->model->getSalary();
            foreach ($salary_data as $sal) {
                $this->salary[$sal->salary_id] = [$sal->rank => $sal->class];
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

        public function register()
        {
            $error = [];
//            error_log(print_r($_POST, true), 3, "../log/debug.log");
            // バリデーション
            // 存在チェック
            if (empty($_POST['emp_num'])) $error['emp_num'] = 'required';
            if (empty($_POST['password'])) $error['password'] = 'required';
            if (empty($_POST['last_name'])) $error['last_name'] = 'required';
            if (empty($_POST['first_name'])) $error['first_name'] = 'required';
            if (empty($_POST['last_name_kana'])) $error['last_name_kana'] = 'required';
            if (empty($_POST['first_name_kana'])) $error['first_name_kana'] = 'required';
            if (isset($_POST['rank']) && !isset($_POST['class'])) $error['class'] = 'required';
            // 各種個別チェック
            if (!empty($_POST['password']) && !preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,32}+\z/i', $_POST['password'])) {
                $error['password'] = 'check';
            }
            if (!empty($_POST['mail']) && !preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_POST['mail'])) {
                $error['mail'] = 'check';
            }


            echo json_encode($error);
        }

        public function edit()
        {

        }

    }

