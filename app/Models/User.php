<?php


    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    class User extends Model{
        protected $table = 'tb_luster';
        // column sa table
        protected $fillable = [
            'username', 'password', 'gender'
        ];
    }