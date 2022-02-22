<?php

return [
    'name' => 'Exam name',
    'index' => 'Exam index',
    'time_range' => 'Exam time',
    'index_text_' . \App\Models\Exam::INDEX_UPLOADED => 'Uploaded',
    'index_text_' . \App\Models\Exam::INDEX_SEED_TIME_AVERAGE => 'Seed time average',
    'index_text_' . \App\Models\Exam::INDEX_DOWNLOADED => 'Downloaded',
    'index_text_' . \App\Models\Exam::INDEX_SEED_BONUS => 'Bonus increment',
    'require_value' => 'Require',
    'current_value' => 'Current',
    'result' => 'Result',
    'result_pass' => 'Pass!',
    'result_not_pass' => '<span style="color: red">Not pass!</span>',
    'checkout_pass_message_subject' => 'Exam pass!',
    'checkout_pass_message_content' => 'Congratulation! You have complete the exam: :exam_name in time(:begin ~ :end)',
    'checkout_not_pass_message_subject' => 'Exam not pass, and account is banned!',
    'checkout_not_pass_message_content' => 'You did not complete the exam: :exam_name in time(:begin ~ :end), and your account has be banned!',
    'ban_log_reason' => 'Not complete exam: :exam_name in time(:begin ~ :end)',
    'ban_user_modcomment' => 'Due to not complete exam: :exam_name(:begin ~ :end), ban by system.',
];
