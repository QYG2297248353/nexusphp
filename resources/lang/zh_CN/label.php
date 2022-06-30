<?php

return [
    'name' => '名称',
    'email' => '邮箱',
    'image' => '图片',
    'expire_at' => '过期时间',
    'username' => '用户',
    'status' => '状态',
    'created_at' => '创建时间',
    'updated_at' => '更新时间',
    'begin' => '开始时间',
    'end' => '结束时间',
    'uploaded' => '上传量',
    'downloaded' => '下载量',
    'ratio' => '分享率',
    'seed_time_required' => '还需做种时间',
    'inspect_time_left' => '考察剩余时间',
    'added' => '添加时间',
    'last_access' => '最后访问时间',
    'priority' => '优先级',
    'comment' => '备注',
    'duration' => '时长',
    'description' => '描述',
    'price' => '价格',
    'setting' => [
        'nav_text' => '设置',
        'backup' => [
            'tab_header' => '备份',
            'enabled' => '是否启用',
            'enabled_help' => '是否启用备份功能',
            'frequency' => '频率',
            'frequency_help' => '备份频率',
            'hour' => '小时',
            'hour_help' => '在这个点钟数进行备份',
            'minute' => '分钟',
            'minute_help' => "在前面点钟数的这一分钟进行备份。如果频率是按 'hourly'，此值会被忽略",
            'google_drive_client_id' => 'Google Drive client ID',
            'google_drive_client_secret' => 'Google Drive client secret',
            'google_drive_refresh_token' => 'Google Drive refresh token',
            'google_drive_folder_id' => 'Google Drive folder ID',
            'via_ftp' => '通过 FTP 保存',
            'via_ftp_help' => '是否通过 FTP 保存。如果通过，把配置信息添加到 .env 文件，参考 <a href="https://laravel.com/docs/master/filesystem#ftp-driver-configuration">Laravel 文档</a>',
            'via_sftp' => '通过 SFTP 保存',
            'via_sftp_help' => '是否通过 SFTP 保存。如果通过，把配置信息添加到 .env 文件，参考 <a href="https://laravel.com/docs/master/filesystem#sftp-driver-configuration">Laravel 文档</a>',
        ],
        'hr' => [
            'tab_header' => 'H&R',
            'mode' => '模式',
            'inspect_time' => '考察时长',
            'inspect_time_help' => '考察时长自下载完成后开始计算，单位：小时',
            'seed_time_minimum' => '达标做种时长',
            'seed_time_minimum_help' => '达标的最短做种时长，单位：小时，必须小于考察时长',
            'ignore_when_ratio_reach' => '达标分享率',
            'ignore_when_ratio_reach_help' => '达标的最小分享率',
            'ban_user_when_counts_reach' => 'H&R 数量上限',
            'ban_user_when_counts_reach_help' => 'H&R 数量达到此值，账号会被禁用',
        ]
    ],
    'user' => [
        'uploaded' => '上传量',
        'downloaded' => '下载量',
        'invites' => '邀请',
        'seedbonus' => '魔力',
        'attendance_card' => '补签卡',
        'class' => '等级',
        'status' => '状态',
        'enabled' => '启用',
        'username' => '用户名',
    ],
    'medal' => [
        'label' => '勋章',
        'image_large' => '大图',
        'image_small' => '小图',
        'get_type' => '获取方式',
        'duration' => '有效时长',
        'duration_help' => '单位：天。如果留空，用户永久拥有',
    ],
    'exam' => [
        'label' => '考核',
        'is_done' => '是否完成',
        'is_discovered' => '自动发现',
        'register_time_range' => [
            'begin' => '注册时间开始',
            'end' => '注册时间结束',
        ],
        'donated' => '是否捐赠',
        'index_formatted' => '考核指标',
        'filter_formatted' => '目标用户',
    ],
    'torrent' => [
        'label' => '种子',
    ],
    'hit_and_run' => [

    ],
    'tag' => [
        'color' => '背景颜色',
        'font_color' => '字体颜色',
        'font_size' => '字体大小',
        'margin' => '外边距',
        'padding' => '内边距',
        'border_radius' => '边框圆角',
    ],
    'agent_allow' => [
        'family' => '系列',
        'start_name' => '起始名称',
        'peer_id_start' => 'Peer ID 超始',
        'peer_id_pattern' => 'Peer ID 正则',
        'peer_id_matchtype' => 'Peer ID 匹配类型',
        'peer_id_match_num' => 'Peer ID 匹配次数',
        'agent_start' => 'Agent 起始',
        'agent_pattern' => 'Agent 正则',
        'agent_matchtype' => 'Agent 匹配类型',
        'agent_match_num' => 'Agent 匹配次数',
        'exception' => '排除',
        'allowhttps' => '允许 https',
    ],
    'agent_deny' => [
        'peer_id' => 'Peer ID',
        'agent' => 'Agent',
    ],
];