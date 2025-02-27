<?php

namespace App\Models;


class Topic extends NexusModel
{
    protected $fillable = ['userid', 'subject', 'locked', 'forumid', 'firstpost', 'lastpost', 'sticky', 'hlcolor', 'views'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class. 'forumid');
    }

    public function firstPost()
    {
        return $this->belongsTo(Post::class, "firstpost");
    }

    public function lastPost()
    {
        return $this->belongsTo(Post::class, "lastpost");
    }
}
