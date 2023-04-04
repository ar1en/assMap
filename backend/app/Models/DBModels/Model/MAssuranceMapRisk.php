<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapRisk
 * Representation for db table assurance_map_risk.

 * @property  string         id              [1] type:uuid      !NULL PRIMARY 
 * @property  string         assuranceMap    [2] type:uuid      !NULL         
 * @property  string         risk            [3] type:uuid      !NULL         
 * @property  string         author          [4] type:uuid      !NULL         
 * @property  \DateTime      created_at      [5] type:timestamp               
 * @property  \DateTime      updated_at      [6] type:timestamp               
 * @property  \DateTime      deleted_at      [7] type:timestamp               
 * @property  DAssuranceMaps relAssuranceMap                                  
 * @property  DUsers         relAuthor                                        
 * @property  DRisks         relRisk                                          
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapRisk extends DBClass {


	const  FJ_ASSURANCEMAP = 'assuranceMap';
	const  FJ_AUTHOR       = 'author';
	const  FJ_CREATED_AT   = 'createdAt';
	const  FJ_DELETED_AT   = 'deletedAt';
	const  FJ_ID           = 'id';
	const  FJ_RISK         = 'risk';
	const  FJ_UPDATED_AT   = 'updatedAt';
	const  FR_ASSURANCEMAP = 'relAssuranceMap';
	const  FR_AUTHOR       = 'relAuthor';
	const  FR_RISK         = 'relRisk';
	const  FT_ASSURANCEMAP = 'assurance_map_risk.assuranceMap';
	const  FT_AUTHOR       = 'assurance_map_risk.author';
	const  FT_CREATED_AT   = 'assurance_map_risk.created_at';
	const  FT_DELETED_AT   = 'assurance_map_risk.deleted_at';
	const  FT_ID           = 'assurance_map_risk.id';
	const  FT_RISK         = 'assurance_map_risk.risk';
	const  FT_UPDATED_AT   = 'assurance_map_risk.updated_at';
	const  F_ASSURANCEMAP  = 'assuranceMap';
	const  F_AUTHOR        = 'author';
	const  F_CREATED_AT    = 'created_at';
	const  F_DELETED_AT    = 'deleted_at';
	const  F_ID            = 'id';
	const  F_RISK          = 'risk';
	const  F_UPDATED_AT    = 'updated_at';

    protected $table = 'assurance_map_risk';

	public static array $jsonable = [
		MAssuranceMapRisk::FJ_ID           =>[ MAssuranceMapRisk::F_ID           ,null,'string',           ],
		MAssuranceMapRisk::FJ_ASSURANCEMAP =>[ MAssuranceMapRisk::F_ASSURANCEMAP ,null,'string',           ],
		MAssuranceMapRisk::FJ_RISK         =>[ MAssuranceMapRisk::F_RISK         ,null,'string',           ],
		MAssuranceMapRisk::FJ_AUTHOR       =>[ MAssuranceMapRisk::F_AUTHOR       ,null,'string',           ],
		MAssuranceMapRisk::FJ_CREATED_AT   =>[ MAssuranceMapRisk::F_CREATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapRisk::FJ_UPDATED_AT   =>[ MAssuranceMapRisk::F_UPDATED_AT   ,'jsonDateTime','string', ],
		MAssuranceMapRisk::FJ_DELETED_AT   =>[ MAssuranceMapRisk::F_DELETED_AT   ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_RISK,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_RISK,
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
         * @return DRisks|BelongsTo
         */
        public function relRisk(){
            return $this->belongsTo(DRisks::class,self::F_RISK, DRisks::F_ID);
        }
            



}

