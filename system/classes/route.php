<?php

    class route
    {
        // デフォルトのアクセス先を規定
        public $controller = "DemoController";
        public $method = "index";
        public $params = [];

        public function __construct()
        {
            $url = $this->url();
            if (!empty($url)) {
                // コントローラー名の存在チェック
                if (file_exists("../src/controllers/" . $url[0] . ".php")) {
                    $this->controller = $url[0];
                    unset($url[0]);
                } else {
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Not Found Controller</div>";
                }
            }
            // コントローラーを読み込み
            require_once "../src/controllers/" . $this->controller . ".php";
            // コントローラーをインスタンス化
            $this->controller = new $this->controller;

            if (isset($url[1]) && !empty($url[1])) {
                // メソッド名の存在チェック
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                } else {
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Not Found Method</div>";
                }
            }

            // パラメータ格納
            if (isset($url)) {
                $this->params = $url;
            } else {
                $this->params = [];
            }
            // 関数を呼び出し
            call_user_func_array([$this->controller, $this->method], $this->params);

        }

        public function url()
        {
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
                // 空白を削除
                $url = rtrim($url);
                // URLに使用できない文字を削除
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // スラッシュで分割して配列化（0番目がコントローラー、1番目がメソッド、それ以降はパラメーター）
                $url = explode("/", $url);
                return $url;
            }
        }
    }
