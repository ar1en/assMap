<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MViewColumnUsage
 * Representation for db table view_column_usage.

 * @property  string(name) view_catalog  [1] type:name   
 * @property  string(name) view_schema   [2] type:name   
 * @property  string(name) view_name     [3] type:name   
 * @property  string(name) table_catalog [4] type:name   
 * @property  string(name) table_schema  [5] type:name   
 * @property  string(name) table_name    [6] type:name   
 * @property  string(name) column_name   [7] type:name   
 * @package App\Models\DBModels\Model
 */
class MViewColumnUsage extends DBClass {


	const  FJ_COLUMN_NAME   = 'columnName';
	const  FJ_TABLE_CATALOG = 'tableCatalog';
	const  FJ_TABLE_NAME    = 'tableName';
	const  FJ_TABLE_SCHEMA  = 'tableSchema';
	const  FJ_VIEW_CATALOG  = 'viewCatalog';
	const  FJ_VIEW_NAME     = 'viewName';
	const  FJ_VIEW_SCHEMA   = 'viewSchema';
	const  FT_COLUMN_NAME   = 'view_column_usage.column_name';
	const  FT_TABLE_CATALOG = 'view_column_usage.table_catalog';
	const  FT_TABLE_NAME    = 'view_column_usage.table_name';
	const  FT_TABLE_SCHEMA  = 'view_column_usage.table_schema';
	const  FT_VIEW_CATALOG  = 'view_column_usage.view_catalog';
	const  FT_VIEW_NAME     = 'view_column_usage.view_name';
	const  FT_VIEW_SCHEMA   = 'view_column_usage.view_schema';
	const  F_COLUMN_NAME    = 'column_name';
	const  F_TABLE_CATALOG  = 'table_catalog';
	const  F_TABLE_NAME     = 'table_name';
	const  F_TABLE_SCHEMA   = 'table_schema';
	const  F_VIEW_CATALOG   = 'view_catalog';
	const  F_VIEW_NAME      = 'view_name';
	const  F_VIEW_SCHEMA    = 'view_schema';

    protected $table = 'view_column_usage';

	public static array $jsonable = [
		MViewColumnUsage::FJ_VIEW_CATALOG  =>[ MViewColumnUsage::F_VIEW_CATALOG  ,null,'string(name)', ],
		MViewColumnUsage::FJ_VIEW_SCHEMA   =>[ MViewColumnUsage::F_VIEW_SCHEMA   ,null,'string(name)', ],
		MViewColumnUsage::FJ_VIEW_NAME     =>[ MViewColumnUsage::F_VIEW_NAME     ,null,'string(name)', ],
		MViewColumnUsage::FJ_TABLE_CATALOG =>[ MViewColumnUsage::F_TABLE_CATALOG ,null,'string(name)', ],
		MViewColumnUsage::FJ_TABLE_SCHEMA  =>[ MViewColumnUsage::F_TABLE_SCHEMA  ,null,'string(name)', ],
		MViewColumnUsage::FJ_TABLE_NAME    =>[ MViewColumnUsage::F_TABLE_NAME    ,null,'string(name)', ],
		MViewColumnUsage::FJ_COLUMN_NAME   =>[ MViewColumnUsage::F_COLUMN_NAME   ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_VIEW_CATALOG,
			self::F_VIEW_SCHEMA,
			self::F_VIEW_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
		]; 

		protected $fillable = [
		];





}

