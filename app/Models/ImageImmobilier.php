<?php

use Illuminate\Database\Eloquent\Model;

class ImageImmobilier extends Model
{
    protected $table = 'image_immobilier';
    protected $primaryKey = 'id_image';
    public $timestamps = false;

    public function bien() {
        return $this->belongsTo(BienImmobilier::class, 'id_bien');
    }
}
