<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
   protected $fillable = [ 'id','matC','nom','fonction','tel','mail','pass','groupe_id','zone_id','aboutClt',
   'dateIns','updated_at','statutClt','pays','sexe','avatar','location','dateN'];
    
}
