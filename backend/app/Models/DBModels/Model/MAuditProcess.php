<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAudits;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MAuditProcess
 * Representation for db table audit_process.

 * @property  string     id         [1] type:uuid      !NULL PRIMARY 
 * @property  string     audit      [2] type:uuid      !NULL         
 * @property  string     process    [3] type:uuid      !NULL         
 * @property  string     author     [4] type:uuid      !NULL         
 * @property  \DateTime  created_at [5] type:timestamp               
 * @property  \DateTime  updated_at [6] type:timestamp               
 * @property  \DateTime  deleted_at [7] type:timestamp               
 * @property  DAudits    relAudit                                    
 * @property  DUsers     relAuthor                                   
 * @property  DProcesses relProcess                                  
 * @package App\Models\DBModels\Model
 */
class MAuditProcess extends DBClass {


	const  FJ_AUDIT      = 'audit';
	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_PROCESS    = 'process';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUDIT      = 'relAudit';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_PROCESS    = 'relProcess';
	const  FT_AUDIT      = 'audit_process.audit';
	const  FT_AUTHOR     = 'audit_process.author';
	const  FT_CREATED_AT = 'audit_process.created_at';
	const  FT_DELETED_AT = 'audit_process.deleted_at';
	const  FT_ID         = 'audit_process.id';
	const  FT_PROCESS    = 'audit_process.process';
	const  FT_UPDATED_AT = 'audit_process.updated_at';
	const  F_AUDIT       = 'audit';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_PROCESS     = 'process';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'audit_process';

	public static array $jsonable = [
		MAuditProcess::FJ_ID         =>[ MAuditProcess::F_ID         ,null,'string',           ],
		MAuditProcess::FJ_AUDIT      =>[ MAuditProcess::F_AUDIT      ,null,'string',           ],
		MAuditProcess::FJ_PROCESS    =>[ MAuditProcess::F_PROCESS    ,null,'string',           ],
		MAuditProcess::FJ_AUTHOR     =>[ MAuditProcess::F_AUTHOR     ,null,'string',           ],
		MAuditProcess::FJ_CREATED_AT =>[ MAuditProcess::F_CREATED_AT ,'jsonDateTime','string', ],
		MAuditProcess::FJ_UPDATED_AT =>[ MAuditProcess::F_UPDATED_AT ,'jsonDateTime','string', ],
		MAuditProcess::FJ_DELETED_AT =>[ MAuditProcess::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_AUDIT,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_AUDIT,
			 self::F_PROCESS,
			 self::F_AUTHOR,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];


        /**
         * @return DAudits|BelongsTo
         */
        public function relAudit(){
            return $this->belongsTo(DAudits::class,self::F_AUDIT, DAudits::F_ID);
        }
            

        /**
         * @return DUsers|BelongsTo
         */
        public function relAuthor(){
            return $this->belongsTo(DUsers::class,self::F_AUTHOR, DUsers::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

