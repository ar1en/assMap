<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DExternalInspections;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapExternalInspection
 * Representation for db table assurance_map_external_inspection.

 * @property  string               id                    [1] type:uuid      !NULL PRIMARY 
 * @property  string               assuranceMap          [2] type:uuid      !NULL         
 * @property  string               externalInspection    [3] type:uuid      !NULL         
 * @property  string               author                [4] type:uuid      !NULL         
 * @property  \DateTime            created_at            [5] type:timestamp               
 * @property  \DateTime            updated_at            [6] type:timestamp               
 * @property  \DateTime            deleted_at            [7] type:timestamp               
 * @property  DAssuranceMaps       relAssuranceMap                                        
 * @property  DUsers               relAuthor                                              
 * @property  DExternalInspections relExternalInspection                                  
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapExternalInspection extends DBClass {


	const  FJ_ASSURANCEMAP       = 'assuranceMap';
	const  FJ_AUTHOR             = 'author';
	const  FJ_CREATED_AT         = 'createdAt';
	const  FJ_DELETED_AT         = 'deletedAt';
	const  FJ_EXTERNALINSPECTION = 'externalInspection';
	const  FJ_ID                 = 'id';
	const  FJ_UPDATED_AT         = 'updatedAt';
	const  FR_ASSURANCEMAP       = 'relAssuranceMap';
	const  FR_AUTHOR             = 'relAuthor';
	const  FR_EXTERNALINSPECTION = 'relExternalInspection';
	const  FT_ASSURANCEMAP       = 'assurance_map_external_inspection.assuranceMap';
	const  FT_AUTHOR             = 'assurance_map_external_inspection.author';
	const  FT_CREATED_AT         = 'assurance_map_external_inspection.created_at';
	const  FT_DELETED_AT         = 'assurance_map_external_inspection.deleted_at';
	const  FT_EXTERNALINSPECTION = 'assurance_map_external_inspection.externalInspection';
	const  FT_ID                 = 'assurance_map_external_inspection.id';
	const  FT_UPDATED_AT         = 'assurance_map_external_inspection.updated_at';
	const  F_ASSURANCEMAP        = 'assuranceMap';
	const  F_AUTHOR              = 'author';
	const  F_CREATED_AT          = 'created_at';
	const  F_DELETED_AT          = 'deleted_at';
	const  F_EXTERNALINSPECTION  = 'externalInspection';
	const  F_ID                  = 'id';
	const  F_UPDATED_AT          = 'updated_at';

    protected $table = 'assurance_map_external_inspection';

	public static array $jsonable = [
		MAssuranceMapExternalInspection::FJ_ID                 =>[ MAssuranceMapExternalInspection::F_ID                 ,null,'string',           ],
		MAssuranceMapExternalInspection::FJ_ASSURANCEMAP       =>[ MAssuranceMapExternalInspection::F_ASSURANCEMAP       ,null,'string',           ],
		MAssuranceMapExternalInspection::FJ_EXTERNALINSPECTION =>[ MAssuranceMapExternalInspection::F_EXTERNALINSPECTION ,null,'string',           ],
		MAssuranceMapExternalInspection::FJ_AUTHOR             =>[ MAssuranceMapExternalInspection::F_AUTHOR             ,null,'string',           ],
		MAssuranceMapExternalInspection::FJ_CREATED_AT         =>[ MAssuranceMapExternalInspection::F_CREATED_AT         ,'jsonDateTime','string', ],
		MAssuranceMapExternalInspection::FJ_UPDATED_AT         =>[ MAssuranceMapExternalInspection::F_UPDATED_AT         ,'jsonDateTime','string', ],
		MAssuranceMapExternalInspection::FJ_DELETED_AT         =>[ MAssuranceMapExternalInspection::F_DELETED_AT         ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_EXTERNALINSPECTION,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_EXTERNALINSPECTION,
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
         * @return DExternalInspections|BelongsTo
         */
        public function relExternalInspection(){
            return $this->belongsTo(DExternalInspections::class,self::F_EXTERNALINSPECTION, DExternalInspections::F_ID);
        }
            



}

