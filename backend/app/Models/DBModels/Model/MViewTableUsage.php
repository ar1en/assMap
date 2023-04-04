<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MViewTableUsage
 * Representation for db table view_table_usage.

 * @property  string(name) view_catalog  [1] type:name   
 * @property  string(name) view_schema   [2] type:name   
 * @property  string(name) view_name     [3] type:name   
 * @property  string(name) table_catalog [4] type:name   
 * @property  string(name) table_schema  [5] type:name   
 * @property  string(name) table_name    [6] type:name   
 * @package App\Models\DBModels\Model
 */
class MViewTableUsage extends DBClass {


	const  FJ_TABLE_CATALOG = 'tableCatalog';
	const  FJ_TABLE_NAME    = 'tableName';
	const  FJ_TABLE_SCHEMA  = 'tableSchema';
	const  FJ_VIEW_CATALOG  = 'viewCatalog';
	const  FJ_VIEW_NAME     = 'viewName';
	const  FJ_VIEW_SCHEMA   = 'viewSchema';
	const  FT_TABLE_CATALOG = 'view_table_usage.table_catalog';
	const  FT_TABLE_NAME    = 'view_table_usage.table_name';
	const  FT_TABLE_SCHEMA  = 'view_table_usage.table_schema';
	const  FT_VIEW_CATALOG  = 'view_table_usage.view_catalog';
	const  FT_VIEW_NAME     = 'view_table_usage.view_name';
	const  FT_VIEW_SCHEMA   = 'view_table_usage.view_schema';
	const  F_TABLE_CATALOG  = 'table_catalog';
	const  F_TABLE_NAME     = 'table_name';
	const  F_TABLE_SCHEMA   = 'table_schema';
	const  F_VIEW_CATALOG   = 'view_catalog';
	const  F_VIEW_NAME      = 'view_name';
	const  F_VIEW_SCHEMA    = 'view_schema';

    protected $table = 'view_table_usage';

	public static array $jsonable = [
		MViewTableUsage::FJ_VIEW_CATALOG  =>[ MViewTableUsage::F_VIEW_CATALOG  ,null,'string(name)', ],
		MViewTableUsage::FJ_VIEW_SCHEMA   =>[ MViewTableUsage::F_VIEW_SCHEMA   ,null,'string(name)', ],
		MViewTableUsage::FJ_VIEW_NAME     =>[ MViewTableUsage::F_VIEW_NAME     ,null,'string(name)', ],
		MViewTableUsage::FJ_TABLE_CATALOG =>[ MViewTableUsage::F_TABLE_CATALOG ,null,'string(name)', ],
		MViewTableUsage::FJ_TABLE_SCHEMA  =>[ MViewTableUsage::F_TABLE_SCHEMA  ,null,'string(name)', ],
		MViewTableUsage::FJ_TABLE_NAME    =>[ MViewTableUsage::F_TABLE_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_VIEW_CATALOG,
			self::F_VIEW_SCHEMA,
			self::F_VIEW_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
		]; 

		protected $fillable = [
		];





}

