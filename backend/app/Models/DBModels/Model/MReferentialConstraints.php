<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MReferentialConstraints
 * Representation for db table referential_constraints.

 * @property  string(name) constraint_catalog        [1] type:name      
 * @property  string(name) constraint_schema         [2] type:name      
 * @property  string(name) constraint_name           [3] type:name      
 * @property  string(name) unique_constraint_catalog [4] type:name      
 * @property  string(name) unique_constraint_schema  [5] type:name      
 * @property  string(name) unique_constraint_name    [6] type:name      
 * @property  string       match_option              [7] type:varchar   
 * @property  string       update_rule               [8] type:varchar   
 * @property  string       delete_rule               [9] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MReferentialConstraints extends DBClass {


	const  FJ_CONSTRAINT_CATALOG        = 'constraintCatalog';
	const  FJ_CONSTRAINT_NAME           = 'constraintName';
	const  FJ_CONSTRAINT_SCHEMA         = 'constraintSchema';
	const  FJ_DELETE_RULE               = 'deleteRule';
	const  FJ_MATCH_OPTION              = 'matchOption';
	const  FJ_UNIQUE_CONSTRAINT_CATALOG = 'uniqueConstraintCatalog';
	const  FJ_UNIQUE_CONSTRAINT_NAME    = 'uniqueConstraintName';
	const  FJ_UNIQUE_CONSTRAINT_SCHEMA  = 'uniqueConstraintSchema';
	const  FJ_UPDATE_RULE               = 'updateRule';
	const  FT_CONSTRAINT_CATALOG        = 'referential_constraints.constraint_catalog';
	const  FT_CONSTRAINT_NAME           = 'referential_constraints.constraint_name';
	const  FT_CONSTRAINT_SCHEMA         = 'referential_constraints.constraint_schema';
	const  FT_DELETE_RULE               = 'referential_constraints.delete_rule';
	const  FT_MATCH_OPTION              = 'referential_constraints.match_option';
	const  FT_UNIQUE_CONSTRAINT_CATALOG = 'referential_constraints.unique_constraint_catalog';
	const  FT_UNIQUE_CONSTRAINT_NAME    = 'referential_constraints.unique_constraint_name';
	const  FT_UNIQUE_CONSTRAINT_SCHEMA  = 'referential_constraints.unique_constraint_schema';
	const  FT_UPDATE_RULE               = 'referential_constraints.update_rule';
	const  F_CONSTRAINT_CATALOG         = 'constraint_catalog';
	const  F_CONSTRAINT_NAME            = 'constraint_name';
	const  F_CONSTRAINT_SCHEMA          = 'constraint_schema';
	const  F_DELETE_RULE                = 'delete_rule';
	const  F_MATCH_OPTION               = 'match_option';
	const  F_UNIQUE_CONSTRAINT_CATALOG  = 'unique_constraint_catalog';
	const  F_UNIQUE_CONSTRAINT_NAME     = 'unique_constraint_name';
	const  F_UNIQUE_CONSTRAINT_SCHEMA   = 'unique_constraint_schema';
	const  F_UPDATE_RULE                = 'update_rule';

    protected $table = 'referential_constraints';

	public static array $jsonable = [
		MReferentialConstraints::FJ_CONSTRAINT_CATALOG        =>[ MReferentialConstraints::F_CONSTRAINT_CATALOG        ,null,'string(name)', ],
		MReferentialConstraints::FJ_CONSTRAINT_SCHEMA         =>[ MReferentialConstraints::F_CONSTRAINT_SCHEMA         ,null,'string(name)', ],
		MReferentialConstraints::FJ_CONSTRAINT_NAME           =>[ MReferentialConstraints::F_CONSTRAINT_NAME           ,null,'string(name)', ],
		MReferentialConstraints::FJ_UNIQUE_CONSTRAINT_CATALOG =>[ MReferentialConstraints::F_UNIQUE_CONSTRAINT_CATALOG ,null,'string(name)', ],
		MReferentialConstraints::FJ_UNIQUE_CONSTRAINT_SCHEMA  =>[ MReferentialConstraints::F_UNIQUE_CONSTRAINT_SCHEMA  ,null,'string(name)', ],
		MReferentialConstraints::FJ_UNIQUE_CONSTRAINT_NAME    =>[ MReferentialConstraints::F_UNIQUE_CONSTRAINT_NAME    ,null,'string(name)', ],
		MReferentialConstraints::FJ_MATCH_OPTION              =>[ MReferentialConstraints::F_MATCH_OPTION              ,null,'string',       ],
		MReferentialConstraints::FJ_UPDATE_RULE               =>[ MReferentialConstraints::F_UPDATE_RULE               ,null,'string',       ],
		MReferentialConstraints::FJ_DELETE_RULE               =>[ MReferentialConstraints::F_DELETE_RULE               ,null,'string',       ],
	];

		protected $visible = [
			self::F_CONSTRAINT_CATALOG,
			self::F_CONSTRAINT_SCHEMA,
			self::F_CONSTRAINT_NAME,
			self::F_UNIQUE_CONSTRAINT_CATALOG,
			self::F_UNIQUE_CONSTRAINT_SCHEMA,
			self::F_UNIQUE_CONSTRAINT_NAME,
			self::F_MATCH_OPTION,
			self::F_UPDATE_RULE,
			self::F_DELETE_RULE,
		]; 

		protected $fillable = [
		];





}

