<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DAudits;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DUsers;
use  App\Models\DBModels\Data\DObjects;
use  App\Models\DBModels\DBClass;

/**
 * Class MAuditObject
 * Representation for db table audit_object.

 * @property  string    id         [1] type:uuid      !NULL PRIMARY 
 * @property  string    audit      [2] type:uuid      !NULL         
 * @property  string    object     [3] type:uuid      !NULL         
 * @property  string    author     [4] type:uuid      !NULL         
 * @property  \DateTime created_at [5] type:timestamp               
 * @property  \DateTime updated_at [6] type:timestamp               
 * @property  \DateTime deleted_at [7] type:timestamp               
 * @property  DAudits   relAudit                                    
 * @property  DUsers    relAuthor                                   
 * @property  DObjects  relObject                                   
 * @package App\Models\DBModels\Model
 */
class MAuditObject extends DBClass {


	const  FJ_AUDIT      = 'audit';
	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_OBJECT     = 'object';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FR_AUDIT      = 'relAudit';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_OBJECT     = 'relObject';
	const  FT_AUDIT      = 'audit_object.audit';
	const  FT_AUTHOR     = 'audit_object.author';
	const  FT_CREATED_AT = 'audit_object.created_at';
	const  FT_DELETED_AT = 'audit_object.deleted_at';
	const  FT_ID         = 'audit_object.id';
	const  FT_OBJECT     = 'audit_object.object';
	const  FT_UPDATED_AT = 'audit_object.updated_at';
	const  F_AUDIT       = 'audit';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_OBJECT      = 'object';
	const  F_UPDATED_AT  = 'updated_at';

    protected $table = 'audit_object';

	public static array $jsonable = [
		MAuditObject::FJ_ID         =>[ MAuditObject::F_ID         ,null,'string',           ],
		MAuditObject::FJ_AUDIT      =>[ MAuditObject::F_AUDIT      ,null,'string',           ],
		MAuditObject::FJ_OBJECT     =>[ MAuditObject::F_OBJECT     ,null,'string',           ],
		MAuditObject::FJ_AUTHOR     =>[ MAuditObject::F_AUTHOR     ,null,'string',           ],
		MAuditObject::FJ_CREATED_AT =>[ MAuditObject::F_CREATED_AT ,'jsonDateTime','string', ],
		MAuditObject::FJ_UPDATED_AT =>[ MAuditObject::F_UPDATED_AT ,'jsonDateTime','string', ],
		MAuditObject::FJ_DELETED_AT =>[ MAuditObject::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_AUDIT,
			self::F_OBJECT,
			self::F_AUTHOR,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_AUDIT,
			 self::F_OBJECT,
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
         * @return DObjects|BelongsTo
         */
        public function relObject(){
            return $this->belongsTo(DObjects::class,self::F_OBJECT, DObjects::F_ID);
        }
            



}

