<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgRoles
 * Representation for db table pg_roles.

 * @property  string(name)        rolname        [1]  type:name          
 * @property  boolean             rolsuper       [2]  type:bool          
 * @property  boolean             rolinherit     [3]  type:bool          
 * @property  boolean             rolcreaterole  [4]  type:bool          
 * @property  boolean             rolcreatedb    [5]  type:bool          
 * @property  boolean             rolcanlogin    [6]  type:bool          
 * @property  boolean             rolreplication [7]  type:bool          
 * @property  int                 rolconnlimit   [8]  type:int4          
 * @property  string              rolpassword    [9]  type:text          
 * @property  string(timestamptz) rolvaliduntil  [10] type:timestamptz   
 * @property  boolean             rolbypassrls   [11] type:bool          
 * @property  string(_text)       rolconfig      [12] type:_text         
 * @property  string(oid)         oid            [13] type:oid           
 * @package App\Models\DBModels\Model
 */
class MPgRoles extends DBClass {


	const  FJ_OID            = 'oid';
	const  FJ_ROLBYPASSRLS   = 'rolbypassrls';
	const  FJ_ROLCANLOGIN    = 'rolcanlogin';
	const  FJ_ROLCONFIG      = 'rolconfig';
	const  FJ_ROLCONNLIMIT   = 'rolconnlimit';
	const  FJ_ROLCREATEDB    = 'rolcreatedb';
	const  FJ_ROLCREATEROLE  = 'rolcreaterole';
	const  FJ_ROLINHERIT     = 'rolinherit';
	const  FJ_ROLNAME        = 'rolname';
	const  FJ_ROLPASSWORD    = 'rolpassword';
	const  FJ_ROLREPLICATION = 'rolreplication';
	const  FJ_ROLSUPER       = 'rolsuper';
	const  FJ_ROLVALIDUNTIL  = 'rolvaliduntil';
	const  FT_OID            = 'pg_roles.oid';
	const  FT_ROLBYPASSRLS   = 'pg_roles.rolbypassrls';
	const  FT_ROLCANLOGIN    = 'pg_roles.rolcanlogin';
	const  FT_ROLCONFIG      = 'pg_roles.rolconfig';
	const  FT_ROLCONNLIMIT   = 'pg_roles.rolconnlimit';
	const  FT_ROLCREATEDB    = 'pg_roles.rolcreatedb';
	const  FT_ROLCREATEROLE  = 'pg_roles.rolcreaterole';
	const  FT_ROLINHERIT     = 'pg_roles.rolinherit';
	const  FT_ROLNAME        = 'pg_roles.rolname';
	const  FT_ROLPASSWORD    = 'pg_roles.rolpassword';
	const  FT_ROLREPLICATION = 'pg_roles.rolreplication';
	const  FT_ROLSUPER       = 'pg_roles.rolsuper';
	const  FT_ROLVALIDUNTIL  = 'pg_roles.rolvaliduntil';
	const  F_OID             = 'oid';
	const  F_ROLBYPASSRLS    = 'rolbypassrls';
	const  F_ROLCANLOGIN     = 'rolcanlogin';
	const  F_ROLCONFIG       = 'rolconfig';
	const  F_ROLCONNLIMIT    = 'rolconnlimit';
	const  F_ROLCREATEDB     = 'rolcreatedb';
	const  F_ROLCREATEROLE   = 'rolcreaterole';
	const  F_ROLINHERIT      = 'rolinherit';
	const  F_ROLNAME         = 'rolname';
	const  F_ROLPASSWORD     = 'rolpassword';
	const  F_ROLREPLICATION  = 'rolreplication';
	const  F_ROLSUPER        = 'rolsuper';
	const  F_ROLVALIDUNTIL   = 'rolvaliduntil';

    protected $table = 'pg_roles';

	public static array $jsonable = [
		MPgRoles::FJ_ROLNAME        =>[ MPgRoles::F_ROLNAME        ,null,'string(name)',        ],
		MPgRoles::FJ_ROLSUPER       =>[ MPgRoles::F_ROLSUPER       ,null,'boolean',             ],
		MPgRoles::FJ_ROLINHERIT     =>[ MPgRoles::F_ROLINHERIT     ,null,'boolean',             ],
		MPgRoles::FJ_ROLCREATEROLE  =>[ MPgRoles::F_ROLCREATEROLE  ,null,'boolean',             ],
		MPgRoles::FJ_ROLCREATEDB    =>[ MPgRoles::F_ROLCREATEDB    ,null,'boolean',             ],
		MPgRoles::FJ_ROLCANLOGIN    =>[ MPgRoles::F_ROLCANLOGIN    ,null,'boolean',             ],
		MPgRoles::FJ_ROLREPLICATION =>[ MPgRoles::F_ROLREPLICATION ,null,'boolean',             ],
		MPgRoles::FJ_ROLCONNLIMIT   =>[ MPgRoles::F_ROLCONNLIMIT   ,null,'number',              ],
		MPgRoles::FJ_ROLPASSWORD    =>[ MPgRoles::F_ROLPASSWORD    ,null,'string',              ],
		MPgRoles::FJ_ROLVALIDUNTIL  =>[ MPgRoles::F_ROLVALIDUNTIL  ,null,'string(timestamptz)', ],
		MPgRoles::FJ_ROLBYPASSRLS   =>[ MPgRoles::F_ROLBYPASSRLS   ,null,'boolean',             ],
		MPgRoles::FJ_ROLCONFIG      =>[ MPgRoles::F_ROLCONFIG      ,null,'string(_text)',       ],
		MPgRoles::FJ_OID            =>[ MPgRoles::F_OID            ,null,'string(oid)',         ],
	];

		protected $visible = [
			self::F_ROLNAME,
			self::F_ROLSUPER,
			self::F_ROLINHERIT,
			self::F_ROLCREATEROLE,
			self::F_ROLCREATEDB,
			self::F_ROLCANLOGIN,
			self::F_ROLREPLICATION,
			self::F_ROLCONNLIMIT,
			self::F_ROLPASSWORD,
			self::F_ROLVALIDUNTIL,
			self::F_ROLBYPASSRLS,
			self::F_ROLCONFIG,
			self::F_OID,
		]; 

		protected $fillable = [
		];





}

