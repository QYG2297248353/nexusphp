<?php

return [
    'sidebar' => [
        'exam_users' => '用戶考核',
        'hit_and_runs' => '用戶 H&R',
        'users_list' => '用戶列表',
        'tags_list' => '標簽',
        'agent_allows' => '允許客戶端',
        'agent_denies' => '拒絕客戶端',
        'exams_list' => '考核 & 任務',
        'medals_list' => '勛章',
        'settings' => '設置',
        'users_medals' => '用戶勛章',
        'claims' => '用戶認領',
        'torrent_list' => '種子',
        'torrent_state' => '全站優惠',
        'roles_list' => '角色',
        'ability_list' => '權限',
        'seed_box_records' => 'SeedBox',
        'upload_speed' => '上行帶寬',
        'download_speed' => '下行帶寬',
        'isp' => 'ISP',
        'menu' => '自定義菜單',
        'username_change_log' => '改名記錄',
        'torrent_deny_reason' => '拒絕原因',
        'roles' => '角色',
        'permissions' => '權限',
        'section' => '分類模式',
        'icon' => '分類圖標',
        'plugin' => '插件',
        'category' => '主分類',
        'second_icon' => '第二圖標',
        'torrent_operation_log' => '種子操作記錄',
        'invite' => '用戶邀請',
        'user_props' => '用戶道具',
        'login_log' => '登錄記錄',
        'bonus_log' => '魔力記錄',
        'torrent_buy_log' => '種子購買',
        'attendance_log' => '簽到記錄',
        'oauth_client' => '客戶端',
        'oauth_access_token' => '訪問令牌',
        'oauth_auth_code' => '授權碼',
        'oauth_refresh_token' => '刷新令牌',
    ],
    'resources' => [
        'agent_allow' => [
            'check_modal_btn' => '檢測',
            'check_modal_header' => '檢測客戶端是否被允許',
            'check_pass_msg' => '恭喜，此客戶端被規則 :id 通過！',
        ],
        'user' => [
            'actions' => [
                'enable_modal_btn' => '啟用',
                'enable_modal_title' => '啟用用戶',
                'enable_disable_reason' => '原因',
                'enable_disable_reason_placeholder' => '可選',
                'disable_modal_btn' => '禁用',
                'disable_modal_title' => '禁用用戶',
                'disable_two_step_authentication' => '取消兩步登錄驗證',
                'change_bonus_etc_btn' => '修改上傳量等',
                'change_bonus_etc_action_increment' => '增加',
                'change_bonus_etc_action_decrement' => '減少',
                'change_bonus_etc_field_label' => '類別',
                'change_bonus_etc_action_label' => '動作',
                'change_bonus_etc_value_label' => '數量',
                'change_bonus_etc_value_help' => '如果類別是上傳量/下載量，單位為：GB',
                'change_bonus_etc_reason_label' => '原因',
                'reset_password_btn' => '重置密碼',
                'reset_password_label' => '新密碼',
                'reset_password_confirmation_label' => '確認新密碼',
                'assign_exam_btn' => '分配考核',
                'assign_exam_exam_label' => '選擇考核',
                'assign_exam_begin_label' => '開始時間',
                'assign_exam_end_label' => '結束時間',
                'assign_exam_end_help' => '如果不指定開始/結束時間，將使用考核本身設定的時間範圍',
                'grant_medal_btn' => '授予勛章',
                'grant_medal_medal_label' => '選擇勛章',
                'grant_medal_duration_label' => '有效時長',
                'grant_medal_duration_help' => '單位：天。如果留空，用戶永久擁有',
                'confirm_btn' => '確認',
                'disable_download_privileges_btn' => '禁用下載權限',
                'enable_download_privileges_btn' => '啟用下載權限',
                'grant_prop_btn' => '授予道具',
                'grant_prop_form_prop' => '選擇道具',
                'grant_prop_form_duration' => '有效時長',
                'grant_prop_form_duration_help' => '單位：天。如果留空，用戶永久擁有。註：改名卡沒有時間限製，忽略該值。',
                'confirm_bulk' => '批量確認',
                'change_bonus_etc_duration_label' => '有效期',
                'change_bonus_etc_duration_help' => '增加臨時邀請時必須，單位：天',
                'change_class_btn' => '修改等級',
            ]
        ],
        'exam_user' => [
            'bulk_action_avoid_label' => '批量免除',
            'bulk_action_update_end_label' => '批量修改結束時間',
            'action_avoid' => '免除',
            'action_update_end' => '修改結束時間',
            'result_passed' => '通過！',
            'result_not_passed' => '未通過！',
        ],
        'exam' => [
            'index_duplicate' => '指標：:index 重復！',
        ],
        'hit_and_run' => [
            'bulk_action_pardon' => '批量免罪',
            'action_pardon' => '免罪',
        ],
        'torrent' => [
            'bulk_action_pos_state' => '置頂',
            'bulk_action_remove_tag' => '清除標簽',
            'bulk_action_attach_tag' => '設置標簽',
            'action_approval' => '審核',
            'bulk_action_attach_tag_remove_old' => '同時刪除舊標簽',
            'bulk_action_recommend' => '推薦',
            'bulk_action_sp_state' => '優惠',
            'bulk_action_hr' => 'H&R',
        ],
        'seed_box_record' => [
            'toggle_status' => '更改狀態',
            'check_modal_btn' => '檢測',
            'check_modal_header' => '檢測 IP 是否為 SeedBox',
        ],
        'tag' => [
            'detach_torrents' => '分離所有種子',
        ],
    ]
];
