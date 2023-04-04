<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MUsersLaravelNative
 * Representation for db table users_laravel_native.

 * @property  int       id                [1] type:int8         !NULL PRIMARY 
 * @property  string    name              [2] type:varchar(255) !NULL         
 * @property  string    email             [3] type:varchar(255) !NULL         UNIQUE
 * @property  \DateTime email_verified_at [4] type:timestamp                  
 * @property  string    password          [5] type:varchar(255) !NULL         
 * @property  string    remember_token    [6] type:varchar(100)               
 * @property  \DateTime created_at        [7] type:timestamp                  
 * @property  \DateTime updated_at        [8] type:timestamp                  
 * @property  \DateTime deleted_at        [9] type:timestamp                  
 * @package App\Models\DBModels\Model
 */
class MUsersLaravelNative extends DBClass {


	const  FJ_CREATED_AT        = 'createdAt';
	const  FJ_DELETED_AT        = 'deletedAt';
	const  FJ_EMAIL             = 'email';
	const  FJ_EMAIL_VERIFIED_AT = 'emailVerifiedAt';
	const  FJ_ID                = 'id';
	const  FJ_NAME              = 'name';
	const  FJ_PASSWORD          = 'password';
	const  FJ_REMEMBER_TOKEN    = 'rememberToken';
	const  FJ_UPDATED_AT        = 'updatedAt';
	const  FT_CREATED_AT        = 'users_laravel_native.created_at';
	const  FT_DELETED_AT        = 'users_laravel_native.deleted_at';
	const  FT_EMAIL             = 'users_laravel_native.email';
	const  FT_EMAIL_VERIFIED_AT = 'users_laravel_native.email_verified_at';
	const  FT_ID                = 'users_laravel_native.id';
	const  FT_NAME              = 'users_laravel_native.name';
	const  FT_PASSWORD          = 'users_laravel_native.password';
	const  FT_REMEMBER_TOKEN    = 'users_laravel_native.remember_token';
	const  FT_UPDATED_AT        = 'users_laravel_native.updated_at';
	const  F_CREATED_AT         = 'created_at';
	const  F_DELETED_AT         = 'deleted_at';
	const  F_EMAIL              = 'email';
	const  F_EMAIL_VERIFIED_AT  = 'email_verified_at';
	const  F_ID                 = 'id';
	const  F_NAME               = 'name';
	const  F_PASSWORD           = 'password';
	const  F_REMEMBER_TOKEN     = 'remember_token';
	const  F_UPDATED_AT         = 'updated_at';

    protected $table = 'users_laravel_native';

	public static array $jsonable = [
		MUsersLaravelNative::FJ_ID                =>[ MUsersLaravelNative::F_ID                ,null,'number',           ],
		MUsersLaravelNative::FJ_NAME              =>[ MUsersLaravelNative::F_NAME              ,null,'string',           ],
		MUsersLaravelNative::FJ_EMAIL             =>[ MUsersLaravelNative::F_EMAIL             ,null,'string',           ],
		MUsersLaravelNative::FJ_EMAIL_VERIFIED_AT =>[ MUsersLaravelNative::F_EMAIL_VERIFIED_AT ,'jsonDateTime','string', ],
		MUsersLaravelNative::FJ_PASSWORD          =>[ MUsersLaravelNative::F_PASSWORD          ,null,'string',           ],
		MUsersLaravelNative::FJ_REMEMBER_TOKEN    =>[ MUsersLaravelNative::F_REMEMBER_TOKEN    ,null,'string',           ],
		MUsersLaravelNative::FJ_CREATED_AT        =>[ MUsersLaravelNative::F_CREATED_AT        ,'jsonDateTime','string', ],
		MUsersLaravelNative::FJ_UPDATED_AT        =>[ MUsersLaravelNative::F_UPDATED_AT        ,'jsonDateTime','string', ],
		MUsersLaravelNative::FJ_DELETED_AT        =>[ MUsersLaravelNative::F_DELETED_AT        ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_NAME,
			self::F_EMAIL,
			self::F_EMAIL_VERIFIED_AT,
			self::F_PASSWORD,
			self::F_REMEMBER_TOKEN,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_NAME,
			 self::F_EMAIL,
			 self::F_EMAIL_VERIFIED_AT,
			 self::F_PASSWORD,
			 self::F_REMEMBER_TOKEN,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];





}

