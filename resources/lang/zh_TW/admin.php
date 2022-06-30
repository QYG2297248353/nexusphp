<?php

return [
    'sidebar' => [
        'exam_users' => '用戶考核',
        'hit_and_runs' => '用戶 H&R',
        'users_list' => '用戶列表',
        'tags_list' => '標簽',
        'agent_allows' => '允許客戶端',
        'agent_denies' => '拒絕客戶端',
        'exams_list' => '考核',
        'medals_list' => '勛章',
        'settings' => '設置',
        'users_medal' => '用戶勛章',
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
            ]
        ],
        'exam_user' => [
            'bulk_action_avoid_label' => '批量免除',
        ],
    ]
];