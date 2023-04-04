<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgUser
 * Representation for db table pg_user.

 * @property  string(name)        usename      [1] type:name          
 * @property  string(oid)         usesysid     [2] type:oid           
 * @property  boolean             usecreatedb  [3] type:bool          
 * @property  boolean             usesuper     [4] type:bool          
 * @property  boolean             userepl      [5] type:bool          
 * @property  boolean             usebypassrls [6] type:bool          
 * @property  string              passwd       [7] type:text          
 * @property  string(timestamptz) valuntil     [8] type:timestamptz   
 * @property  string(_text)       useconfig    [9] type:_text         
 * @package App\Models\DBModels\Model
 */
class MPgUser extends DBClass {


	const  FJ_PASSWD       = 'passwd';
	const  FJ_USEBYPASSRLS = 'usebypassrls';
	const  FJ_USECONFIG    = 'useconfig';
	const  FJ_USECREATEDB  = 'usecreatedb';
	const  FJ_USENAME      = 'usename';
	const  FJ_USEREPL      = 'userepl';
	const  FJ_USESUPER     = 'usesuper';
	const  FJ_USESYSID     = 'usesysid';
	const  FJ_VALUNTIL     = 'valuntil';
	const  FT_PASSWD       = 'pg_user.passwd';
	const  FT_USEBYPASSRLS = 'pg_user.usebypassrls';
	const  FT_USECONFIG    = 'pg_user.useconfig';
	const  FT_USECREATEDB  = 'pg_user.usecreatedb';
	const  FT_USENAME      = 'pg_user.usename';
	const  FT_USEREPL      = 'pg_user.userepl';
	const  FT_USESUPER     = 'pg_user.usesuper';
	const  FT_USESYSID     = 'pg_user.usesysid';
	const  FT_VALUNTIL     = 'pg_user.valuntil';
	const  F_PASSWD        = 'passwd';
	const  F_USEBYPASSRLS  = 'usebypassrls';
	const  F_USECONFIG     = 'useconfig';
	const  F_USECREATEDB   = 'usecreatedb';
	const  F_USENAME       = 'usename';
	const  F_USEREPL       = 'userepl';
	const  F_USESUPER      = 'usesuper';
	const  F_USESYSID      = 'usesysid';
	const  F_VALUNTIL      = 'valuntil';

    protected $table = 'pg_user';

	public static array $jsonable = [
		MPgUser::FJ_USENAME      =>[ MPgUser::F_USENAME      ,null,'string(name)',        ],
		MPgUser::FJ_USESYSID     =>[ MPgUser::F_USESYSID     ,null,'string(oid)',         ],
		MPgUser::FJ_USECREATEDB  =>[ MPgUser::F_USECREATEDB  ,null,'boolean',             ],
		MPgUser::FJ_USESUPER     =>[ MPgUser::F_USESUPER     ,null,'boolean',             ],
		MPgUser::FJ_USEREPL      =>[ MPgUser::F_USEREPL      ,null,'boolean',             ],
		MPgUser::FJ_USEBYPASSRLS =>[ MPgUser::F_USEBYPASSRLS ,null,'boolean',             ],
		MPgUser::FJ_PASSWD       =>[ MPgUser::F_PASSWD       ,null,'string',              ],
		MPgUser::FJ_VALUNTIL     =>[ MPgUser::F_VALUNTIL     ,null,'string(timestamptz)', ],
		MPgUser::FJ_USECONFIG    =>[ MPgUser::F_USECONFIG    ,null,'string(_text)',       ],
	];

		protected $visible = [
			self::F_USENAME,
			self::F_USESYSID,
			self::F_USECREATEDB,
			self::F_USESUPER,
			self::F_USEREPL,
			self::F_USEBYPASSRLS,
			self::F_PASSWD,
			self::F_VALUNTIL,
			self::F_USECONFIG,
		]; 

		protected $fillable = [
		];





}

