<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DInternalInspections;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapInternalInspection
 * Representation for db table assurance_map_internal_inspection.

 * @property  string               id                    [1] type:uuid      !NULL PRIMARY 
 * @property  string               assuranceMap          [2] type:uuid      !NULL         
 * @property  string               internalInspection    [3] type:uuid      !NULL         
 * @property  string               author                [4] type:uuid      !NULL         
 * @property  \DateTime            created_at            [5] type:timestamp               
 * @property  \DateTime            updated_at            [6] type:timestamp               
 * @property  \DateTime            deleted_at            [7] type:timestamp               
 * @property  DAssuranceMaps       relAssuranceMap                                        
 * @property  DUsers               relAuthor                                              
 * @property  DInternalInspections relInternalInspection                                  
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapInternalInspection extends DBClass {


	const  FJ_ASSURANCEMAP       = 'assuranceMap';
	const  FJ_AUTHOR             = 'author';
	const  FJ_CREATED_AT         = 'createdAt';
	const  FJ_DELETED_AT         = 'deletedAt';
	const  FJ_ID                 = 'id';
	const  FJ_INTERNALINSPECTION = 'internalInspection';
	const  FJ_UPDATED_AT         = 'updatedAt';
	const  FR_ASSURANCEMAP       = 'relAssuranceMap';
	const  FR_AUTHOR             = 'relAuthor';
	const  FR_INTERNALINSPECTION = 'relInternalInspection';
	const  FT_ASSURANCEMAP       = 'assurance_map_internal_inspection.assuranceMap';
	const  FT_AUTHOR             = 'assurance_map_internal_inspection.author';
	const  FT_CREATED_AT         = 'assurance_map_internal_inspection.created_at';
	const  FT_DELETED_AT         = 'assurance_map_internal_inspection.deleted_at';
	const  FT_ID                 = 'assurance_map_internal_inspection.id';
	const  FT_INTERNALINSPECTION = 'assurance_map_internal_inspection.internalInspection';
	const  FT_UPDATED_AT         = 'assurance_map_internal_inspection.updated_at';
	const  F_ASSURANCEMAP        = 'assuranceMap';
	const  F_AUTHOR              = 'author';
	const  F_CREATED_AT          = 'created_at';
	const  F_DELETED_AT          = 'deleted_at';
	const  F_ID                  = 'id';
	const  F_INTERNALINSPECTION  = 'internalInspection';
	const  F_UPDATED_AT          = 'updated_at';

    protected $table = 'assurance_map_internal_inspection';

	public static array $jsonable = [
		MAssuranceMapInternalInspection::FJ_ID                 =>[ MAssuranceMapInternalInspection::F_ID                 ,null,'string',           ],
		MAssuranceMapInternalInspection::FJ_ASSURANCEMAP       =>[ MAssuranceMapInternalInspection::F_ASSURANCEMAP       ,null,'string',           ],
		MAssuranceMapInternalInspection::FJ_INTERNALINSPECTION =>[ MAssuranceMapInternalInspection::F_INTERNALINSPECTION ,null,'string',           ],
		MAssuranceMapInternalInspection::FJ_AUTHOR             =>[ MAssuranceMapInternalInspection::F_AUTHOR             ,null,'string',           ],
		MAssuranceMapInternalInspection::FJ_CREATED_AT         =>[ MAssuranceMapInternalInspection::F_CREATED_AT         ,'jsonDateTime','string', ],
		MAssuranceMapInternalInspection::FJ_UPDATED_AT         =>[ MAssuranceMapInternalInspection::F_UPDATED_AT         ,'jsonDateTime','string', ],
		MAssuranceMapInternalInspection::FJ_DELETED_AT         =>[ MAssuranceMapInternalInspection::F_DELETED_AT         ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_INTERNALINSPECTION,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_INTERNALINSPECTION,
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
         * @return DInternalInspections|BelongsTo
         */
        public function relInternalInspection(){
            return $this->belongsTo(DInternalInspections::class,self::F_INTERNALINSPECTION, DInternalInspections::F_ID);
        }
            



}

