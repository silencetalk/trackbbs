<?php

namespace App\Models;

class Inform extends Model
{
    protected $fillable = ['body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order'];
}
