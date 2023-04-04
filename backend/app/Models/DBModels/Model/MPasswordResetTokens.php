<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPasswordResetTokens
 * Representation for db table password_reset_tokens.

 * @property  string    email      [1] type:varchar(255) !NULL PRIMARY 
 * @property  string    token      [2] type:varchar(255) !NULL         
 * @property  \DateTime created_at [3] type:timestamp                  
 * @package App\Models\DBModels\Model
 */
class MPasswordResetTokens extends DBClass {


	const  FJ_CREATED_AT = 'createdAt';
	const  FJ_EMAIL      = 'email';
	const  FJ_TOKEN      = 'token';
	const  FT_CREATED_AT = 'password_reset_tokens.created_at';
	const  FT_EMAIL      = 'password_reset_tokens.email';
	const  FT_TOKEN      = 'password_reset_tokens.token';
	const  F_CREATED_AT  = 'created_at';
	const  F_EMAIL       = 'email';
	const  F_TOKEN       = 'token';

    protected $table = 'password_reset_tokens';

	public static array $jsonable = [
		MPasswordResetTokens::FJ_EMAIL      =>[ MPasswordResetTokens::F_EMAIL      ,null,'string',           ],
		MPasswordResetTokens::FJ_TOKEN      =>[ MPasswordResetTokens::F_TOKEN      ,null,'string',           ],
		MPasswordResetTokens::FJ_CREATED_AT =>[ MPasswordResetTokens::F_CREATED_AT ,'jsonDateTime','string', ],
	];

		protected $visible = [
			self::F_EMAIL,
			self::F_TOKEN,
			self::F_CREATED_AT,
		]; 

		protected $fillable = [
			 self::F_TOKEN,
			 self::F_CREATED_AT,
		];





}

