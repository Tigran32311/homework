<?php

namespace App\Traits;

use App\Models\Doctor;
use App\Models\Post;
use App\Models\Specialization;

trait RelationsTrait
{
    /**
     * Отношения между должность-доктор 1-многим (не сработало)
     * @return mixed
     */
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Отношения между специалихация-доктор 1-многим (не сработало)
     * @return mixed
     */
    public function specializations()
    {
        return $this->belongsTo(Specialization::class);
    }

    /**
     * Отношения между должность-доктор 1-многим (работает)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
