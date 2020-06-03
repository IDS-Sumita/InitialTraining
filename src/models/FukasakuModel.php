<?php

    class FukasakuModel extends database
    {
        public $db = 'fukasaku';

        public function getUser($user_id)
        {
            $sql="select * form mst_user where 'del_flg' = 0and 'user_id' = $user_id";
            if($this->query($sql,[])){
                return $this->fetchAll();
            }
        }
        //ユーザーリストを取得
        public function getUsers()
        {
            $sql="select * from mst_user where 'del_flg' = 0;";
            if($this->query($sql,[])){
                return $this->fetchAll();
            }
        }

        //事業部リストを取得
        public function department_select()
        {
            $sql= "select * from mst_department where 'del-flg' = 0;";
            if($this->query($sql,[])){
                return $this->fetchAll();
            }
        }
        //役職リストを取得
        public function position_select()
        {
            $sql="select * from mst_position where 'del-flg' = 0;";
            if($this->query($sql,[])){
                return $this->fetchAll();
            }
        }
        //給与リストを取得
        public function salary_select()
        {
            $sql= "select * from mst_salary where 'del-flg' = 0;";
            if($this->query($sql,[])){
                return $this->fetchAll();
            }
        }

        public function searchusers($data = [])
        {
            //SQLのもとを作成
            $sql= "select * from mst_user where 'del-flg' = 0";
            if(!empty($data['last_name'])) $sql .= " and last_name LIKE '%" . $data['last_name']."%'";
        }
    }