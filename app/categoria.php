<?php

namespace Sidecol;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Auth\Authenticatable;

class categoria extends Model
{
	use ShinobiTrait;

	/*
        El modelo es el encargdo de gestional las tablas de las bases de datos;
    */


        protected $table='tbl_categoria';
        protected $primaryKey='idcategoria';
        public $timestamps=true;

        protected $filleble=[

        	'idcategoria',
        	'categoria',
        	'estado',
        	'created_at',
        	'updated_at',

        ];
        protected $guarded =[

        ];
    }

