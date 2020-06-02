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
                            data-traggle="collspace" data-target="#collspace" aria-expanded="true"
                             aria-controls="collspaceExample">▼閉じる
                    </button>           
                </div>
          </div>

          
      </div>
    </div>
</main>
</body>
</html>