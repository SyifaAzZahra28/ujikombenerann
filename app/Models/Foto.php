<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;


    protected $guarded = [];
    public function album()
    {
        return $this->hasMany(Album::class, 'AlbumID', 'AlbumID');
    } 

    protected $table = 'fotos';
    protected $primaryKey = 'FotoID';
    protected $fillable = [
        'JudulFoto',
        'DeskripsiFoto',
        'LokasiFile',
        'AlbumID',
    ]; 
    
    public function foto(): BelongsTo 
    {
        return $this->belongsTo(Album::class, 'AlbumID');
    }




    public function likefotos()
    {
        return $this->hasMany(Like::class, 'FotoID');
    }

    public function likedByUser($userId)
    {
        return $this->likefotos()->where('UserID', $userId)->exists();
    }

    public function likesCount()
    {
        return $this->likefotos()->count();
    }


    public function foto_comments()
    {
        return $this->hasMany(KomentarFoto::class, 'FotoID');
    }

    public function komentarsCount()
    {
        return $this->foto_comments()->count();
    }
}
