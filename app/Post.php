<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * One post may have many comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}