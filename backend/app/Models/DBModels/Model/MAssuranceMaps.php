<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DPeriods;
use  App\Models\DBModels\Data\DAssuranceMapAutomatedMonitoring;
use  Illuminate\Database\Eloquent\Relations\HasMany;
use  App\Models\DBModels\Data\DAssuranceMapCollegiateBody;
use  App\Models\DBModels\Data\DAssuranceMapDocument;
use  App\Models\DBModels\Data\DAssuranceMapExternalInspection;
use  App\Models\DBModels\Data\DAssuranceMapIcsMatrix;
use  App\Models\DBModels\Data\DAssuranceMapIcsWork;
use  App\Models\DBModels\Data\DAssuranceMapInternalInspection;
use  App\Models\DBModels\Data\DAssuranceMapIssue;
use  App\Models\DBModels\Data\DAssuranceMapProcess;
use  App\Models\DBModels\Data\DAssuranceMapRisk;
use  App\Models\DBModels\Data\DAssuranceMapSelfRating;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMaps
 * Representation for db table assurance_maps.

 * @property  string                             id                                                [1] type:uuid         !NULL PRIMARY 
 * @property  string                             period                                            [2] type:uuid         !NULL         
 * @property  string                             name                                              [3] type:varchar(255) !NULL         
 * @property  string                             status                                            [4] type:uuid         !NULL         
 * @property  \DateTime                          statusDate                                        [5] type:timestamp    !NULL         
 * @property  string                             author                                            [6] type:uuid         !NULL         
 * @property  \DateTime                          created_at                                        [7] type:timestamp                  
 * @property  \DateTime                          updated_at                                        [8] type:timestamp                  
 * @property  \DateTime                          deleted_at                                        [9] type:timestamp                  
 * @property  DUsers                             relAuthor                                                                             
 * @property  DPeriods                           relPeriod                                                                             
 * @property  DAssuranceMapAutomatedMonitoring[] relsAssuranceMapAutomatedMonitoringByAssuranceMap                                     
 * @property  DAssuranceMapCollegiateBody[]      relsAssuranceMapCollegiateBodyByAssuranceMap                                          
 * @property  DAssuranceMapDocument[]            relsAssuranceMapDocumentByAssuranceMap                                                
 * @property  DAssuranceMapExternalInspection[]  relsAssuranceMapExternalInspectionByAssuranceMap                                      
 * @property  DAssuranceMapIcsMatrix[]           relsAssuranceMapIcsMatrixByAssuranceMap                                               
 * @property  DAssuranceMapIcsWork[]             relsAssuranceMapIcsWorkByAssuranceMap                                                 
 * @property  DAssuranceMapInternalInspection[]  relsAssuranceMapInternalInspectionByAssuranceMap                                      
 * @property  DAssuranceMapIssue[]               relsAssuranceMapIssueByAssuranceMap                                                   
 * @property  DAssuranceMapProcess[]             relsAssuranceMapProcessByAssuranceMap                                                 
 * @property  DAssuranceMapRisk[]                relsAssuranceMapRiskByAssuranceMap                                                    
 * @property  DAssuranceMapSelfRating[]          relsAssuranceMapSelfRatingByAssuranceMap                                              
 * @package App\Models\DBModels\Model
 */
class MAssuranceMaps extends DBClass {


	const  FJ_AUTHOR                                             = 'author';
	const  FJ_CREATED_AT                                         = 'createdAt';
	const  FJ_DELETED_AT                                         = 'deletedAt';
	const  FJ_ID                                                 = 'id';
	const  FJ_NAME                                               = 'name';
	const  FJ_PERIOD                                             = 'period';
	const  FJ_STATUS                                             = 'status';
	const  FJ_STATUSDATE                                         = 'statusDate';
	const  FJ_UPDATED_AT                                         = 'updatedAt';
	const  FR_ASSURANCE_MAP_AUTOMATED_MONITORING_BY_ASSURANCEMAP = 'relsAssuranceMapAutomatedMonitoringByAssuranceMap';
	const  FR_ASSURANCE_MAP_COLLEGIATE_BODY_BY_ASSURANCEMAP      = 'relsAssuranceMapCollegiateBodyByAssuranceMap';
	const  FR_ASSURANCE_MAP_DOCUMENT_BY_ASSURANCEMAP             = 'relsAssuranceMapDocumentByAssuranceMap';
	const  FR_ASSURANCE_MAP_EXTERNAL_INSPECTION_BY_ASSURANCEMAP  = 'relsAssuranceMapExternalInspectionByAssuranceMap';
	const  FR_ASSURANCE_MAP_ICS_MATRIX_BY_ASSURANCEMAP           = 'relsAssuranceMapIcsMatrixByAssuranceMap';
	const  FR_ASSURANCE_MAP_ICS_WORK_BY_ASSURANCEMAP             = 'relsAssuranceMapIcsWorkByAssuranceMap';
	const  FR_ASSURANCE_MAP_INTERNAL_INSPECTION_BY_ASSURANCEMAP  = 'relsAssuranceMapInternalInspectionByAssuranceMap';
	const  FR_ASSURANCE_MAP_ISSUE_BY_ASSURANCEMAP                = 'relsAssuranceMapIssueByAssuranceMap';
	const  FR_ASSURANCE_MAP_PROCESS_BY_ASSURANCEMAP              = 'relsAssuranceMapProcessByAssuranceMap';
	const  FR_ASSURANCE_MAP_RISK_BY_ASSURANCEMAP                 = 'relsAssuranceMapRiskByAssuranceMap';
	const  FR_ASSURANCE_MAP_SELF_RATING_BY_ASSURANCEMAP          = 'relsAssuranceMapSelfRatingByAssuranceMap';
	const  FR_AUTHOR                                             = 'relAuthor';
	const  FR_PERIOD                                             = 'relPeriod';
	const  FT_AUTHOR                                             = 'assurance_maps.author';
	const  FT_CREATED_AT                                         = 'assurance_maps.created_at';
	const  FT_DELETED_AT                                         = 'assurance_maps.deleted_at';
	const  FT_ID                                                 = 'assurance_maps.id';
	const  FT_NAME                                               = 'assurance_maps.name';
	const  FT_PERIOD                                             = 'assurance_maps.period';
	const  FT_STATUS                                             = 'assurance_maps.status';
	const  FT_STATUSDATE                                         = 'assurance_maps.statusDate';
	const  FT_UPDATED_AT                                         = 'assurance_maps.updated_at';
	const  F_AUTHOR                                              = 'author';
	const  F_CREATED_AT                                          = 'created_at';
	const  F_DELETED_AT                                          = 'deleted_at';
	const  F_ID                                                  = 'id';
	const  F_NAME                                                = 'name';
	const  F_PERIOD                                              = 'period';
	const  F_STATUS                                              = 'status';
	const  F_STATUSDATE                                          = 'statusDate';
	const  F_UPDATED_AT                                          = 'updated_at';

