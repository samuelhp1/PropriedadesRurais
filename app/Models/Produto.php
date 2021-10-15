<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['cpf','cnpj','nome','imagem1','imagem2','imagem3','imagem4'];
    use HasFactory;
}
