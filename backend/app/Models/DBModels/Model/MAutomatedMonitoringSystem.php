<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DAutomatedMonitoring;
use  App\Models\DBModels\Data\DSystems;
use  App\Models\DBModels\DBClass;

/**
 * Class MAutomatedMonitoringSystem
 * Representation for db table automated_monitoring_system.

 * @property  string               id                     [1] type:uuid      !NULL PRIMARY 
 * @property  string               automatedMonitoring    [2] type:uuid      !NULL         
 * @property  string               system                 [3] type:uuid      !NULL         
 * @property  string               author                 [4] type:uuid      !NULL         
 * @property  \DateTime            created_at             [5] type:timestamp               
 * @property  \DateTime            updated_at             [6] type:timestamp               
 * @property  \DateTime            deleted_at             [7] type:timestamp               
 * @property  DUsers               relAuthor                                               
 * @property  DAutomatedMonitoring relAutomatedMonitoring                                  
 * @property  DSystems             relSystem                                               
 * @package App\Models\DBModels\Model
 */
class MAutomatedMonitoringSystem extends DBClass {


	const  FJ_AUTHOR              = 'author';
	const  FJ_AUTOMATEDMONITORING = 'automatedMonitoring';
	const  FJ_CREATED_AT          = 'createdAt';
	const  FJ_DELETED_AT          = 'deletedAt';
	const  FJ_ID                  = 'id';
	const  FJ_SYSTEM              = 'system';
	const  FJ_UPDATED_AT          = 'updatedAt';
	const  FR_AUTHOR              = 'relAuthor';
	const  FR_AUTOMATEDMONITORING = 'relAutomatedMonitoring';
	const  FR_SYSTEM              = 'relSystem';
	const  FT_AUTHOR              = 'automated_monitoring_system.author';
	const  FT_AUTOMATEDMONITORING = 'automated_monitoring_system.automatedMonitoring';
	const  FT_CREATED_AT          = 'automated_monitoring_system.created_at';
	const  FT_DELETED_AT          = 'automated_monitoring_system.deleted_at';
	const  FT_ID                  = 'automated_monitoring_system.id';
	const  FT_SYSTEM              = 'automated_monitoring_system.system';
	const  FT_UPDATED_AT          = 'automated_monitoring_system.updated_at';
	const  F_AUTHOR               = 'author';
	const  F_AUTOMATEDMONITORING  = 'automatedMonitoring';
	const  F_CREATED_AT           = 'created_at';
	const  F_DELETED_AT           = 'deleted_at';
	const  F_ID                   = 'id';
	const  F_SYSTEM               = 'system';
	const  F_UPDATED_AT           = 'updated_at';

    protected $table = 'automated_monitoring_system';

	public static array $jsonable = [
		MAutomatedMonitoringSystem::FJ_ID                  =>[ MAutomatedMonitoringSystem::F_ID                  ,null,'string',           ],
		MAutomatedMonitoringSystem::FJ_AUTOMATEDMONITORING =>[ MAutomatedMonitoringSystem::F_AUTOMATEDMONITORING ,null,'string',           ],
		MAutomatedMonitoringSystem::FJ_SYSTEM              =>[ MAutomatedMonitoringSystem::F_SYSTEM              ,null,'string',           ],
		MAutomatedMonitoringSystem::FJ_AUTHOR              =>[ MAutomatedMonitoringSystem::F_AUTHOR              ,null,'string',           ],
		MAutomatedMonitoringSystem::FJ_CREATED_AT          =>[ MAutomatedMonitoringSystem::F_CREATED_AT          ,'jsonDateTime','string', ],
		MAutomatedMonitoringSystem::FJ_UPDATED_AT          =>[ MAutomatedMonitoringSystem::F_UPDATED_AT          ,'jsonDateTime','string', ],
		MAutomatedMonitoringSystem::FJ_DELETED_AT          =>[ MAutomatedMonitoringSystem::F_DELETED_AT          ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_AUTOMATEDMONITORING,
			self::F_SYSTEM,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_AUTOMATEDMONITORING,
			 self::F_SYSTEM,
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
         * @return DAutomatedMonitoring|BelongsTo
         */
        public function relAutomatedMonitoring(){
            return $this->belongsTo(DAutomatedMonitoring::class,self::F_AUTOMATEDMONITORING, DAutomatedMonitoring::F_ID);
        }
            

        /**
         * @return DSystems|BelongsTo
         */
        public function relSystem(){
            return $this->belongsTo(DSystems::class,self::F_SYSTEM, DSystems::F_ID);
        }
            



}

