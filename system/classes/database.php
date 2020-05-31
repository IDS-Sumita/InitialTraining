<?php

    class database
    {
        public $host = DB_HOST;
        public $user = DB_USER;
        public $pass = DB_PASS;
        public $db;
        public $con;
        public $result;

        public function __construct()
        {
            // DB接続
            try {
                $dsn = sprintf("mysql:host=%s;dbname=%s", $this->host, $this->db);
                $this->con = new PDO($dsn, $this->user, $this->pass);

                return $this->con;
            } catch (PDOException $e) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">DB connection Error: " . $e->getMessage() ."</div>";
            }
        }

        public function query($qry, $params = [])
        {
            // SQLを実行
            if (empty($params)) {
                $this->result = $this->con->prepare($qry);
                return $this->result->execute();
            } else {
                $this->result = $this->con->prepare($qry);
                return $this->result->execute($params);
            }
        }

        public function rowCount()
        {
            return $this->result->rowCount();
        }

        public function fetch()
        {
            return $this->result->fetch(PDO::FETCH_OBJ);
        }

        public function fetchAll()
        {
            return $this->result->fetchAll(PDO::FETCH_OBJ);
        }
    }