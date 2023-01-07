<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $log_date
 * @property string|null $content
 * @property int $mood_score
 * @property int $alcohol_units
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class DailyLog extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
