<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DRoles;
use  App\Models\DBModels\DBClass;

/**
 * Class MUserRole
 * Representation for db table user_role.

 * @property  string    id         [1] type:uuid      !NULL PRIMARY 
 * @property  string    user       [2] type:uuid      !NULL         
 * @property  string    role       [3] type:uuid      !NULL         
 * @property  string    author     [4] type:uuid      !NULL         
 * @property  \DateTime validFrom  [5] type:timestamp !NULL         
 * @property  \DateTime validUntil [6] type:timestamp               
 * @property  \DateTime created_at [7] type:timestamp               
 * @property  \DateTime updated_at [8] type:timestamp               
 * @property  \DateTime deleted_at [9] type:timestamp               
 * @property  DUsers    relAuthor                                   
 * @property  DRoles    relRole                                     
 * @property  DUsers    relUser                                     
 * @package App\Models\DBModels\Model
 */
class MUserRole extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_ROLE       = 'role';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FJ_USER       = 'user';
	const  FJ_VALIDFROM  = 'validFrom';
	const  FJ_VALIDUNTIL = 'validUntil';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_ROLE       = 'relRole';
	const  FR_USER       = 'relUser';
	const  FT_AUTHOR     = 'user_role.author';
	const  FT_CREATED_AT = 'user_role.created_at';
	const  FT_DELETED_AT = 'user_role.deleted_at';
	const  FT_ID         = 'user_role.id';
	const  FT_ROLE       = 'user_role.role';
	const  FT_UPDATED_AT = 'user_role.updated_at';
	const  FT_USER       = 'user_role.user';
	const  FT_VALIDFROM  = 'user_role.validFrom';
	const  FT_VALIDUNTIL = 'user_role.validUntil';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_ROLE        = 'role';
	const  F_UPDATED_AT  = 'updated_at';
	const  F_USER        = 'user';
	const  F_VALIDFROM   = 'validFrom';
	const  F_VALIDUNTIL  = 'validUntil';

    protected $table = 'user_role';

	public static array $jsonable = [
		MUserRole::FJ_ID         =>[ MUserRole::F_ID         ,null,'string',           ],
		MUserRole::FJ_USER       =>[ MUserRole::F_USER       ,null,'string',           ],
		MUserRole::FJ_ROLE       =>[ MUserRole::F_ROLE       ,null,'string',           ],
		MUserRole::FJ_AUTHOR     =>[ MUserRole::F_AUTHOR     ,null,'string',           ],
		MUserRole::FJ_VALIDFROM  =>[ MUserRole::F_VALIDFROM  ,'jsonDateTime','string', ],
		MUserRole::FJ_VALIDUNTIL =>[ MUserRole::F_VALIDUNTIL ,'jsonDateTime','string', ],
		MUserRole::FJ_CREATED_AT =>[ MUserRole::F_CREATED_AT ,'jsonDateTime','string', ],
		MUserRole::FJ_UPDATED_AT =>[ MUserRole::F_UPDATED_AT ,'jsonDateTime','string', ],
		MUserRole::FJ_DELETED_AT =>[ MUserRole::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_USER,
			self::F_ROLE,
			self::F_AUTHOR,
			self::F_VALIDFROM,
			self::F_VALIDUNTIL,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_USER,
			 self::F_ROLE,
			 self::F_AUTHOR,
			 self::F_VALIDFROM,
			 self::F_VALIDUNTIL,
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
         * @return DRoles|BelongsTo
         */
        public function relRole(){
            return $this->belongsTo(DRoles::class,self::F_ROLE, DRoles::F_ID);
        }
            

        /**
         * @return DUsers|BelongsTo
         */
        public function relUser(){
            return $this->belongsTo(DUsers::class,self::F_USER, DUsers::F_ID);
        }
            



}

