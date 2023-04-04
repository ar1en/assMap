<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapSelfRating
 * Representation for db table assurance_map_self_rating.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         selfRating      [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapSelfRating extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_ID           = 'id';
	const  FJ_SELFRATING   = 'selfRating';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FT_ASSURANCEMAP = 'assurance_map_self_rating.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_self_rating.author';
	const  FT_CREATED_AT   = 'assurance_map_self_rating.created_at';
	const  FT_DELETED_AT   = 'assurance_map_self_rating.deleted_at';
	const  FT_ID           = 'assurance_map_self_rating.id';
	const  FT_SELFRATING   = 'assurance_map_self_rating.selfRating';
	const  FT_UPDATED_AT   = 'assurance_map_self_rating.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_ID            = 'id';
	const  F_SELFRATING    = 'selfRating';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_self_rating';

	public static array $jsonable = [
		MAssuranceMapSelfRating::FJ_ID           =>[ MAssuranceMapSelfRating::F_ID           ,null,'string',           ],
		MAssuranceMapSelfRating::FJ_ASSURANCEMAP =>[ MAssuranceMapSelfRating::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapSelfRating::FJ_SELFRATING   =>[ MAssuranceMapSelfRating::F_SELFRATING   ,null,'string',           ],
		MAssuranceMapSelfRating::FJ_AUTHOR       =>[ MAssuranceMapSelfRating::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapSelfRating::FJ_CREATED_AT   =>[ MAssuranceMapSelfRating::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapSelfRating::FJ_UPDATED_AT   =>[ MAssuranceMapSelfRating::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapSelfRating::FJ_DELETED_AT   =>[ MAssuranceMapSelfRating::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_SELFRATING,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_SELFRATING,
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
            



}

