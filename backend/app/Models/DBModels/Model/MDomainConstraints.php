<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MDomainConstraints
 * Representation for db table domain_constraints.

 * @property  string(name) constraint_catalog [1] type:name         
 * @property  string(name) constraint_schema  [2] type:name         
 * @property  string(name) constraint_name    [3] type:name         
 * @property  string(name) domain_catalog     [4] type:name         
 * @property  string(name) domain_schema      [5] type:name         
 * @property  string(name) domain_name        [6] type:name         
 * @property  string       is_deferrable      [7] type:varchar(3)   
 * @property  string       initially_deferred [8] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MDomainConstraints extends DBClass {


	const  FJ_CONSTRAINT_CATALOG = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME    = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA  = 'constraintSchema';
	const  FJ_DOMAIN_CATALOG     = 'domainCatalog';
	const  FJ_DOMAIN_NAME        = 'domainName';
	const  FJ_DOMAIN_SCHEMA      = 'domainSchema';
	const  FJ_INITIALLY_DEFERRED = 'initiallyDeferred';
	const  FJ_IS_DEFERRABLE      = 'isDeferrable';
	const  FT_CONSTRAINT_CATALOG = 'domain_constraints.constraint_catalog';
	const  FT_CONSTRAINT_NAME    = 'domain_constraints.constraint_name';
	const  FT_CONSTRAINT_SCHEMA  = 'domain_constraints.constraint_schema';
	const  FT_DOMAIN_CATALOG     = 'domain_constraints.domain_catalog';
	const  FT_DOMAIN_NAME        = 'domain_constraints.domain_name';
	const  FT_DOMAIN_SCHEMA      = 'domain_constraints.domain_schema';
	const  FT_INITIALLY_DEFERRED = 'domain_constraints.initially_deferred';
	const  FT_IS_DEFERRABLE      = 'domain_constraints.is_deferrable';
	const  F_CONSTRAINT_CATALOG  = 'constraint_catalog';
	const  F_CONSTRAINT_NAME     = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA   = 'constraint_schema';
	const  F_DOMAIN_CATALOG      = 'domain_catalog';
	const  F_DOMAIN_NAME         = 'domain_name';
	const  F_DOMAIN_SCHEMA       = 'domain_schema';
	const  F_INITIALLY_DEFERRED  = 'initially_deferred';
	const  F_IS_DEFERRABLE       = 'is_deferrable';

    protected $table = 'domain_constraints';

	public static array $jsonable = [
		MDomainConstraints::FJ_CONSTRAINT_CATALOG =>[ MDomainConstraints::F_CONSTRAINT_CATALOG ,null,'string(name)', ],
		MDomainConstraints::FJ_CONSTRAINT_SCHEMA  =>[ MDomainConstraints::F_CONSTRAINT_SCHEMA  ,null,'string(name)', ],
		MDomainConstraints::FJ_CONSTRAINT_NAME    =>[ MDomainConstraints::F_CONSTRAINT_NAME    ,null,'string(name)', ],
		MDomainConstraints::FJ_DOMAIN_CATALOG     =>[ MDomainConstraints::F_DOMAIN_CATALOG     ,null,'string(name)', ],
		MDomainConstraints::FJ_DOMAIN_SCHEMA      =>[ MDomainConstraints::F_DOMAIN_SCHEMA      ,null,'string(name)', ],
		MDomainConstraints::FJ_DOMAIN_NAME        =>[ MDomainConstraints::F_DOMAIN_NAME        ,null,'string(name)', ],
		MDomainConstraints::FJ_IS_DEFERRABLE      =>[ MDomainConstraints::F_IS_DEFERRABLE      ,null,'string',       ],
		MDomainConstraints::FJ_INITIALLY_DEFERRED =>[ MDomainConstraints::F_INITIALLY_DEFERRED ,null,'string',       ],
	];

		protected $visible = [
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
			self::F_DOMAIN_CATALOG,
			self::F_DOMAIN_SCHEMA,
			self::F_DOMAIN_NAME,
			self::F_IS_DEFERRABLE,
			self::F_INITIALLY_DEFERRED,
		]; 

		protected $fillable = [
		];





}

