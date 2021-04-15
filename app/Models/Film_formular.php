<?php namespace App\Models;

use CodeIgniter\Model;

class Film_formular extends Model
{
    protected $table      = 'filmy';
    protected $primaryKey = 'id_filmu';
    protected $allowedFields = ['nazev_cz', 'originalni_nazev', 'delka', 'id_typ_filmu', 'id_zanru_filmu', 'zeme_id_zeme'];
    protected $updatedField  = 'updated_at';


}