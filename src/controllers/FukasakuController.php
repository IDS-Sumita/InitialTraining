<?php

    class FukasakuController extends framework
    {
        public $department =[];
        public $position = [];
        public $salary = [];
        public $model;

        public function __construct()
        {
            //データベースに接続
            $this->model = $this->model("FukasakuModel");
            //事業部リストの取得
            $department_data=$this->model->department_select();
            //事業部リストを配列化
            foreach($department_data as $depart){
                $this->department[$depart->department_id] = $depart->department_name;
            }
            //役職リストの取得
            $position_data = $this->model->position_select();
            //役職リストを配列化
            foreach($position_data as $pos){
                $this->position[$pos->position_id] = $pos->position_name;
            }

            //給与リストの取得
            $salary_data = $this->model->salary_select();
            //給与リストを配列化
            foreach($salary_data as $sal){
                $this->salary[$sal->salary_id] = [$sal->rank => $sal->class];
            }

        }

        public function index()
        {
           //ユーザーリストの取得
           $this->users = $this->model->getUsers();
           // Viewを表示
           $this->view("Fukasakuview");
        }

        public function search()
        {
            //ユーザーリストを取得
            $this->users = $this->model->searchusers($_POST);
            //Viewを表示
            $this->view("Fukasakuview");
        }

        public function register()
        {
            
        }

        public function edit()
        {

        }

    }

