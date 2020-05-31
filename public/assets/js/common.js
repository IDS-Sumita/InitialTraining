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
});
