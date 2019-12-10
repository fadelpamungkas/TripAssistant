<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class GambarWisata extends Model
{
    protected $table = "data_wisata";
 
    protected $fillable = ['gambar_wisata'];
}