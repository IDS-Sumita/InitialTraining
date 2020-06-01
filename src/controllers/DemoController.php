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
            error_log(print_r($_POST, true), 3, "../log/debug.log");
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
            // バリデーションの結果を返却
            if (!empty($error)) echo json_encode($error);

            // 登録用データの作成
            $register_data = $_POST;
            $today = date('Y-m-d H:i:s');
            // チェックボックス系のデータを正しいデータに変換
            $register_data['user_auth'] = (isset($register_data['user_auth']) && $register_data['user_auth'] == 'on') ? 1 : 0;
            if (isset($register_data['chk_written_oath']) && $register_data['chk_written_oath'] == 'on') $register_data['chk_written_oath'] = $today;
            if (isset($register_data['chk_instructions']) && $register_data['chk_instructions'] == 'on') $register_data['chk_instructions'] = $today;
            if (isset($register_data['chk_emp_agrmnt']) && $register_data['chk_emp_agrmnt'] == 'on') $register_data['chk_emp_agrmnt'] = $today;
            if (isset($register_data['chk_notice_of_emp']) && $register_data['chk_notice_of_emp'] == 'on') $register_data['chk_notice_of_emp'] = $today;
            if (isset($register_data['chk_hired_emp_agrmnt']) && $register_data['chk_hired_emp_agrmnt'] == 'on') $register_data['chk_hired_emp_agrmnt'] = $today;
            $register_data['update_pass_date'] = $today;
            $register_data['update_pass_flg'] = 0;
            $register_data['del_flg'] = 0;
            $register_data['version'] = 1;
            $register_data['create_date'] = $today;
            $register_data['create_user'] = 1;
            $register_data['update_date'] = $today;
            $register_data['update_user'] = 1;
            error_log(print_r($register_data, true), 3, "../log/debug.log");
        }

        public function edit()
        {

        }

    }

