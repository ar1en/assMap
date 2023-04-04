<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DIcsWorks;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapIcsWork
 * Representation for db table assurance_map_ics_work.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         icsWork         [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @property  DIcsWorks      relIcsWork                                       
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapIcsWork extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_ICSWORK      = 'icsWork';
	const  FJ_ID           = 'id';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FR_ICSWORK      = 'relIcsWork';
	const  FT_ASSURANCEMAP = 'assurance_map_ics_work.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_ics_work.author';
	const  FT_CREATED_AT   = 'assurance_map_ics_work.created_at';
	const  FT_DELETED_AT   = 'assurance_map_ics_work.deleted_at';
	const  FT_ICSWORK      = 'assurance_map_ics_work.icsWork';
	const  FT_ID           = 'assurance_map_ics_work.id';
	const  FT_UPDATED_AT   = 'assurance_map_ics_work.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_ICSWORK       = 'icsWork';
	const  F_ID            = 'id';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_ics_work';

	public static array $jsonable = [
		MAssuranceMapIcsWork::FJ_ID           =>[ MAssuranceMapIcsWork::F_ID           ,null,'string',           ],
		MAssuranceMapIcsWork::FJ_ASSURANCEMAP =>[ MAssuranceMapIcsWork::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapIcsWork::FJ_ICSWORK      =>[ MAssuranceMapIcsWork::F_ICSWORK      ,null,'string',           ],
		MAssuranceMapIcsWork::FJ_AUTHOR       =>[ MAssuranceMapIcsWork::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapIcsWork::FJ_CREATED_AT   =>[ MAssuranceMapIcsWork::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapIcsWork::FJ_UPDATED_AT   =>[ MAssuranceMapIcsWork::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapIcsWork::FJ_DELETED_AT   =>[ MAssuranceMapIcsWork::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_ICSWORK,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_ICSWORK,
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
         * @return DIcsWorks|BelongsTo
         */
        public function relIcsWork(){
            return $this->belongsTo(DIcsWorks::class,self::F_ICSWORK, DIcsWorks::F_ID);
        }
            



}