    protected $table = 'assurance_maps';

	public static array $jsonable = [
		MAssuranceMaps::FJ_ID         =>[ MAssuranceMaps::F_ID         ,null,'string',           ],
		MAssuranceMaps::FJ_PERIOD     =>[ MAssuranceMaps::F_PERIOD     ,null,'string',           ],
		MAssuranceMaps::FJ_NAME       =>[ MAssuranceMaps::F_NAME       ,null,'string',           ],
		MAssuranceMaps::FJ_STATUS     =>[ MAssuranceMaps::F_STATUS     ,null,'string',           ],
		MAssuranceMaps::FJ_STATUSDATE =>[ MAssuranceMaps::F_STATUSDATE ,'jsonDateTime','string', ],
		MAssuranceMaps::FJ_AUTHOR     =>[ MAssuranceMaps::F_AUTHOR     ,null,'string',           ],
		MAssuranceMaps::FJ_CREATED_AT =>[ MAssuranceMaps::F_CREATED_AT ,'jsonDateTime','string', ],
		MAssuranceMaps::FJ_UPDATED_AT =>[ MAssuranceMaps::F_UPDATED_AT ,'jsonDateTime','string', ],
		MAssuranceMaps::FJ_DELETED_AT =>[ MAssuranceMaps::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_PERIOD,
			self::F_NAME,
			self::F_STATUS,
			self::F_STATUSDATE,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_PERIOD,
			 self::F_NAME,
			 self::F_STATUS,
			 self::F_STATUSDATE,
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
         * @return DPeriods|BelongsTo
         */
        public function relPeriod(){
            return $this->belongsTo(DPeriods::class,self::F_PERIOD, DPeriods::F_ID);
        }
            


        /**
         * @return DAssuranceMapAutomatedMonitoring[]|HasMany
         */
        public function relsAssuranceMapAutomatedMonitoringByAssuranceMap(){
            return $this->hasMany(DAssuranceMapAutomatedMonitoring::class, DAssuranceMapAutomatedMonitoring::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapCollegiateBody[]|HasMany
         */
        public function relsAssuranceMapCollegiateBodyByAssuranceMap(){
            return $this->hasMany(DAssuranceMapCollegiateBody::class, DAssuranceMapCollegiateBody::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapDocument[]|HasMany
         */
        public function relsAssuranceMapDocumentByAssuranceMap(){
            return $this->hasMany(DAssuranceMapDocument::class, DAssuranceMapDocument::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapExternalInspection[]|HasMany
         */
        public function relsAssuranceMapExternalInspectionByAssuranceMap(){
            return $this->hasMany(DAssuranceMapExternalInspection::class, DAssuranceMapExternalInspection::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapIcsMatrix[]|HasMany
         */
        public function relsAssuranceMapIcsMatrixByAssuranceMap(){
            return $this->hasMany(DAssuranceMapIcsMatrix::class, DAssuranceMapIcsMatrix::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapIcsWork[]|HasMany
         */
        public function relsAssuranceMapIcsWorkByAssuranceMap(){
            return $this->hasMany(DAssuranceMapIcsWork::class, DAssuranceMapIcsWork::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapInternalInspection[]|HasMany
         */
        public function relsAssuranceMapInternalInspectionByAssuranceMap(){
            return $this->hasMany(DAssuranceMapInternalInspection::class, DAssuranceMapInternalInspection::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapIssue[]|HasMany
         */
        public function relsAssuranceMapIssueByAssuranceMap(){
            return $this->hasMany(DAssuranceMapIssue::class, DAssuranceMapIssue::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapProcess[]|HasMany
         */
        public function relsAssuranceMapProcessByAssuranceMap(){
            return $this->hasMany(DAssuranceMapProcess::class, DAssuranceMapProcess::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapRisk[]|HasMany
         */
        public function relsAssuranceMapRiskByAssuranceMap(){
            return $this->hasMany(DAssuranceMapRisk::class, DAssuranceMapRisk::F_ASSURANCEMAP, self::F_ID);
        }
            

        /**
         * @return DAssuranceMapSelfRating[]|HasMany
         */
        public function relsAssuranceMapSelfRatingByAssuranceMap(){
            return $this->hasMany(DAssuranceMapSelfRating::class, DAssuranceMapSelfRating::F_ASSURANCEMAP, self::F_ID);
        }
            

}

