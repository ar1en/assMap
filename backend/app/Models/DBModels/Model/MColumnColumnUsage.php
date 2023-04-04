<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MColumnColumnUsage
 * Representation for db table column_column_usage.

 * @property  string(name) table_catalog    [1] type:name   
 * @property  string(name) table_schema     [2] type:name   
 * @property  string(name) table_name       [3] type:name   
 * @property  string(name) column_name      [4] type:name   
 * @property  string(name) dependent_column [5] type:name   
 * @package App\Models\DBModels\Model
 */
class MColumnColumnUsage extends DBClass {


	const  FJ_COLUMN_NAME      = 'columnName';
	const  FJ_DEPENDENT_COLUMN = 'dependentColumn';
	const  FJ_TABLE_CATALOG    = 'tableCatalog';
	const  FJ_TABLE_NAME       = 'tableName';
	const  FJ_TABLE_SCHEMA     = 'tableSchema';
	const  FT_COLUMN_NAME      = 'column_column_usage.column_name';
	const  FT_DEPENDENT_COLUMN = 'column_column_usage.dependent_column';
	const  FT_TABLE_CATALOG    = 'column_column_usage.table_catalog';
	const  FT_TABLE_NAME       = 'column_column_usage.table_name';
	const  FT_TABLE_SCHEMA     = 'column_column_usage.table_schema';
	const  F_COLUMN_NAME       = 'column_name';
	const  F_DEPENDENT_COLUMN  = 'dependent_column';
	const  F_TABLE_CATALOG     = 'table_catalog';
	const  F_TABLE_NAME        = 'table_name';
	const  F_TABLE_SCHEMA      = 'table_schema';

    protected $table = 'column_column_usage';

	public static array $jsonable = [
		MColumnColumnUsage::FJ_TABLE_CATALOG    =>[ MColumnColumnUsage::F_TABLE_CATALOG    ,null,'string(name)', ],
		MColumnColumnUsage::FJ_TABLE_SCHEMA     =>[ MColumnColumnUsage::F_TABLE_SCHEMA     ,null,'string(name)', ],
		MColumnColumnUsage::FJ_TABLE_NAME       =>[ MColumnColumnUsage::F_TABLE_NAME       ,null,'string(name)', ],
		MColumnColumnUsage::FJ_COLUMN_NAME      =>[ MColumnColumnUsage::F_COLUMN_NAME      ,null,'string(name)', ],
		MColumnColumnUsage::FJ_DEPENDENT_COLUMN =>[ MColumnColumnUsage::F_DEPENDENT_COLUMN ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
			self::F_DEPENDENT_COLUMN,
		]; 

		protected $fillable = [
		];





}

