<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DInternalInspections;
use  App\Models\DBModels\Data\DRisks;
use  App\Models\DBModels\DBClass;

/**
 * Class MInternalInspectionRisk
 * Representation for db table internal_inspection_risk.

 * @property  string               id                    [1] type:uuid      !NULL PRIMARY 
 * @property  string               internalInspection    [2] type:uuid      !NULL         
 * @property  string               risk                  [3] type:uuid      !NULL         
 * @property  string               author                [4] type:uuid      !NULL         
 * @property  \DateTime            created_at            [5] type:timestamp               
 * @property  \DateTime            updated_at            [6] type:timestamp               
 * @property  \DateTime            deleted_at            [7] type:timestamp               
 * @property  DUsers               relAuthor                                              
 * @property  DInternalInspections relInternalInspection                                  
 * @property  DRisks               relRisk                                                
 * @package App\Models\DBModels\Model
 */
class MInternalInspectionRisk extends DBClass {


	const  FJ_AUTHOR             = 'author';
	const  FJ_CREATED_AT         = 'createdAt';
	const  FJ_DELETED_AT         = 'deletedAt';
	const  FJ_ID                 = 'id';
	const  FJ_INTERNALINSPECTION = 'internalInspection';
	const  FJ_RISK               = 'risk';
	const  FJ_UPDATED_AT         = 'updatedAt';
	const  FR_AUTHOR             = 'relAuthor';
	const  FR_INTERNALINSPECTION = 'relInternalInspection';
	const  FR_RISK               = 'relRisk';
	const  FT_AUTHOR             = 'internal_inspection_risk.author';
	const  FT_CREATED_AT         = 'internal_inspection_risk.created_at';
	const  FT_DELETED_AT         = 'internal_inspection_risk.deleted_at';
	const  FT_ID                 = 'internal_inspection_risk.id';
	const  FT_INTERNALINSPECTION = 'internal_inspection_risk.internalInspection';
	const  FT_RISK               = 'internal_inspection_risk.risk';
	const  FT_UPDATED_AT         = 'internal_inspection_risk.updated_at';
	const  F_AUTHOR              = 'author';
	const  F_CREATED_AT          = 'created_at';
	const  F_DELETED_AT          = 'deleted_at';
	const  F_ID                  = 'id';
	const  F_INTERNALINSPECTION  = 'internalInspection';
	const  F_RISK                = 'risk';
	const  F_UPDATED_AT          = 'updated_at';

    protected $table = 'internal_inspection_risk';

	public static array $jsonable = [
		MInternalInspectionRisk::FJ_ID                 =>[ MInternalInspectionRisk::F_ID                 ,null,'string',           ],
		MInternalInspectionRisk::FJ_INTERNALINSPECTION =>[ MInternalInspectionRisk::F_INTERNALINSPECTION ,null,'string',           ],
		MInternalInspectionRisk::FJ_RISK               =>[ MInternalInspectionRisk::F_RISK               ,null,'string',           ],
		MInternalInspectionRisk::FJ_AUTHOR             =>[ MInternalInspectionRisk::F_AUTHOR             ,null,'string',           ],
		MInternalInspectionRisk::FJ_CREATED_AT         =>[ MInternalInspectionRisk::F_CREATED_AT         ,'jsonDateTime','string', ],
		MInternalInspectionRisk::FJ_UPDATED_AT         =>[ MInternalInspectionRisk::F_UPDATED_AT         ,'jsonDateTime','string', ],
		MInternalInspectionRisk::FJ_DELETED_AT         =>[ MInternalInspectionRisk::F_DELETED_AT         ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_INTERNALINSPECTION,
			self::F_RISK,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_INTERNALINSPECTION,
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
         * @return DInternalInspections|BelongsTo
         */
        public function relInternalInspection(){
            return $this->belongsTo(DInternalInspections::class,self::F_INTERNALINSPECTION, DInternalInspections::F_ID);
        }
            

        /**
         * @return DRisks|BelongsTo
         */
        public function relRisk(){
            return $this->belongsTo(DRisks::class,self::F_RISK, DRisks::F_ID);
        }
            



}

