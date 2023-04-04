<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MColumnUdtUsage
 * Representation for db table column_udt_usage.

 * @property  string(name) udt_catalog   [1] type:name   
 * @property  string(name) udt_schema    [2] type:name   
 * @property  string(name) udt_name      [3] type:name   
 * @property  string(name) table_catalog [4] type:name   
 * @property  string(name) table_schema  [5] type:name   
 * @property  string(name) table_name    [6] type:name   
 * @property  string(name) column_name   [7] type:name   
 * @package App\Models\DBModels\Model
 */
class MColumnUdtUsage extends DBClass {


	const  FJ_COLUMN_NAME   = 'columnName';
	const  FJ_TABLE_CATALOG = 'tableCatalog';
	const  FJ_TABLE_NAME    = 'tableName';
	const  FJ_TABLE_SCHEMA  = 'tableSchema';
	const  FJ_UDT_CATALOG   = 'udtCatalog';
	const  FJ_UDT_NAME      = 'udtName';
	const  FJ_UDT_SCHEMA    = 'udtSchema';
	const  FT_COLUMN_NAME   = 'column_udt_usage.column_name';
	const  FT_TABLE_CATALOG = 'column_udt_usage.table_catalog';
	const  FT_TABLE_NAME    = 'column_udt_usage.table_name';
	const  FT_TABLE_SCHEMA  = 'column_udt_usage.table_schema';
	const  FT_UDT_CATALOG   = 'column_udt_usage.udt_catalog';
	const  FT_UDT_NAME      = 'column_udt_usage.udt_name';
	const  FT_UDT_SCHEMA    = 'column_udt_usage.udt_schema';
	const  F_COLUMN_NAME    = 'column_name';
	const  F_TABLE_CATALOG  = 'table_catalog';
	const  F_TABLE_NAME     = 'table_name';
	const  F_TABLE_SCHEMA   = 'table_schema';
	const  F_UDT_CATALOG    = 'udt_catalog';
	const  F_UDT_NAME       = 'udt_name';
	const  F_UDT_SCHEMA     = 'udt_schema';

    protected $table = 'column_udt_usage';

	public static array $jsonable = [
		MColumnUdtUsage::FJ_UDT_CATALOG   =>[ MColumnUdtUsage::F_UDT_CATALOG   ,null,'string(name)', ],
		MColumnUdtUsage::FJ_UDT_SCHEMA    =>[ MColumnUdtUsage::F_UDT_SCHEMA    ,null,'string(name)', ],
		MColumnUdtUsage::FJ_UDT_NAME      =>[ MColumnUdtUsage::F_UDT_NAME      ,null,'string(name)', ],
		MColumnUdtUsage::FJ_TABLE_CATALOG =>[ MColumnUdtUsage::F_TABLE_CATALOG ,null,'string(name)', ],
		MColumnUdtUsage::FJ_TABLE_SCHEMA  =>[ MColumnUdtUsage::F_TABLE_SCHEMA  ,null,'string(name)', ],
		MColumnUdtUsage::FJ_TABLE_NAME    =>[ MColumnUdtUsage::F_TABLE_NAME    ,null,'string(name)', ],
		MColumnUdtUsage::FJ_COLUMN_NAME   =>[ MColumnUdtUsage::F_COLUMN_NAME   ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
		]; 

		protected $fillable = [
		];





}

