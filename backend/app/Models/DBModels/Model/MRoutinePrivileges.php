<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MRoutinePrivileges
 * Representation for db table routine_privileges.

 * @property  string(name) grantor          [1]  type:name         
 * @property  string(name) grantee          [2]  type:name         
 * @property  string(name) specific_catalog [3]  type:name         
 * @property  string(name) specific_schema  [4]  type:name         
 * @property  string(name) specific_name    [5]  type:name         
 * @property  string(name) routine_catalog  [6]  type:name         
 * @property  string(name) routine_schema   [7]  type:name         
 * @property  string(name) routine_name     [8]  type:name         
 * @property  string       privilege_type   [9]  type:varchar      
 * @property  string       is_grantable     [10] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MRoutinePrivileges extends DBClass {


	const  FJ_GRANTEE          = 'grantee';
	const  FJ_GRANTOR          = 'grantor';
	const  FJ_IS_GRANTABLE     = 'isGrantable';
	const  FJ_PRIVILEGE_TYPE   = 'privilegeType';
	const  FJ_ROUTINE_CATALOG  = 'routineCatalog';
	const  FJ_ROUTINE_NAME     = 'routineName';
	const  FJ_ROUTINE_SCHEMA   = 'routineSchema';
	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FT_GRANTEE          = 'routine_privileges.grantee';
	const  FT_GRANTOR          = 'routine_privileges.grantor';
	const  FT_IS_GRANTABLE     = 'routine_privileges.is_grantable';
	const  FT_PRIVILEGE_TYPE   = 'routine_privileges.privilege_type';
	const  FT_ROUTINE_CATALOG  = 'routine_privileges.routine_catalog';
	const  FT_ROUTINE_NAME     = 'routine_privileges.routine_name';
	const  FT_ROUTINE_SCHEMA   = 'routine_privileges.routine_schema';
	const  FT_SPECIFIC_CATALOG = 'routine_privileges.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'routine_privileges.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'routine_privileges.specific_schema';
	const  F_GRANTEE           = 'grantee';
	const  F_GRANTOR           = 'grantor';
	const  F_IS_GRANTABLE      = 'is_grantable';
	const  F_PRIVILEGE_TYPE    = 'privilege_type';
	const  F_ROUTINE_CATALOG   = 'routine_catalog';
	const  F_ROUTINE_NAME      = 'routine_name';
	const  F_ROUTINE_SCHEMA    = 'routine_schema';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';

    protected $table = 'routine_privileges';

	public static array $jsonable = [
		MRoutinePrivileges::FJ_GRANTOR          =>[ MRoutinePrivileges::F_GRANTOR          ,null,'string(name)', ],
		MRoutinePrivileges::FJ_GRANTEE          =>[ MRoutinePrivileges::F_GRANTEE          ,null,'string(name)', ],
		MRoutinePrivileges::FJ_SPECIFIC_CATALOG =>[ MRoutinePrivileges::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MRoutinePrivileges::FJ_SPECIFIC_SCHEMA  =>[ MRoutinePrivileges::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MRoutinePrivileges::FJ_SPECIFIC_NAME    =>[ MRoutinePrivileges::F_SPECIFIC_NAME    ,null,'string(name)', ],
		MRoutinePrivileges::FJ_ROUTINE_CATALOG  =>[ MRoutinePrivileges::F_ROUTINE_CATALOG  ,null,'string(name)', ],
		MRoutinePrivileges::FJ_ROUTINE_SCHEMA   =>[ MRoutinePrivileges::F_ROUTINE_SCHEMA   ,null,'string(name)', ],
		MRoutinePrivileges::FJ_ROUTINE_NAME     =>[ MRoutinePrivileges::F_ROUTINE_NAME     ,null,'string(name)', ],
		MRoutinePrivileges::FJ_PRIVILEGE_TYPE   =>[ MRoutinePrivileges::F_PRIVILEGE_TYPE   ,null,'string',       ],
		MRoutinePrivileges::FJ_IS_GRANTABLE     =>[ MRoutinePrivileges::F_IS_GRANTABLE     ,null,'string',       ],
	];

		protected $visible = [
			self::F_GRANTOR,
			self::F_GRANTEE,
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_ROUTINE_CATALOG,
			self::F_ROUTINE_SCHEMA,
			self::F_ROUTINE_NAME,
			self::F_PRIVILEGE_TYPE,
			self::F_IS_GRANTABLE,
		]; 

		protected $fillable = [
		];





}

