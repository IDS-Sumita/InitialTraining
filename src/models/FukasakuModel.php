<?php

    class FukasakuModel extends database
    {
        public $db = 'fukasakudb';

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
            if(!empty($data['first_name'])) $sql .= " and first_name LIKE '%" . $data['first_name']."%'";
            if(!empty($data['last_name_kana'])) $sql .= " and last_name_kana LIKE '%" . $data['last_name_kana']."%'";
            if(!empty($data['first_name_kana'])) $sql .= " and first_name_kana LIKE '%" . $data['first_name_kana']."%'";
            if(!empty($data['emp_num'])) $sql .= " and emp_num LIKE '%" . $data['emp_num']."%'";
            if(isset($data['department'])) $sql .= " and department_id" . $data['department']."%'";
            if(isset($data['position'])) $sql .= " and position_id" . $data['position']."%'";
            if(!empty($data['addres'])) $sql .= " and addres LIKE '%" . $data['addres']."%'";
            if(isset($data['male']) && isset($data['female'])){
                //チェックボックスは両方押されている場合、検索条件なしになる。
            }else{
                if(isset($data['male'])) $sql .= " and sex = 0";
                if(isset($data['female'])) $sql .= " and sex = 1";
            }
            if(isset($data['full_time']) && isset($data['contract'])){
                //チェックボックスは両方押されている場合、検索条件なしになる。
            }else{
                if(isset($data['full_time'])) $sql .= " and enp_status = 0";
                if(isset($data['contract'])) $sql .= " and enp_status = 1";
            }
            if(isset($data['mid_career']) && isset($data['new_graduate'])){
                //チェックボックスは両方押されている場合、検索条件なしになる。
            }else{
                if(isset($data['mid_career'])) $sql .= " and new_graduate = 0";
                if(isset($data['contract'])) $sql .= " and new_graduate = 1";
            }

            if($this->query($sql,[])){
                return $this->fetchAll();
            }
        }
        
    }