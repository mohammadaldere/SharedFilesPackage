<?php

namespace SharedFiles\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'logo',
        'description',
        'phoneNumber',
        'location',
        'facebook', 'instagram', 'twitter','youtube','linkedIn',
    ];

    public function getLogoAttribute($value){
        $file_path='assets/our_image/'.$value;
        if($value && File::exists(public_path($file_path))){
            return asset('assets/our_image/'.$value);
        }
        else{
            return asset('assets/our_image/Logo.jpg');
        }
    }  
}
