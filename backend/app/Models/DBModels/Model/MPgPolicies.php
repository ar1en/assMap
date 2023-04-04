<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MPgPolicies
 * Representation for db table pg_policies.

 * @property  string(name)  schemaname [1] type:name    
 * @property  string(name)  tablename  [2] type:name    
 * @property  string(name)  policyname [3] type:name    
 * @property  string        permissive [4] type:text    
 * @property  string(_name) roles      [5] type:_name   
 * @property  string        cmd        [6] type:text    
 * @property  string        qual       [7] type:text    
 * @property  string        with_check [8] type:text    
 * @package App\Models\DBModels\Model
 */
class MPgPolicies extends DBClass {


	const  FJ_CMD        = 'cmd';
	const  FJ_PERMISSIVE = 'permissive';
	const  FJ_POLICYNAME = 'policyname';
	const  FJ_QUAL       = 'qual';
	const  FJ_ROLES      = 'roles';
	const  FJ_SCHEMANAME = 'schemaname';
	const  FJ_TABLENAME  = 'tablename';
	const  FJ_WITH_CHECK = 'withCheck';
	const  FT_CMD        = 'pg_policies.cmd';
	const  FT_PERMISSIVE = 'pg_policies.permissive';
	const  FT_POLICYNAME = 'pg_policies.policyname';
	const  FT_QUAL       = 'pg_policies.qual';
	const  FT_ROLES      = 'pg_policies.roles';
	const  FT_SCHEMANAME = 'pg_policies.schemaname';
	const  FT_TABLENAME  = 'pg_policies.tablename';
	const  FT_WITH_CHECK = 'pg_policies.with_check';
	const  F_CMD         = 'cmd';
	const  F_PERMISSIVE  = 'permissive';
	const  F_POLICYNAME  = 'policyname';
	const  F_QUAL        = 'qual';
	const  F_ROLES       = 'roles';
	const  F_SCHEMANAME  = 'schemaname';
	const  F_TABLENAME   = 'tablename';
	const  F_WITH_CHECK  = 'with_check';

    protected $table = 'pg_policies';

	public static array $jsonable = [
		MPgPolicies::FJ_SCHEMANAME =>[ MPgPolicies::F_SCHEMANAME ,null,'string(name)',  ],
		MPgPolicies::FJ_TABLENAME  =>[ MPgPolicies::F_TABLENAME  ,null,'string(name)',  ],
		MPgPolicies::FJ_POLICYNAME =>[ MPgPolicies::F_POLICYNAME ,null,'string(name)',  ],
		MPgPolicies::FJ_PERMISSIVE =>[ MPgPolicies::F_PERMISSIVE ,null,'string',        ],
		MPgPolicies::FJ_ROLES      =>[ MPgPolicies::F_ROLES      ,null,'string(_name)', ],
		MPgPolicies::FJ_CMD        =>[ MPgPolicies::F_CMD        ,null,'string',        ],
		MPgPolicies::FJ_QUAL       =>[ MPgPolicies::F_QUAL       ,null,'string',        ],
		MPgPolicies::FJ_WITH_CHECK =>[ MPgPolicies::F_WITH_CHECK ,null,'string',        ],
	];

		protected $visible = [
			self::F_SCHEMANAME,
			self::F_TABLENAME,
			self::F_POLICYNAME,
			self::F_PERMISSIVE,
			self::F_ROLES,
			self::F_CMD,
			self::F_QUAL,
			self::F_WITH_CHECK,
		]; 

		protected $fillable = [
		];





}

