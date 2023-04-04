<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DRisksTypes;
use  App\Models\DBModels\Data\DAssuranceMapRisk;
use  Illuminate\Database\Eloquent\Relations\HasMany;
use  App\Models\DBModels\Data\DExternalInspectionRisk;
use  App\Models\DBModels\Data\DInternalInspectionRisk;
use  App\Models\DBModels\Data\DRiskProcesses;
use  App\Models\DBModels\Data\DRiskRates;
use  App\Models\DBModels\Data\DRiskRisk;
use  App\Models\DBModels\DBClass;

/**
 * Class MRisks
 * Representation for db table risks.

 * @property  string                    id                               [1]  type:uuid         !NULL PRIMARY 
 * @property  string                    sasId                            [2]  type:varchar(255) !NULL         UNIQUE
 * @property  string                    bpmId                            [3]  type:varchar(255) !NULL         UNIQUE
 * @property  string                    name                             [4]  type:text         !NULL         
 * @property  string                    type                             [5]  type:uuid         !NULL         
 * @property  string                    code                             [6]  type:varchar(255)               
 * @property  \DateTime                 validFrom                        [7]  type:timestamp    !NULL         
 * @property  \DateTime                 validUntil                       [8]  type:timestamp                  
 * @property  string                    author                           [9]  type:uuid         !NULL         
 * @property  \DateTime                 created_at                       [10] type:timestamp                  
 * @property  \DateTime                 updated_at                       [11] type:timestamp                  
 * @property  \DateTime                 deleted_at                       [12] type:timestamp                  
 * @property  DUsers                    relAuthor                                                             
 * @property  DRisksTypes               relType                                                               
 * @property  DAssuranceMapRisk[]       relsAssuranceMapRiskByRisk                                            
 * @property  DExternalInspectionRisk[] relsExternalInspectionRiskByRisk                                      
 * @property  DInternalInspectionRisk[] relsInternalInspectionRiskByRisk                                      
 * @property  DRiskProcesses[]          relsRiskProcessesByRisk                                               
 * @property  DRiskRates[]              relsRiskRatesByRisk                                                   
 * @property  DRiskRisk[]               relsRiskRiskByRisk1                                                   
 * @property  DRiskRisk[]               relsRiskRiskByRisk2                                                   
 * @package App\Models\DBModels\Model
 */
class MRisks extends DBClass {


	const  FJ_AUTHOR                           = 'author';
	const  FJ_BPMID                            = 'bpmId';
	const  FJ_CODE                             = 'code';
	const  FJ_CREATED_AT                       = 'createdAt';
	const  FJ_DELETED_AT                       = 'deletedAt';
	const  FJ_ID                               = 'id';
	const  FJ_NAME                             = 'name';
	const  FJ_SASID                            = 'sasId';
	const  FJ_TYPE                             = 'type';
	const  FJ_UPDATED_AT                       = 'updatedAt';
	const  FJ_VALIDFROM                        = 'validFrom';
	const  FJ_VALIDUNTIL                       = 'validUntil';
	const  FR_ASSURANCE_MAP_RISK_BY_RISK       = 'relsAssuranceMapRiskByRisk';
	const  FR_AUTHOR                           = 'relAuthor';
	const  FR_EXTERNAL_INSPECTION_RISK_BY_RISK = 'relsExternalInspectionRiskByRisk';
	const  FR_INTERNAL_INSPECTION_RISK_BY_RISK = 'relsInternalInspectionRiskByRisk';
	const  FR_RISK_PROCESSES_BY_RISK           = 'relsRiskProcessesByRisk';
	const  FR_RISK_RATES_BY_RISK               = 'relsRiskRatesByRisk';
	const  FR_RISK_RISK_BY_RISK1               = 'relsRiskRiskByRisk1';
	const  FR_RISK_RISK_BY_RISK2               = 'relsRiskRiskByRisk2';
	const  FR_TYPE                             = 'relType';
	const  FT_AUTHOR                           = 'risks.author';
	const  FT_BPMID                            = 'risks.bpmId';
	const  FT_CODE                             = 'risks.code';
	const  FT_CREATED_AT                       = 'risks.created_at';
	const  FT_DELETED_AT                       = 'risks.deleted_at';
	const  FT_ID                               = 'risks.id';
	const  FT_NAME                             = 'risks.name';
	const  FT_SASID                            = 'risks.sasId';
	const  FT_TYPE                             = 'risks.type';
	const  FT_UPDATED_AT                       = 'risks.updated_at';
	const  FT_VALIDFROM                        = 'risks.validFrom';
	const  FT_VALIDUNTIL                       = 'risks.validUntil';
	const  F_AUTHOR                            = 'author';
	const  F_BPMID                             = 'bpmId';
	const  F_CODE                              = 'code';
	const  F_CREATED_AT                        = 'created_at';
	const  F_DELETED_AT                        = 'deleted_at';
	const  F_ID                                = 'id';
	const  F_NAME                              = 'name';
	const  F_SASID                             = 'sasId';
	const  F_TYPE                              = 'type';
	const  F_UPDATED_AT                        = 'updated_at';
	const  F_VALIDFROM                         = 'validFrom';
	const  F_VALIDUNTIL                        = 'validUntil';

