<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['id', 'project_name', 'system_pic', 'system_owner', 'start_date', 'end_Date', 'duration', 'methodology', 'platform', 'deployment_type'];

    public function Bu(): BelongsTo
    {
        return $this->belongsTo(Bu::class);
    }
    public function developer(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class);
    }
    public function report(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
