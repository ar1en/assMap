<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgShadow
 * Representation for db table pg_shadow.

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
class MPgShadow extends DBClass {


	const  FJ_PASSWD       = 'passwd';
	const  FJ_USEBYPASSRLS = 'usebypassrls';
	const  FJ_USECONFIG    = 'useconfig';
	const  FJ_USECREATEDB  = 'usecreatedb';
	const  FJ_USENAME      = 'usename';
	const  FJ_USEREPL      = 'userepl';
	const  FJ_USESUPER     = 'usesuper';
	const  FJ_USESYSID     = 'usesysid';
	const  FJ_VALUNTIL     = 'valuntil';
	const  FT_PASSWD       = 'pg_shadow.passwd';
	const  FT_USEBYPASSRLS = 'pg_shadow.usebypassrls';
	const  FT_USECONFIG    = 'pg_shadow.useconfig';
	const  FT_USECREATEDB  = 'pg_shadow.usecreatedb';
	const  FT_USENAME      = 'pg_shadow.usename';
	const  FT_USEREPL      = 'pg_shadow.userepl';
	const  FT_USESUPER     = 'pg_shadow.usesuper';
	const  FT_USESYSID     = 'pg_shadow.usesysid';
	const  FT_VALUNTIL     = 'pg_shadow.valuntil';
	const  F_PASSWD        = 'passwd';
	const  F_USEBYPASSRLS  = 'usebypassrls';
	const  F_USECONFIG     = 'useconfig';
	const  F_USECREATEDB   = 'usecreatedb';
	const  F_USENAME       = 'usename';
	const  F_USEREPL       = 'userepl';
	const  F_USESUPER      = 'usesuper';
	const  F_USESYSID      = 'usesysid';
	const  F_VALUNTIL      = 'valuntil';

    protected $table = 'pg_shadow';

	public static array $jsonable = [
		MPgShadow::FJ_USENAME      =>[ MPgShadow::F_USENAME      ,null,'string(name)',        ],
		MPgShadow::FJ_USESYSID     =>[ MPgShadow::F_USESYSID     ,null,'string(oid)',         ],
		MPgShadow::FJ_USECREATEDB  =>[ MPgShadow::F_USECREATEDB  ,null,'boolean',             ],
		MPgShadow::FJ_USESUPER     =>[ MPgShadow::F_USESUPER     ,null,'boolean',             ],
		MPgShadow::FJ_USEREPL      =>[ MPgShadow::F_USEREPL      ,null,'boolean',             ],
		MPgShadow::FJ_USEBYPASSRLS =>[ MPgShadow::F_USEBYPASSRLS ,null,'boolean',             ],
		MPgShadow::FJ_PASSWD       =>[ MPgShadow::F_PASSWD       ,null,'string',              ],
		MPgShadow::FJ_VALUNTIL     =>[ MPgShadow::F_VALUNTIL     ,null,'string(timestamptz)', ],
		MPgShadow::FJ_USECONFIG    =>[ MPgShadow::F_USECONFIG    ,null,'string(_text)',       ],
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

