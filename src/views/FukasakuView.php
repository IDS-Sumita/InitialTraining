<html>
<head>
    <meta charset="utf-8">
    <title><?= SYSTEM_NAME ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/common.js"></script>
</head>
<body>
<header>
    <?php include 'common.php'; ?>
</header>
<main class="mx-5 mt-3">
    <h4><?= SEARCH ?></h4>
    <div class="accordion" id="accordionExample">
      <div class="card">
          <div class="card-header" id="headingOne">
              <div class="col">検索条件</div>
              <div class="col text-right">
                    <button type="button" class="btn btn-info p-0 text-right" id="serach-header"
                            data-traggle="collspace" data-target="#collspaceOne" aria-expanded="true"
                             aria-controls="collspaceOne">▼閉じる
                    </button>           
                </div>
          </div>

            <div id="collspaceOne" class="collspace show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body pb-0">
                  <form action="<?= BASEURL ?>/DemoController/serach" method="post">
                    <div class="form-row">
                       <div class="form-group col-md-3">
                           <input type="text" id="last_name" class="form-control form-control-sm" name="last_name"
                                  placeholder="姓"  value="<?= (isset($_POST['last_name'])) ? $_POST['last_name'] : '' ?>">
                        </div>
                        <div class="form-group col-md-3">
                           <input type="text" id="first_name" class="form-control form-control-sm" name="first_name"
                                  placeholder="名"  value="<?= (isset($_POST['first_name'])) ? $_POST['first_name'] : '' ?>">
                        </div>
                        <div class="form-group col-md-3">
                           <input type="text" id="last_name_kana" class="form-control form-control-sm" name="last_name_kana"
                                  placeholder="姓かな"  value="<?= (isset($_POST['last_name_kana'])) ? $_POST['last_name_kana'] : '' ?>">
                        </div>
                        <div class="form-group col-md-3">
                           <input type="text" id="first_name_kana" class="form-control form-control-sm" name="first_name_kana"
                                  placeholder="名かな"  value="<?= (isset($_POST['first_name_kana'])) ? $_POST['first_name_kana'] : '' ?>">
                        </div>
                        <div class="form-row">
                           <div class="form -group col-md-3">
                               <input type="number" id="emp_num" class="form-control form-control-sm" name="emp_num"
                                       placeholder="社員番号" min="0" max="11" 
                                       value="<?= (isset($_POST['first_name_kana'])) ? $_POST['first_name_kana'] : '' ?>">
                           </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
</main>
</body>
</html>