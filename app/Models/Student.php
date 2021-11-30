<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //Pour autoriser les mise à jour de ces champs dans la table (avant de faire php artisan tinker)
    protected $fillable = ['name', 'email', 'age'];

    //Création d'attribut virtuel pour contrôler l'age de l'étudiant
    public function getIsAnAdultAttribute(): bool //on veut retourner un booléan avec cette méthode (1 ou 0)
    {
        return $this->age >= 18; //ça va nous retourner true (ou 1) si c'est vrai, si non elle retourne false (ou 0)
    }
}
