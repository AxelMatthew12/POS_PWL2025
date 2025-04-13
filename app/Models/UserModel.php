<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticate;
use PhpParser\Node\Expr\Cast\Bool_;

class UserModel extends Authenticate
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id','username','nama','password','create_at','update_at'];

    protected $hidden = ['password'];
    protected $casts = ['password' => 'hashed'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function getRoleName(): string
    {
        return $this->level->level_name;
    }

    public function hasRole($role): Bool {
        return $this->level->level_kode == $role;
    }

    public function getRole()
    {
        return $this->level->level_kode;
    }

}
