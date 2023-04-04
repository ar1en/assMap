<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\Data\DUsers;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use  App\Models\DBModels\Data\DPermissions;
use  App\Models\DBModels\Data\DRoles;
use  App\Models\DBModels\DBClass;

/**
 * Class MRolePermission
 * Representation for db table role_permission.

 * @property  string       id            [1] type:uuid      !NULL PRIMARY 
 * @property  string       role          [2] type:uuid      !NULL         
 * @property  string       permission    [3] type:uuid      !NULL         
 * @property  string       author        [4] type:uuid      !NULL         
 * @property  \DateTime    validFrom     [5] type:timestamp !NULL         
 * @property  \DateTime    validUntil    [6] type:timestamp !NULL         
 * @property  \DateTime    created_at    [7] type:timestamp               
 * @property  \DateTime    updated_at    [8] type:timestamp               
 * @property  \DateTime    deleted_at    [9] type:timestamp               
 * @property  DUsers       relAuthor                                      
 * @property  DPermissions relPermission                                  
 * @property  DRoles       relRole                                        
 * @package App\Models\DBModels\Model
 */
class MRolePermission extends DBClass {


	const  FJ_AUTHOR     = 'author';
	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_DELETED_AT = 'deletedAt';
	const  FJ_ID         = 'id';
	const  FJ_PERMISSION = 'permission';
	const  FJ_ROLE       = 'role';
	const  FJ_UPDATED_AT = 'updatedAt';
	const  FJ_VALIDFROM  = 'validFrom';
	const  FJ_VALIDUNTIL = 'validUntil';
	const  FR_AUTHOR     = 'relAuthor';
	const  FR_PERMISSION = 'relPermission';
	const  FR_ROLE       = 'relRole';
	const  FT_AUTHOR     = 'role_permission.author';
	const  FT_CREATED_AT = 'role_permission.created_at';
	const  FT_DELETED_AT = 'role_permission.deleted_at';
	const  FT_ID         = 'role_permission.id';
	const  FT_PERMISSION = 'role_permission.permission';
	const  FT_ROLE       = 'role_permission.role';
	const  FT_UPDATED_AT = 'role_permission.updated_at';
	const  FT_VALIDFROM  = 'role_permission.validFrom';
	const  FT_VALIDUNTIL = 'role_permission.validUntil';
	const  F_AUTHOR      = 'author';
	const  F_CREATED_AT  = 'created_at';
	const  F_DELETED_AT  = 'deleted_at';
	const  F_ID          = 'id';
	const  F_PERMISSION  = 'permission';
	const  F_ROLE        = 'role';
	const  F_UPDATED_AT  = 'updated_at';
	const  F_VALIDFROM   = 'validFrom';
	const  F_VALIDUNTIL  = 'validUntil';

    protected $table = 'role_permission';

	public static array $jsonable = [
		MRolePermission::FJ_ID         =>[ MRolePermission::F_ID         ,null,'string',           ],
		MRolePermission::FJ_ROLE       =>[ MRolePermission::F_ROLE       ,null,'string',           ],
		MRolePermission::FJ_PERMISSION =>[ MRolePermission::F_PERMISSION ,null,'string',           ],
		MRolePermission::FJ_AUTHOR     =>[ MRolePermission::F_AUTHOR     ,null,'string',           ],
		MRolePermission::FJ_VALIDFROM  =>[ MRolePermission::F_VALIDFROM  ,'jsonDateTime','string', ],
		MRolePermission::FJ_VALIDUNTIL =>[ MRolePermission::F_VALIDUNTIL ,'jsonDateTime','string', ],
		MRolePermission::FJ_CREATED_AT =>[ MRolePermission::F_CREATED_AT ,'jsonDateTime','string', ],
		MRolePermission::FJ_UPDATED_AT =>[ MRolePermission::F_UPDATED_AT ,'jsonDateTime','string', ],
		MRolePermission::FJ_DELETED_AT =>[ MRolePermission::F_DELETED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_ROLE,
			self::F_PERMISSION,
			self::F_AUTHOR,
			self::F_VALIDFROM,
			self::F_VALIDUNTIL,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_ROLE,
			 self::F_PERMISSION,
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
         * @return DPermissions|BelongsTo
         */
        public function relPermission(){
            return $this->belongsTo(DPermissions::class,self::F_PERMISSION, DPermissions::F_ID);
        }
            

        /**
         * @return DRoles|BelongsTo
         */
        public function relRole(){
            return $this->belongsTo(DRoles::class,self::F_ROLE, DRoles::F_ID);
        }
            



}

