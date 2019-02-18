<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use app\curso;

class professor extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'professor'; 
    /**
     *
        /**
     * The atributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','data_nascimento'];

    public function curso()
    {
            return $this->BelongsToMany(curso::class);
    }
}

