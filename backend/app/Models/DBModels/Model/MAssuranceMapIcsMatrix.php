<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DIcsMatrices;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapIcsMatrix
 * Representation for db table assurance_map_ics_matrix.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         icsMatrix       [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @property  DIcsMatrices   relIcsMatrix                                     
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapIcsMatrix extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_ICSMATRIX    = 'icsMatrix';
	const  FJ_ID           = 'id';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FR_ICSMATRIX    = 'relIcsMatrix';
	const  FT_ASSURANCEMAP = 'assurance_map_ics_matrix.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_ics_matrix.author';
	const  FT_CREATED_AT   = 'assurance_map_ics_matrix.created_at';
	const  FT_DELETED_AT   = 'assurance_map_ics_matrix.deleted_at';
	const  FT_ICSMATRIX    = 'assurance_map_ics_matrix.icsMatrix';
	const  FT_ID           = 'assurance_map_ics_matrix.id';
	const  FT_UPDATED_AT   = 'assurance_map_ics_matrix.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_ICSMATRIX     = 'icsMatrix';
	const  F_ID            = 'id';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_ics_matrix';

	public static array $jsonable = [
		MAssuranceMapIcsMatrix::FJ_ID           =>[ MAssuranceMapIcsMatrix::F_ID           ,null,'string',           ],
		MAssuranceMapIcsMatrix::FJ_ASSURANCEMAP =>[ MAssuranceMapIcsMatrix::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapIcsMatrix::FJ_ICSMATRIX    =>[ MAssuranceMapIcsMatrix::F_ICSMATRIX    ,null,'string',           ],
		MAssuranceMapIcsMatrix::FJ_AUTHOR       =>[ MAssuranceMapIcsMatrix::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapIcsMatrix::FJ_CREATED_AT   =>[ MAssuranceMapIcsMatrix::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapIcsMatrix::FJ_UPDATED_AT   =>[ MAssuranceMapIcsMatrix::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapIcsMatrix::FJ_DELETED_AT   =>[ MAssuranceMapIcsMatrix::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_ICSMATRIX,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_ICSMATRIX,
			 self::F_AUTHOR,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];


        /**
         * @return DAssuranceMaps|BelongsTo
         */
        public function relAssuranceMap(){
            return $this->belongsTo(DAssuranceMaps::class,self::F_ASSURANCEMAP, DAssuranceMaps::F_ID);
        }
            

        /**
         * @return DUsers|BelongsTo
         */
        public function relAuthor(){
            return $this->belongsTo(DUsers::class,self::F_AUTHOR, DUsers::F_ID);
        }
            

        /**
         * @return DIcsMatrices|BelongsTo
         */
        public function relIcsMatrix(){
            return $this->belongsTo(DIcsMatrices::class,self::F_ICSMATRIX, DIcsMatrices::F_ID);
        }
            



}

