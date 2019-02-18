<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use app\curso;

class aluno extends Model
{
    
    protected $fillable = ['nome','data_nascimento', 'logradouro','numero','bairro','cidade','estado','cep'];
        protected $table = 'aluno'; 

    public function curso():BelongsToMany
{ 
	return $this->BelongsToMany(curso::class);
}
   
}
