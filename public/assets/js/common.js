$(function () {
    // 検索条件の開閉
    $('#search-header').on('click', function () {
        var text = $(this).text();
        if (text == '▲ 開く') {
            $(this).text("▼ 閉じる");
        } else {
            $(this).text("▲ 開く");
        }
    });
    // 検索フォームのクリア
    $('#search-clear').on('click', function () {
        $(this.form).find("input, select, textarea").not(":button, :submit, :reset, :hidden").val("").prop("checked", false).prop("selected", false);
    });

    // 年俸の自動計算
    // 登録モーダル用
    var basic_salary;
    var annual_salary;
    $('#register_basic_salary').change(function () {
        basic_salary = $(this).val();
        annual_salary = basic_salary * 16;
        $('#register_annual_salary').val(annual_salary);
    });
    // 編集モーダル用
    $('#edit_basic_salary').change(function () {
        basic_salary = $(this).val();
        annual_salary = basic_salary * 16;
        $('#edit_annual_salary').val(annual_salary);
    });

    // 格・級の連動
    // 登録モーダル用
    var val1;
    var val2;
    var register_class = $('#register_class');
    var register_original = register_class.html(); // 後のイベントで、不要なoption要素を削除するため、オリジナルをとっておく
    // 格のselect要素が変更になるとイベントが発生
    $('#register_rank').change(function () {
        // 選択された格のvalueを取得し変数に入れる
        val1 = $(this).val();
        // 削除された要素をもとに戻すため.html(register_original)を入れておく
        register_class.html(register_original).find('option').each(function () {
            val2 = $(this).data('val');
            if (val1 != val2) {
                // valueと異なるdata-valを持つ要素を削除
                $(this).not(':first-child').remove();
            }
        });
        // 格のselect要素が未選択の場合、級をdisabledにする
        if ($(this).val() === '') {
            register_class.attr('disabled', 'disabled');
        } else {
            register_class.removeAttr('disabled');
        }
    });
    // 編集モーダル用
    var edit_class = $('#wdit_class');
    var edit_original = edit_class.html(); // 後のイベントで、不要なoption要素を削除するため、オリジナルをとっておく
    // 格のselect要素が変更になるとイベントが発生
    $('#edit_rank').change(function () {
        // 選択された格のvalueを取得し変数に入れる
        val1 = $(this).val();
        // 削除された要素をもとに戻すため.html(edit_original)を入れておく
        edit_class.html(edit_original).find('option').each(function () {
            val2 = $(this).data('val');
            if (val1 != val2) {
                // valueと異なるdata-valを持つ要素を削除
                $(this).not(':first-child').remove();
            }
        });
        // 格のselect要素が未選択の場合、級をdisabledにする
        if ($(this).val() === '') {
            edit_class.attr('disabled', 'disabled');
        } else {
            edit_class.removeAttr('disabled');
        }
    });

    // 登録モーダルからAJAX
    $('#register').click(function () {
        // .phpファイルへのアクセス
        console.log($(this.form).attr('action'));
        $.ajax({
            url: $(this.form).attr('action'),
            type: $(this.form).attr('method'),
            data: $(this.form).serialize(),
        })
        // 検索成功時にはページに結果を反映
            .done(function (data) {
                let error = JSON.parse(data);
                // いったん全部の赤枠を削除
                $(".is-invalid").each(function(){
                    $(this).removeClass("is-invalid");
                });
                $(".invalid-feedback").each(function(){
                    $(this).addClass("d-none");
                });
                // バリデーションを返す
                for (let key in error) {
                    if (error[key] == 'required') {
                        $('#register_' + key).addClass("is-invalid");
                        $('#required_register_' + key).removeClass("d-none");
                    }
                    if (error[key] == 'check') {
                        $('#register_' + key).addClass("is-invalid");
                        $('#check_register_' + key).removeClass("d-none");
                    }
                    console.log('key:' + key + ' value:' + error[key]);
                }
            })
            // 検索失敗時には、その旨をダイアログ表示
            .fail(function () {
                window.alert('データの送信に失敗しました。');
            });
    });

});
