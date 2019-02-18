<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use app\professor;


class curso extends Model
{
    protected $table = 'curso'; 
    protected $fillable = ['nome'];
   

    public function professor():BelongsToMany
{ 
	return $this->BelongsToMany(professor::class);
}
   
}
