<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPersonalAccessTokens
 * Representation for db table personal_access_tokens.

 * @property  string    id             [1]  type:uuid         !NULL PRIMARY 
 * @property  string    tokenable_type [2]  type:varchar(255) !NULL         
 * @property  string    tokenable_id   [3]  type:uuid         !NULL         
 * @property  string    name           [4]  type:varchar(255) !NULL         
 * @property  string    token          [5]  type:varchar(64)  !NULL         UNIQUE
 * @property  string    abilities      [6]  type:text                       
 * @property  \DateTime last_used_at   [7]  type:timestamp                  
 * @property  \DateTime expires_at     [8]  type:timestamp                  
 * @property  \DateTime created_at     [9]  type:timestamp                  
 * @property  \DateTime updated_at     [10] type:timestamp                  
 * @property  \DateTime deleted_at     [11] type:timestamp                  
 * @package App\Models\DBModels\Model
 */
class MPersonalAccessTokens extends DBClass {


	const  FJ_ABILITIES      = 'abilities';
	const  FJ_CREATED_AT     = 'createdAt';
	const  FJ_DELETED_AT     = 'deletedAt';
	const  FJ_EXPIRES_AT     = 'expiresAt';
	const  FJ_ID             = 'id';
	const  FJ_LAST_USED_AT   = 'lastUsedAt';
	const  FJ_NAME           = 'name';
	const  FJ_TOKEN          = 'token';
	const  FJ_TOKENABLE_ID   = 'tokenableId';
	const  FJ_TOKENABLE_TYPE = 'tokenableType';
	const  FJ_UPDATED_AT     = 'updatedAt';
	const  FT_ABILITIES      = 'personal_access_tokens.abilities';
	const  FT_CREATED_AT     = 'personal_access_tokens.created_at';
	const  FT_DELETED_AT     = 'personal_access_tokens.deleted_at';
	const  FT_EXPIRES_AT     = 'personal_access_tokens.expires_at';
	const  FT_ID             = 'personal_access_tokens.id';
	const  FT_LAST_USED_AT   = 'personal_access_tokens.last_used_at';
	const  FT_NAME           = 'personal_access_tokens.name';
	const  FT_TOKEN          = 'personal_access_tokens.token';
	const  FT_TOKENABLE_ID   = 'personal_access_tokens.tokenable_id';
	const  FT_TOKENABLE_TYPE = 'personal_access_tokens.tokenable_type';
	const  FT_UPDATED_AT     = 'personal_access_tokens.updated_at';
	const  F_ABILITIES       = 'abilities';
	const  F_CREATED_AT      = 'created_at';
	const  F_DELETED_AT      = 'deleted_at';
	const  F_EXPIRES_AT      = 'expires_at';
	const  F_ID              = 'id';
	const  F_LAST_USED_AT    = 'last_used_at';
	const  F_NAME            = 'name';
	const  F_TOKEN           = 'token';
	const  F_TOKENABLE_ID    = 'tokenable_id';
	const  F_TOKENABLE_TYPE  = 'tokenable_type';
	const  F_UPDATED_AT      = 'updated_at';

    protected $table = 'personal_access_tokens';

	public static array $jsonable = [
		MPersonalAccessTokens::FJ_ID             =>[ MPersonalAccessTokens::F_ID             ,null,'string',           ],
		MPersonalAccessTokens::FJ_TOKENABLE_TYPE =>[ MPersonalAccessTokens::F_TOKENABLE_TYPE ,null,'string',           ],
		MPersonalAccessTokens::FJ_TOKENABLE_ID   =>[ MPersonalAccessTokens::F_TOKENABLE_ID   ,null,'string',           ],
		MPersonalAccessTokens::FJ_NAME           =>[ MPersonalAccessTokens::F_NAME           ,null,'string',           ],
		MPersonalAccessTokens::FJ_TOKEN          =>[ MPersonalAccessTokens::F_TOKEN          ,null,'string',           ],
		MPersonalAccessTokens::FJ_ABILITIES      =>[ MPersonalAccessTokens::F_ABILITIES      ,null,'string',           ],
		MPersonalAccessTokens::FJ_LAST_USED_AT   =>[ MPersonalAccessTokens::F_LAST_USED_AT   ,'jsonDateTime','string', ],
		MPersonalAccessTokens::FJ_EXPIRES_AT     =>[ MPersonalAccessTokens::F_EXPIRES_AT     ,'jsonDateTime','string', ],
		MPersonalAccessTokens::FJ_CREATED_AT     =>[ MPersonalAccessTokens::F_CREATED_AT     ,'jsonDateTime','string', ],
		MPersonalAccessTokens::FJ_UPDATED_AT     =>[ MPersonalAccessTokens::F_UPDATED_AT     ,'jsonDateTime','string', ],
		MPersonalAccessTokens::FJ_DELETED_AT     =>[ MPersonalAccessTokens::F_DELETED_AT     ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_ID,
			self::F_TOKENABLE_TYPE,
			self::F_TOKENABLE_ID,
			self::F_NAME,
			self::F_TOKEN,
			self::F_ABILITIES,
			self::F_LAST_USED_AT,
			self::F_EXPIRES_AT,
			self::F_CREATED_AT,
			self::F_UPDATED_AT,
			self::F_DELETED_AT,
		]; 

		protected $fillable = [
			 self::F_TOKENABLE_TYPE,
			 self::F_TOKENABLE_ID,
			 self::F_NAME,
			 self::F_TOKEN,
			 self::F_ABILITIES,
			 self::F_LAST_USED_AT,
			 self::F_EXPIRES_AT,
			 self::F_CREATED_AT,
			 self::F_UPDATED_AT,
			 self::F_DELETED_AT,
		];





}

