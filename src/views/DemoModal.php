<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body container">
                <h4 class="modal-title" id="registerModalLabel"><?= REGISTER ?></h4>
                <form class="mx-2 mt-4" action="<?= BASEURL ?>/DemoController/register" method="post">
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_emp_num">社員番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_emp_num" class="form-control form-control-sm" name="emp_num" min="0">
                            <div id="required_register_emp_num" class="error invalid-feedback d-none">入力してください。</div>
                        </div>
                        <div class="col-md-1"><label for="register_password">パスワード</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="password" id="register_password" class="form-control form-control-sm" name="password">
                            <div id="required_register_password" class="error invalid-feedback d-none">入力してください。</div>
                            <div id="check_register_password" class="error invalid-feedback d-none">半角英数字記号混合8~32字で入力してください。</div>
                        </div>
                        <div class="col-md-2"><label class="form-check-label" for="register_user_auth">システム管理者</label></div>
                        <div class="col-md-1">
                            <input id="register_user_auth" class="form-check-input" type="checkbox" name="user_auth">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_last_name">姓</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="register_last_name" class="form-control form-control-sm" name="last_name">
                            <div id="required_register_last_name" class="error invalid-feedback d-none">入力してください。</div>
                        </div>
                        <div class="col-md-1"><label for="register_first_name">名</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="register_first_name" class="form-control form-control-sm" name="first_name">
                            <div id="required_register_first_name" class="error invalid-feedback d-none">入力してください。</div>
                        </div>
                        <div class="col-md-1"><label for="register_last_name_kana">姓カナ</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="register_last_name_kana" class="form-control form-control-sm" name="last_name_kana">
                            <div id="required_register_last_name_kana" class="error invalid-feedback d-none">入力してください。</div>
                        </div>
                        <div class="col-md-1"><label for="register_first_name_kana">名カナ</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="register_first_name_kana" class="form-control form-control-sm" name="first_name_kana">
                            <div id="required_register_first_name_kana" class="error invalid-feedback d-none">入力してください。</div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_birthday">生年月日</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="date" id="register_birthday" class="form-control form-control-sm" name="birthday">
                        </div>
                        <div class="col-md-1"><label for="register_sex">性別</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="sex" id="register_sex" class="form-control form-control-sm">
                                <option value="0">男性</option>
                                <option value="1">女性</option>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="register_mail">メール</label></div>
                        <div class="col-md-5 pr-4">
                            <input type="email" id="register_mail" class="form-control form-control-sm" name="mail">
                            <div id="check_register_mail" class="error invalid-feedback d-none">正しいメールアドレスの形式で入力してください。</div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="regitser_emp_status">雇用携帯</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="emp_status" id="regitser_emp_status" class="form-control form-control-sm">
                                <option value="0">正社員</option>
                                <option value="1">契約社員</option>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="regitser_department">部署</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="department" id="regitser_department" class="form-control form-control-sm">
                                <?php
                                    foreach ($this->department as $id => $name) {
                                        echo "<option value=\"$id\">$name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="register_position">役職</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="position" id="register_position" class="form-control form-control-sm">
                                <?php
                                    foreach ($this->position as $id => $name) {
                                        echo "<option value=\"$id\">$name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="register_occupation">職種</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="register_occupation" class="form-control form-control-sm" name="occupation">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_postal_code">郵便番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_postal_code" class="form-control form-control-sm" name="postal_code" min="0"
                                   maxlength="7">
                        </div>
                        <div class="col-md-1"><label for="register_address">住所</label></div>
                        <div class="col-md-8 pr-4">
                            <input type="text" id="register_address" class="form-control form-control-sm" name="address">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_enrolled_status">在籍状況</label></div>
                        <div class="col-md-2 pr-4">
                            <select id="register_enrolled_status" class="form-control form-control-sm" name="enrolled_status">
                                <option value="0" selected>在籍</option>
                                <option value="1">休職</option>
                                <option value="2">退職</option>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="register_hired_date">入社日</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="date" id="register_hired_date" class="form-control form-control-sm" name="hired_date">
                        </div>
                        <div class="col-md-1"><label>入社種別</label></div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="new_graduate_flg" id="register_mid_career" value="0">
                                <label class="form-check-label" for="register_mid_career">中途</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="new_graduate_flg" id="register_new_graduate" value="1"
                                       checked>
                                <label class="form-check-label" for="register_new_graduate">新卒</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_phone_num">固定電話</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_phone_num" class="form-control form-control-sm" name="phone_num" min="0">
                        </div>
                        <div class="col-md-1"><label for="register_cell_phone_num">携帯電話</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_cell_phone_num" class="form-control form-control-sm" name="cell_phone_num"
                                   min="0">
                        </div>
                        <div class="col-md-1"><label for="register_company_phone_num">社用携帯</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_company_phone_num" class="form-control form-control-sm"
                                   name="company_phone_num" min="0">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_emerg_cont_relship">緊急連絡先</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_emerg_cont_relship" class="form-control form-control-sm"
                                   name="emerg_cont_relship" min="0" placeholder="続柄">
                        </div>
                        <div class="col-md-3 pr-4">
                            <input type="number" id="register_emerg_num_relship" class="form-control form-control-sm"
                                   name="emerg_num_relship" min="0" placeholder="電話番号">
                        </div>
                        <div class="col-md-1"><label for="emerg_cont_relship_sub">緊急連絡先</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_emerg_cont_relship_sub" class="form-control form-control-sm"
                                   name="emerg_cont_relship_sub" min="0" placeholder="続柄">
                        </div>
                        <div class="col-md-3 pr-4">
                            <input type="number" id="register_emerg_cont_num_sub" class="form-control form-control-sm"
                                   name="emerg_cont_num_sub" min="0" placeholder="電話番号">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="register_family_members">家族構成</label></div>
                        <div class="col-md-11 pr-4">
                            <textarea id="register_family_members" class="form-control form-control-sm" name="family_members"></textarea>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1">
                            <label for="register_basic_pension_num" style="font-size: 12px;">基礎年金番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_basic_pension_num" class="form-control form-control-sm"
                                   name="basic_pension_num">
                        </div>
                        <div class="col-md-1">
                            <label for="register_health_ins_code_num" style="font-size: 12px;">健康保険<br>記号番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_health_ins_code_num" class="form-control form-control-sm"
                                   name="health_ins_code_num">
                        </div>
                        <div class="col-md-1">
                            <label for="register_health_ins_personal_num" style="font-size: 12px;">健康保険<br>個人番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_health_ins_personal_num" class="form-control form-control-sm"
                                   name="health_ins_personal_num">
                        </div>
                        <div class="col-md-1">
                            <label for="register_my_num" style="font-size: 12px;">マイナンバー</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_my_num" class="form-control form-control-sm" name="my_num">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1">
                            <label for="register_basic_salary">基本給(万)</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_basic_salary" class="form-control form-control-sm" name="basic_salary">
                        </div>
                        <div class="col-md-1">
                            <label for="register_annual_salary">年俸(万)</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="register_annual_salary" class="form-control form-control-sm" name="annual_salary">
                        </div>
                        <div class="col-md-1"><label for="register_rank">格</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="rank" id="register_rank" class="form-control form-control-sm">
                                <option value="" disabled selected style='display:none;'>格</option>
                                <?php
                                    $before_rank = '';
                                    foreach ($this->salary as $salary) {
                                        foreach ($salary as $rank => $class) {
                                            // 重複を削除
                                            if ($before_rank != $rank) {
                                                echo "<option value=\"$rank\">$rank</option>";
                                                $before_rank = $rank;
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label for="register_class">級</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="class" id="register_class" class="form-control form-control-sm" disabled>
                                <option value="" disabled selected style='display:none;'>-</option>
                                <?php
                                    foreach ($this->salary as $salary) {
                                        foreach ($salary as $rank => $class) {
                                            echo "<option value=\"$class\" data-val=\"$rank\">$class</option>";
                                        }
                                    }
                                ?>
                            </select>
                            <div id="required_register_class" class="error invalid-feedback d-none">入力してください。</div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label>提出書類</label></div>
                        <div class="col-md-11">
                            <div class="form-check form-inline">
                                <input id="register_chk_written_oath" class="form-check-input" type="checkbox" name="chk_written_oath">
                                <label class="form-check-label mr-4" for="register_chk_written_oath">誓約書</label>
                                <input id="register_chk_instructions" class="form-check-input" type="checkbox" name="chk_instructions">
                                <label class="form-check-label mr-4" for="register_chk_instructions">個人情報</label>
                                <input id="register_chk_emp_agrmnt" class="form-check-input" type="checkbox" name="chk_emp_agrmnt">
                                <label class="form-check-label mr-4" for="register_chk_emp_agrmnt">雇用契約書</label>
                                <input id="register_chk_notice_of_emp" class="form-check-input" type="checkbox" name="chk_notice_of_emp">
                                <label class="form-check-label mr-4" for="register_chk_notice_of_emp">条件通知書</label>
                                <input id="register_chk_hired_emp_agrmnt" class="form-check-input" type="checkbox"
                                       name="chk_hired_emp_agrmnt">
                                <label class="form-check-label mr-4" for="register_chk_hired_emp_agrmnt">入社誓約書</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="memo">備考</label></div>
                        <div class="col-md-11">
                            <textarea id="memo" class="form-control form-control-sm" name="memo" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-row form-group justify-content-center">
                        <button type="button" class="btn btn-outline-secondary px-3 mx-2" data-dismiss="modal">閉じる</button>
                        <button type="button" id="register" class="btn btn-primary px-4 mx-2">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body container">
                <h4 class="modal-title" id="editModalLabel"><?= EDIT ?></h4>
                <form class="mx-2 mt-4" action="<?= BASEURL ?>/DemoController/edit" method="post">
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_emp_num">社員番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_emp_num" class="form-control form-control-sm" name="emp_num" min="0">
                        </div>
                        <div class="col-md-1"><label for="edit_password">パスワード</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="password" id="edit_password" class="form-control form-control-sm" name="password" disabled>
                        </div>
                        <div class="col-md-2"><label class="form-check-label" for="edit_user_auth">システム管理者</label></div>
                        <div class="col-md-1">
                            <input id="edit_user_auth" class="form-check-input" type="checkbox" name="user_auth">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_last_name">姓</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="edit_last_name" class="form-control form-control-sm" name="last_name">
                        </div>
                        <div class="col-md-1"><label for="edit_first_name">名</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="edit_first_name" class="form-control form-control-sm" name="first_name">
                        </div>
                        <div class="col-md-1"><label for="edit_last_name_kana">姓カナ</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="edit_last_name_kana" class="form-control form-control-sm" name="last_name_kana">
                        </div>
                        <div class="col-md-1"><label for="edit_first_name_kana">名カナ</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="edit_first_name_kana" class="form-control form-control-sm" name="first_name_kana">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_birthday">生年月日</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="date" id="edit_birthday" class="form-control form-control-sm" name="birthday">
                        </div>
                        <div class="col-md-1"><label for="edit_sex">性別</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="sex" id="edit_sex" class="form-control form-control-sm">
                                <option value="0">男性</option>
                                <option value="1">女性</option>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="edit_mail">メール</label></div>
                        <div class="col-md-5 pr-4">
                            <input type="email" id="edit_mail" class="form-control form-control-sm" name="mail">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_emp_status">雇用携帯</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="emp_status" id="edit_emp_status" class="form-control form-control-sm">
                                <option value="0">正社員</option>
                                <option value="1">契約社員</option>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="edit_department">部署</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="department" id="edit_department" class="form-control form-control-sm">
                                <?php
                                    foreach ($this->department as $id => $name) {
                                        echo "<option value=\"$id\">$name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="edit_position">役職</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="position" id="edit_position" class="form-control form-control-sm">
                                <?php
                                    foreach ($this->position as $id => $name) {
                                        echo "<option value=\"$id\">$name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="edit_occupation">職種</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="text" id="edit_occupation" class="form-control form-control-sm" name="occupation">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_postal_code">郵便番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_postal_code" class="form-control form-control-sm" name="postal_code" min="0"
                                   maxlength="7">
                        </div>
                        <div class="col-md-1"><label for="edit_address">住所</label></div>
                        <div class="col-md-8 pr-4">
                            <input type="text" id="edit_address" class="form-control form-control-sm" name="address">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_enrolled_status">在籍状況</label></div>
                        <div class="col-md-2 pr-4">
                            <select id="edit_enrolled_status" class="form-control form-control-sm" name="enrolled_status">
                                <option value="0" selected>在籍</option>
                                <option value="1">休職</option>
                                <option value="2">退職</option>
                            </select>
                        </div>
                        <div class="col-md-1"><label for="edit_hired_date">入社日</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="date" id="edit_hired_date" class="form-control form-control-sm" name="hired_date">
                        </div>
                        <div class="col-md-1"><label>入社種別</label></div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="new_graduate_flg" id="edit_mid_career" value="0">
                                <label class="form-check-label" for="edit_mid_career">中途</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="new_graduate_flg" id="edit_new_graduate" value="1"
                                       checked>
                                <label class="form-check-label" for="edit_new_graduate">新卒</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_phone_num">固定電話</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_phone_num" class="form-control form-control-sm" name="phone_num" min="0">
                        </div>
                        <div class="col-md-1"><label for="edit_cell_phone_num">携帯電話</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_cell_phone_num" class="form-control form-control-sm" name="cell_phone_num"
                                   min="0">
                        </div>
                        <div class="col-md-1"><label for="edit_company_phone_num">社用携帯</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_company_phone_num" class="form-control form-control-sm" name="company_phone_num"
                                   min="0">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_emerg_cont_relship">緊急連絡先</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_emerg_cont_relship" class="form-control form-control-sm" name="emerg_cont_relship"
                                   min="0" placeholder="続柄">
                        </div>
                        <div class="col-md-3 pr-4">
                            <input type="number" id="edit_emerg_num_relship" class="form-control form-control-sm" name="emerg_num_relship"
                                   min="0" placeholder="電話番号">
                        </div>
                        <div class="col-md-1"><label for="edit_emerg_cont_relship_sub">緊急連絡先</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_emerg_cont_relship_sub" class="form-control form-control-sm"
                                   name="emerg_cont_relship_sub" min="0" placeholder="続柄">
                        </div>
                        <div class="col-md-3 pr-4">
                            <input type="number" id="edit_emerg_num_relship_sub" class="form-control form-control-sm"
                                   name="emerg_num_relship_sub" min="0" placeholder="電話番号">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_family_members">家族構成</label></div>
                        <div class="col-md-11 pr-4">
                            <textarea id="edit_family_members" class="form-control form-control-sm" name="family_members"></textarea>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1">
                            <label for="edit_basic_pension_num" style="font-size: 12px;">基礎年金番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_basic_pension_num" class="form-control form-control-sm" name="basic_pension_num">
                        </div>
                        <div class="col-md-1">
                            <label for="edit_health_ins_code_num" style="font-size: 12px;">健康保険<br>記号番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_health_ins_code_num" class="form-control form-control-sm"
                                   name="health_ins_code_num">
                        </div>
                        <div class="col-md-1">
                            <label for="edit_health_ins_personal_num" style="font-size: 12px;">健康保険<br>個人番号</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_health_ins_personal_num" class="form-control form-control-sm"
                                   name="health_ins_personal_num">
                        </div>
                        <div class="col-md-1">
                            <label for="edit_my_num" style="font-size: 12px;">マイナンバー</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_my_num" class="form-control form-control-sm" name="my_num">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1">
                            <label for="edit_basic_salary">基本給(万)</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_basic_salary" class="form-control form-control-sm" name="basic_salary">
                        </div>
                        <div class="col-md-1">
                            <label for="edit_annual_salary">年俸(万)</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="number" id="edit_annual_salary" class="form-control form-control-sm" name="annual_salary">
                        </div>
                        <div class="col-md-1"><label for="edit_rank">格</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="rank" id="edit_rank" class="form-control form-control-sm">
                                <option value="" disabled selected style='display:none;'>格</option>
                                <?php
                                    $before_rank = '';
                                    foreach ($this->salary as $salary) {
                                        foreach ($salary as $rank => $class) {
                                            // 重複を削除
                                            if ($before_rank != $rank) {
                                                echo "<option value=\"$rank\">$rank</option>";
                                                $before_rank = $rank;
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label for="edit_class">級</label></div>
                        <div class="col-md-2 pr-4">
                            <select name="class" id="edit_class" class="form-control form-control-sm" disabled>
                                <option value="" disabled selected style='display:none;'>-</option>
                                <?php
                                    foreach ($this->salary as $salary) {
                                        foreach ($salary as $rank => $class) {
                                            echo "<option value=\"$class\" data-val=\"$rank\">$class</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label>提出書類</label></div>
                        <div class="col-md-11">
                            <div class="form-check form-inline">
                                <input id="edit_chk_written_oath" class="form-check-input" type="checkbox" name="chk_written_oath">
                                <label class="form-check-label mr-4" for="edit_chk_written_oath">誓約書</label>
                                <input id="edit_chk_instructions" class="form-check-input" type="checkbox" name="chk_instructions">
                                <label class="form-check-label mr-4" for="edit_chk_instructions">個人情報</label>
                                <input id="edit_chk_emp_agrmnt" class="form-check-input" type="checkbox" name="chk_emp_agrmnt">
                                <label class="form-check-label mr-4" for="edit_chk_emp_agrmnt">雇用契約書</label>
                                <input id="edit_chk_notice_of_emp" class="form-check-input" type="checkbox" name="chk_notice_of_emp">
                                <label class="form-check-label mr-4" for="edit_chk_notice_of_emp">条件通知書</label>
                                <input id="edit_chk_hired_emp_agrmnt" class="form-check-input" type="checkbox" name="chk_hired_emp_agrmnt">
                                <label class="form-check-label mr-4" for="edit_chk_hired_emp_agrmnt">入社誓約書</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_retired_date">退社日</label></div>
                        <div class="col-md-2 pr-4">
                            <input type="date" id="edit_retired_date" class="form-control form-control-sm" name="retired_date">
                        </div>
                        <div class="col-md-1"><label for="edit_retired_reason">退社理由</label></div>
                        <div class="col-md-5 pr-4">
                            <input type="text" id="edit_retired_reason" class="form-control form-control-sm" name="retired_reason">
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-inline">
                                <input id="edit_chk_retirement_notification" class="form-check-input" type="checkbox"
                                       name="chk_retirement_notification">
                                <label class="form-check-label mr-4" for="edit_chk_retirement_notification">退職届</label>
                                <input id="edit_chk_retired_emp_agrmnt" class="form-check-input" type="checkbox"
                                       name="chk_retired_emp_agrmnt">
                                <label class="form-check-label mr-4" for="edit_chk_retired_emp_agrmnt">退職制約届</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-1"><label for="edit_memo">備考</label></div>
                        <div class="col-md-11">
                            <textarea id="edit_memo" class="form-control form-control-sm" name="memo" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-row form-group justify-content-center">
                        <button type="button" class="btn btn-outline-secondary px-3 mx-2" data-dismiss="modal">閉じる</button>
                        <button type="button" id="edit" class="btn btn-primary px-4 mx-2">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>