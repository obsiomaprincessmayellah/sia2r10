<?php


    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    class User extends Model{
        protected $table = 'tbluster';
        // column sa table
        protected $fillable = [
            'username', 'password', 'gender'
        ];
    }