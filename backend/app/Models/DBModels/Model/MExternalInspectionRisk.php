<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DExternalInspections;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\DBClass;

/**
 * Class MExternalInspectionRisk
 * Representation for db table external_inspection_risk.

 * @property  string               id                    [1] type:uuid      !NULL PRIMARY 
 * @property  string               externalInspection    [2] type:uuid      !NULL         
 * @property  string               risk                  [3] type:uuid      !NULL         
 * @property  string               author                [4] type:uuid      !NULL         
 * @property  \DateTime            created_at            [5] type:timestamp               
 * @property  \DateTime            updated_at            [6] type:timestamp               
 * @property  \DateTime            deleted_at            [7] type:timestamp               
 * @property  DUsers               relAuthor                                              
 * @property  DExternalInspections relExternalInspection                                  
 * @property  DRisks               relRisk                                                
 * @package App\Models\DBModels\Model
 */
class MExternalInspectionRisk extends DBClass {


	const  FJ_AUTHOR             = 'author';
	const  FJ_CREATED_AT         = 'createdAt';
	const  FJ_DELETED_AT         = 'deletedAt';
	const  FJ_EXTERNALINSPECTION = 'externalInspection';
	const  FJ_ID                 = 'id';
	const  FJ_RISK               = 'risk';
	const  FJ_UPDATED_AT         = 'updatedAt';
	const  FR_AUTHOR             = 'relAuthor';
	const  FR_EXTERNALINSPECTION = 'relExternalInspection';
	const  FR_RISK               = 'relRisk';
	const  FT_AUTHOR             = 'external_inspection_risk.author';
	const  FT_CREATED_AT         = 'external_inspection_risk.created_at';
	const  FT_DELETED_AT         = 'external_inspection_risk.deleted_at';
	const  FT_EXTERNALINSPECTION = 'external_inspection_risk.externalInspection';
	const  FT_ID                 = 'external_inspection_risk.id';
	const  FT_RISK               = 'external_inspection_risk.risk';
	const  FT_UPDATED_AT         = 'external_inspection_risk.updated_at';
	const  F_AUTHOR              = 'author';
	const  F_CREATED_AT          = 'created_at';
	const  F_DELETED_AT          = 'deleted_at';
	const  F_EXTERNALINSPECTION  = 'externalInspection';
	const  F_ID                  = 'id';
	const  F_RISK                = 'risk';
	const  F_UPDATED_AT          = 'updated_at';

    protected $table = 'external_inspection_risk';

	public static array $jsonable = [
		MExternalInspectionRisk::FJ_ID                 =>[ MExternalInspectionRisk::F_ID                 ,null,'string',           ],
		MExternalInspectionRisk::FJ_EXTERNALINSPECTION =>[ MExternalInspectionRisk::F_EXTERNALINSPECTION ,null,'string',           ],
		MExternalInspectionRisk::FJ_RISK               =>[ MExternalInspectionRisk::F_RISK               ,null,'string',           ],
		MExternalInspectionRisk::FJ_AUTHOR             =>[ MExternalInspectionRisk::F_AUTHOR             ,null,'string',           ],
		MExternalInspectionRisk::FJ_CREATED_AT         =>[ MExternalInspectionRisk::F_CREATED_AT         ,'jsonDateTime','string', ],
		MExternalInspectionRisk::FJ_UPDATED_AT         =>[ MExternalInspectionRisk::F_UPDATED_AT         ,'jsonDateTime','string', ],
		MExternalInspectionRisk::FJ_DELETED_AT         =>[ MExternalInspectionRisk::F_DELETED_AT         ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_EXTERNALINSPECTION,
			self::F_RISK,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_EXTERNALINSPECTION,
			 self::F_RISK,
			 self::F_AUTHOR,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];


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
            

        /**
         * @return DRisks|BelongsTo
         */
        public function relRisk(){
            return $this->belongsTo(DRisks::class,self::F_RISK, DRisks::F_ID);
        }
            



}