    protected $table = 'risks';

	public static array $jsonable = [
		MRisks::FJ_ID         =>[ MRisks::F_ID         ,null,'string',           ],
		MRisks::FJ_SASID      =>[ MRisks::F_SASID      ,null,'string',           ],
		MRisks::FJ_BPMID      =>[ MRisks::F_BPMID      ,null,'string',           ],
		MRisks::FJ_NAME       =>[ MRisks::F_NAME       ,null,'string',           ],
		MRisks::FJ_TYPE       =>[ MRisks::F_TYPE       ,null,'string',           ],
		MRisks::FJ_CODE       =>[ MRisks::F_CODE       ,null,'string',           ],
		MRisks::FJ_VALIDFROM  =>[ MRisks::F_VALIDFROM  ,'jsonDateTime','string', ],
		MRisks::FJ_VALIDUNTIL =>[ MRisks::F_VALIDUNTIL ,'jsonDateTime','string', ],
		MRisks::FJ_AUTHOR     =>[ MRisks::F_AUTHOR     ,null,'string',           ],
		MRisks::FJ_CREATED_AT =>[ MRisks::F_CREATED_AT ,'jsonDateTime','string', ],
		MRisks::FJ_UPDATED_AT =>[ MRisks::F_UPDATED_AT ,'jsonDateTime','string', ],
		MRisks::FJ_DELETED_AT =>[ MRisks::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_SASID,
			self::F_BPMID,
			self::F_NAME,
			self::F_TYPE,
			self::F_CODE,
			self::F_VALIDFROM,
			self::F_VALIDUNTIL,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_SASID,
			 self::F_BPMID,
			 self::F_NAME,
			 self::F_TYPE,
			 self::F_CODE,
			 self::F_VALIDFROM,
			 self::F_VALIDUNTIL,
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
         * @return DRisksTypes|BelongsTo
         */
        public function relType(){
            return $this->belongsTo(DRisksTypes::class,self::F_TYPE, DRisksTypes::F_ID);
        }
            


        /**
         * @return DAssuranceMapRisk[]|HasMany
         */
        public function relsAssuranceMapRiskByRisk(){
            return $this->hasMany(DAssuranceMapRisk::class, DAssuranceMapRisk::F_RISK, self::F_ID);
        }
            

        /**
         * @return DExternalInspectionRisk[]|HasMany
         */
        public function relsExternalInspectionRiskByRisk(){
            return $this->hasMany(DExternalInspectionRisk::class, DExternalInspectionRisk::F_RISK, self::F_ID);
        }
            

        /**
         * @return DInternalInspectionRisk[]|HasMany
         */
        public function relsInternalInspectionRiskByRisk(){
            return $this->hasMany(DInternalInspectionRisk::class, DInternalInspectionRisk::F_RISK, self::F_ID);
        }
            

        /**
         * @return DRiskProcesses[]|HasMany
         */
        public function relsRiskProcessesByRisk(){
            return $this->hasMany(DRiskProcesses::class, DRiskProcesses::F_RISK, self::F_ID);
        }
            

        /**
         * @return DRiskRates[]|HasMany
         */
        public function relsRiskRatesByRisk(){
            return $this->hasMany(DRiskRates::class, DRiskRates::F_RISK, self::F_ID);
        }
            

        /**
         * @return DRiskRisk[]|HasMany
         */
        public function relsRiskRiskByRisk1(){
            return $this->hasMany(DRiskRisk::class, DRiskRisk::F_RISK1, self::F_ID);
        }
            

        /**
         * @return DRiskRisk[]|HasMany
         */
        public function relsRiskRiskByRisk2(){
            return $this->hasMany(DRiskRisk::class, DRiskRisk::F_RISK2, self::F_ID);
        }
            

}

