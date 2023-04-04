<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAudits;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DIssues;
use  App\Models\DBModels\DBClass;

/**
 * Class MAuditIssue
 * Representation for db table audit_issue.

 * @property  string    id         [1] type:uuid      !NULL PRIMARY 
 * @property  string    audit      [2] type:uuid      !NULL         
 * @property  string    issue      [3] type:uuid      !NULL         
 * @property  string    author     [4] type:uuid      !NULL         
 * @property  \DateTime created_at [5] type:timestamp               
 * @property  \DateTime updated_at [6] type:timestamp               
 * @property  \DateTime deleted_at [7] type:timestamp               
 * @property  DAudits   relAudit                                    
 * @property  DUsers    relAuthor                                   
 * @property  DIssues   relIssue                                    
 * @package App\Models\DBModels\Model
 */
class MAuditIssue extends DBClass {


	const  FJ_AUDIT      = 'audit';
	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_ISSUE      = 'issue';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUDIT      = 'relAudit';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_ISSUE      = 'relIssue';
	const  FT_AUDIT      = 'audit_issue.audit';
	const  FT_AUTHOR     = 'audit_issue.author';
	const  FT_CREATED_AT = 'audit_issue.created_at';
	const  FT_DELETED_AT = 'audit_issue.deleted_at';
	const  FT_ID         = 'audit_issue.id';
	const  FT_ISSUE      = 'audit_issue.issue';
	const  FT_UPDATED_AT = 'audit_issue.updated_at';
	const  F_AUDIT       = 'audit';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_ISSUE       = 'issue';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'audit_issue';

	public static array $jsonable = [
		MAuditIssue::FJ_ID         =>[ MAuditIssue::F_ID         ,null,'string',           ],
		MAuditIssue::FJ_AUDIT      =>[ MAuditIssue::F_AUDIT      ,null,'string',           ],
		MAuditIssue::FJ_ISSUE      =>[ MAuditIssue::F_ISSUE      ,null,'string',           ],
		MAuditIssue::FJ_AUTHOR     =>[ MAuditIssue::F_AUTHOR     ,null,'string',           ],
		MAuditIssue::FJ_CREATED_AT =>[ MAuditIssue::F_CREATED_AT ,'jsonDateTime','string', ],
		MAuditIssue::FJ_UPDATED_AT =>[ MAuditIssue::F_UPDATED_AT ,'jsonDateTime','string', ],
		MAuditIssue::FJ_DELETED_AT =>[ MAuditIssue::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_AUDIT,
			self::F_ISSUE,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_AUDIT,
			 self::F_ISSUE,
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
         * @return DIssues|BelongsTo
         */
        public function relIssue(){
            return $this->belongsTo(DIssues::class,self::F_ISSUE, DIssues::F_ID);
        }
            



}

