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
    <div class="accordion mb-2" id="accordionExample">
        <div class="card">
            <div class="card-header row" id="headingOne">
                <div class="col">検索条件</div>
                <div class="col text-right">
                    <button id="search-header" class="btn btn-link p-0 text-right" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ▼ 閉じる
                    </button>
                </div>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body pb-0">
                    <form action="<?= BASEURL ?>/DemoController/search" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" name="last_name" placeholder="姓"
                                       value="<?= (isset($_POST['last_name'])) ? $_POST['last_name'] : '' ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" name="first_name" placeholder="名"
                                       value="<?= (isset($_POST['first_name'])) ? $_POST['first_name'] : '' ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" name="last_name_kana" placeholder="姓カナ"
                                       value="<?= (isset($_POST['last_name_kana'])) ? $_POST['last_name_kana'] : '' ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" name="first_name_kana" placeholder="名カナ"
                                       value="<?= (isset($_POST['first_name_kana'])) ? $_POST['first_name_kana'] : '' ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control form-control-sm" name="emp_num" placeholder="社員番号" min="0"
                                       value="<?= (isset($_POST['emp_num'])) ? $_POST['emp_num'] : '' ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <select name="department" class="form-control form-control-sm">
                                    <option value="" disabled selected>部署</option>
                                    <?php
                                        foreach ($this->department as $id => $name) {
                                            if (isset($_POST['department']) && $_POST['department'] == $id) {
                                                echo "<option value=\"$id\" selected>$name</option>";
                                            } else {
                                                echo "<option value=\"$id\">$name</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="position" class="form-control form-control-sm">
                                    <option value="" disabled selected style='display:none;'>役職</option>
                                    <?php
                                        foreach ($this->position as $id => $name) {
                                            if (isset($_POST['position']) && $_POST['position'] == $id) {
                                                echo "<option value=\"$id\" selected>$name</option>";
                                            } else {
                                                echo "<option value=\"$id\">$name</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" name="address" placeholder="住所"
                                       value="<?= (isset($_POST['address'])) ? $_POST['address'] : '' ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="male"
                                        <?php if (isset($_POST['male'])) echo "checked"; ?>>
                                    <label class="form-check-label" for="male">男性</label>
                                </div>
                            </div>
                            <div class="form-group col-md-1 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="formg-check-input" type="checkbox" name="female"
                                        <?php if (isset($_POST['female'])) echo "checked"; ?>>
                                    <label class="form-check-label" for="female">女性</label>
                                </div>
                            </div>
                            <div class="form-group col-md-1"></div>
                            <div class="form-group col-md-1 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="full_time"
                                        <?php if (isset($_POST['full_time'])) echo "checked"; ?>>
                                    <label class="form-check-label" for="full_time">正社員</label>
                                </div>
                            </div>
                            <div class="form-group col-md-2 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="formg-check-input" type="checkbox" name="contract"
                                        <?php if (isset($_POST['contract'])) echo "checked"; ?>>
                                    <label class="form-check-label" for="contract">契約社員</label>
                                </div>
                            </div>
                            <div class="form-group col-md-1 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="formg-check-input" type="checkbox" name="mid_career"
                                        <?php if (isset($_POST['mid_career'])) echo "checked"; ?>>
                                    <label class="form-check-label" for="mid_career">中途</label>
                                </div>
                            </div>
                            <div class="form-group col-md-1 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="new_graduate"
                                        <?php if (isset($_POST['new_graduate'])) echo "checked"; ?>>
                                    <label class="form-check-label" for="new_graduate">新卒</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <button type="button" id="search-clear" class="btn btn-sm btn-outline-secondary px-3 mx-2">
                                クリア
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary px-4 mx-2">検索</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-2">
        <div class="col-md-6">検索結果：<?= count($this->users); ?>件</div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-sm btn-outline-primary px-2">社員登録</button>
        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">社員番号</th>
            <th scope="col">名前</th>
            <th scope="col">部署</th>
            <th scope="col">役職</th>
            <th scope="col">連絡先</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->users as $user): ?>
            <tr>
                <td><?= $user->emp_num ?></td>
                <td><?= $user->last_name . "\t" . $user->first_name ?></td>
                <td><?= $this->department[$user->department_id] ?></td>
                <td><?= $this->position[$user->position_id] ?></td>
                <td><?= $user->phone_num ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>