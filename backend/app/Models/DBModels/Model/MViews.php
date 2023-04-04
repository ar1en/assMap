<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MViews
 * Representation for db table views.

 * @property  string(name) table_catalog              [1]  type:name         
 * @property  string(name) table_schema               [2]  type:name         
 * @property  string(name) table_name                 [3]  type:name         
 * @property  string       view_definition            [4]  type:varchar      
 * @property  string       check_option               [5]  type:varchar      
 * @property  string       is_updatable               [6]  type:varchar(3)   
 * @property  string       is_insertable_into         [7]  type:varchar(3)   
 * @property  string       is_trigger_updatable       [8]  type:varchar(3)   
 * @property  string       is_trigger_deletable       [9]  type:varchar(3)   
 * @property  string       is_trigger_insertable_into [10] type:varchar(3)   
 * @package App\Models\DBModels\Model
 */
class MViews extends DBClass {


	const  FJ_CHECK_OPTION               = 'checkOption';
	const  FJ_IS_INSERTABLE_INTO         = 'isInsertableInto';
	const  FJ_IS_TRIGGER_DELETABLE       = 'isTriggerDeletable';
	const  FJ_IS_TRIGGER_INSERTABLE_INTO = 'isTriggerInsertableInto';
	const  FJ_IS_TRIGGER_UPDATABLE       = 'isTriggerUpdatable';
	const  FJ_IS_UPDATABLE               = 'isUpdatable';
	const  FJ_TABLE_CATALOG              = 'tableCatalog';
	const  FJ_TABLE_NAME                 = 'tableName';
	const  FJ_TABLE_SCHEMA               = 'tableSchema';
	const  FJ_VIEW_DEFINITION            = 'viewDefinition';
	const  FT_CHECK_OPTION               = 'views.check_option';
	const  FT_IS_INSERTABLE_INTO         = 'views.is_insertable_into';
	const  FT_IS_TRIGGER_DELETABLE       = 'views.is_trigger_deletable';
	const  FT_IS_TRIGGER_INSERTABLE_INTO = 'views.is_trigger_insertable_into';
	const  FT_IS_TRIGGER_UPDATABLE       = 'views.is_trigger_updatable';
	const  FT_IS_UPDATABLE               = 'views.is_updatable';
	const  FT_TABLE_CATALOG              = 'views.table_catalog';
	const  FT_TABLE_NAME                 = 'views.table_name';
	const  FT_TABLE_SCHEMA               = 'views.table_schema';
	const  FT_VIEW_DEFINITION            = 'views.view_definition';
	const  F_CHECK_OPTION                = 'check_option';
	const  F_IS_INSERTABLE_INTO          = 'is_insertable_into';
	const  F_IS_TRIGGER_DELETABLE        = 'is_trigger_deletable';
	const  F_IS_TRIGGER_INSERTABLE_INTO  = 'is_trigger_insertable_into';
	const  F_IS_TRIGGER_UPDATABLE        = 'is_trigger_updatable';
	const  F_IS_UPDATABLE                = 'is_updatable';
	const  F_TABLE_CATALOG               = 'table_catalog';
	const  F_TABLE_NAME                  = 'table_name';
	const  F_TABLE_SCHEMA                = 'table_schema';
	const  F_VIEW_DEFINITION             = 'view_definition';

    protected $table = 'views';

	public static array $jsonable = [
		MViews::FJ_TABLE_CATALOG              =>[ MViews::F_TABLE_CATALOG              ,null,'string(name)', ],
		MViews::FJ_TABLE_SCHEMA               =>[ MViews::F_TABLE_SCHEMA               ,null,'string(name)', ],
		MViews::FJ_TABLE_NAME                 =>[ MViews::F_TABLE_NAME                 ,null,'string(name)', ],
		MViews::FJ_VIEW_DEFINITION            =>[ MViews::F_VIEW_DEFINITION            ,null,'string',       ],
		MViews::FJ_CHECK_OPTION               =>[ MViews::F_CHECK_OPTION               ,null,'string',       ],
		MViews::FJ_IS_UPDATABLE               =>[ MViews::F_IS_UPDATABLE               ,null,'string',       ],
		MViews::FJ_IS_INSERTABLE_INTO         =>[ MViews::F_IS_INSERTABLE_INTO         ,null,'string',       ],
		MViews::FJ_IS_TRIGGER_UPDATABLE       =>[ MViews::F_IS_TRIGGER_UPDATABLE       ,null,'string',       ],
		MViews::FJ_IS_TRIGGER_DELETABLE       =>[ MViews::F_IS_TRIGGER_DELETABLE       ,null,'string',       ],
		MViews::FJ_IS_TRIGGER_INSERTABLE_INTO =>[ MViews::F_IS_TRIGGER_INSERTABLE_INTO ,null,'string',       ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_VIEW_DEFINITION,
			self::F_CHECK_OPTION,
			self::F_IS_UPDATABLE,
			self::F_IS_INSERTABLE_INTO,
			self::F_IS_TRIGGER_UPDATABLE,
			self::F_IS_TRIGGER_DELETABLE,
			self::F_IS_TRIGGER_INSERTABLE_INTO,
		]; 

		protected $fillable = [
		];





}

