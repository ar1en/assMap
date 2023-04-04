<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAssuranceMaps;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DAutomatedMonitoring;
use  App\Models\DBModels\DBClass;

/**
 * Class MAssuranceMapAutomatedMonitoring
 * Representation for db table assurance_map_automated_monitoring.

 * @property  string               id                     [1] type:uuid      !NULL PRIMARY 
 * @property  string               assuranceMap           [2] type:uuid      !NULL         
 * @property  string               automatedMonitoring    [3] type:uuid      !NULL         
 * @property  string               author                 [4] type:uuid      !NULL         
 * @property  \DateTime            created_at             [5] type:timestamp               
 * @property  \DateTime            updated_at             [6] type:timestamp               
 * @property  \DateTime            deleted_at             [7] type:timestamp               
 * @property  DAssuranceMaps       relAssuranceMap                                         
 * @property  DUsers               relAuthor                                               
 * @property  DAutomatedMonitoring relAutomatedMonitoring                                  
 * @package App\Models\DBModels\Model
 */
class MAssuranceMapAutomatedMonitoring extends DBClass {


	const  FJ_ASSURANCEMAP        = 'assuranceMap';
	const  FJ_AUTHOR              = 'author';
	const  FJ_AUTOMATEDMONITORING = 'automatedMonitoring';
	const  FJ_CREATED_AT          = 'createdAt';
	const  FJ_DELETED_AT          = 'deletedAt';
	const  FJ_ID                  = 'id';
	const  FJ_UPDATED_AT          = 'updatedAt';
	const  FR_ASSURANCEMAP        = 'relAssuranceMap';
	const  FR_AUTHOR              = 'relAuthor';
	const  FR_AUTOMATEDMONITORING = 'relAutomatedMonitoring';
	const  FT_ASSURANCEMAP        = 'assurance_map_automated_monitoring.assuranceMap';
	const  FT_AUTHOR              = 'assurance_map_automated_monitoring.author';
	const  FT_AUTOMATEDMONITORING = 'assurance_map_automated_monitoring.automatedMonitoring';
	const  FT_CREATED_AT          = 'assurance_map_automated_monitoring.created_at';
	const  FT_DELETED_AT          = 'assurance_map_automated_monitoring.deleted_at';
	const  FT_ID                  = 'assurance_map_automated_monitoring.id';
	const  FT_UPDATED_AT          = 'assurance_map_automated_monitoring.updated_at';
	const  F_ASSURANCEMAP         = 'assuranceMap';
	const  F_AUTHOR               = 'author';
	const  F_AUTOMATEDMONITORING  = 'automatedMonitoring';
	const  F_CREATED_AT           = 'created_at';
	const  F_DELETED_AT           = 'deleted_at';
	const  F_ID                   = 'id';
	const  F_UPDATED_AT           = 'updated_at';

    protected $table = 'assurance_map_automated_monitoring';

	public static array $jsonable = [
		MAssuranceMapAutomatedMonitoring::FJ_ID                  =>[ MAssuranceMapAutomatedMonitoring::F_ID                  ,null,'string',           ],
		MAssuranceMapAutomatedMonitoring::FJ_ASSURANCEMAP        =>[ MAssuranceMapAutomatedMonitoring::F_ASSURANCEMAP        ,null,'string',           ],
		MAssuranceMapAutomatedMonitoring::FJ_AUTOMATEDMONITORING =>[ MAssuranceMapAutomatedMonitoring::F_AUTOMATEDMONITORING ,null,'string',           ],
		MAssuranceMapAutomatedMonitoring::FJ_AUTHOR              =>[ MAssuranceMapAutomatedMonitoring::F_AUTHOR              ,null,'string',           ],
		MAssuranceMapAutomatedMonitoring::FJ_CREATED_AT          =>[ MAssuranceMapAutomatedMonitoring::F_CREATED_AT          ,'jsonDateTime','string', ],
		MAssuranceMapAutomatedMonitoring::FJ_UPDATED_AT          =>[ MAssuranceMapAutomatedMonitoring::F_UPDATED_AT          ,'jsonDateTime','string', ],
		MAssuranceMapAutomatedMonitoring::FJ_DELETED_AT          =>[ MAssuranceMapAutomatedMonitoring::F_DELETED_AT          ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ASSURANCEMAP,
			self::F_AUTOMATEDMONITORING,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ASSURANCEMAP,
			 self::F_AUTOMATEDMONITORING,
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
         * @return DAutomatedMonitoring|BelongsTo
         */
        public function relAutomatedMonitoring(){
            return $this->belongsTo(DAutomatedMonitoring::class,self::F_AUTOMATEDMONITORING, DAutomatedMonitoring::F_ID);
        }
            



}

