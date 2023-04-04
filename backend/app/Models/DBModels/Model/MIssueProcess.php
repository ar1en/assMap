<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DIssues;
use  App\Models\DBModels\Data\DProcesses;
use  App\Models\DBModels\DBClass;

/**
 * Class MIssueProcess
 * Representation for db table issue_process.

 * @property  string     id         [1] type:uuid      !NULL PRIMARY 
 * @property  string     issue      [2] type:uuid      !NULL         
 * @property  string     process    [3] type:uuid      !NULL         
 * @property  string     author     [4] type:uuid      !NULL         
 * @property  \DateTime  created_at [5] type:timestamp               
 * @property  \DateTime  updated_at [6] type:timestamp               
 * @property  \DateTime  deleted_at [7] type:timestamp               
 * @property  DUsers     relAuthor                                   
 * @property  DIssues    relIssue                                    
 * @property  DProcesses relProcess                                  
 * @package App\Models\DBModels\Model
 */
class MIssueProcess extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_ISSUE      = 'issue';
	const  FJ_PROCESS    = 'process';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_ISSUE      = 'relIssue';
	const  FR_PROCESS    = 'relProcess';
	const  FT_AUTHOR     = 'issue_process.author';
	const  FT_CREATED_AT = 'issue_process.created_at';
	const  FT_DELETED_AT = 'issue_process.deleted_at';
	const  FT_ID         = 'issue_process.id';
	const  FT_ISSUE      = 'issue_process.issue';
	const  FT_PROCESS    = 'issue_process.process';
	const  FT_UPDATED_AT = 'issue_process.updated_at';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_ISSUE       = 'issue';
	const  F_PROCESS     = 'process';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'issue_process';

	public static array $jsonable = [
		MIssueProcess::FJ_ID         =>[ MIssueProcess::F_ID         ,null,'string',           ],
		MIssueProcess::FJ_ISSUE      =>[ MIssueProcess::F_ISSUE      ,null,'string',           ],
		MIssueProcess::FJ_PROCESS    =>[ MIssueProcess::F_PROCESS    ,null,'string',           ],
		MIssueProcess::FJ_AUTHOR     =>[ MIssueProcess::F_AUTHOR     ,null,'string',           ],
		MIssueProcess::FJ_CREATED_AT =>[ MIssueProcess::F_CREATED_AT ,'jsonDateTime','string', ],
		MIssueProcess::FJ_UPDATED_AT =>[ MIssueProcess::F_UPDATED_AT ,'jsonDateTime','string', ],
		MIssueProcess::FJ_DELETED_AT =>[ MIssueProcess::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ISSUE,
			self::F_PROCESS,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ISSUE,
			 self::F_PROCESS,
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
         * @return DIssues|BelongsTo
         */
        public function relIssue(){
            return $this->belongsTo(DIssues::class,self::F_ISSUE, DIssues::F_ID);
        }
            

        /**
         * @return DProcesses|BelongsTo
         */
        public function relProcess(){
            return $this->belongsTo(DProcesses::class,self::F_PROCESS, DProcesses::F_ID);
        }
            



}

