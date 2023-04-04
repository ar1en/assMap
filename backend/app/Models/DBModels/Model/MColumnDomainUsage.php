<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MColumnDomainUsage
 * Representation for db table column_domain_usage.

 * @property  string(name) domain_catalog [1] type:name   
 * @property  string(name) domain_schema  [2] type:name   
 * @property  string(name) domain_name    [3] type:name   
 * @property  string(name) table_catalog  [4] type:name   
 * @property  string(name) table_schema   [5] type:name   
 * @property  string(name) table_name     [6] type:name   
 * @property  string(name) column_name    [7] type:name   
 * @package App\Models\DBModels\Model
 */
class MColumnDomainUsage extends DBClass {


	const  FJ_COLUMN_NAME    = 'columnName';
	const  FJ_DOMAIN_CATALOG = 'domainCatalog';
	const  FJ_DOMAIN_NAME    = 'domainName';
	const  FJ_DOMAIN_SCHEMA  = 'domainSchema';
	const  FJ_TABLE_CATALOG  = 'tableCatalog';
	const  FJ_TABLE_NAME     = 'tableName';
	const  FJ_TABLE_SCHEMA   = 'tableSchema';
	const  FT_COLUMN_NAME    = 'column_domain_usage.column_name';
	const  FT_DOMAIN_CATALOG = 'column_domain_usage.domain_catalog';
	const  FT_DOMAIN_NAME    = 'column_domain_usage.domain_name';
	const  FT_DOMAIN_SCHEMA  = 'column_domain_usage.domain_schema';
	const  FT_TABLE_CATALOG  = 'column_domain_usage.table_catalog';
	const  FT_TABLE_NAME     = 'column_domain_usage.table_name';
	const  FT_TABLE_SCHEMA   = 'column_domain_usage.table_schema';
	const  F_COLUMN_NAME     = 'column_name';
	const  F_DOMAIN_CATALOG  = 'domain_catalog';
	const  F_DOMAIN_NAME     = 'domain_name';
	const  F_DOMAIN_SCHEMA   = 'domain_schema';
	const  F_TABLE_CATALOG   = 'table_catalog';
	const  F_TABLE_NAME      = 'table_name';
	const  F_TABLE_SCHEMA    = 'table_schema';

    protected $table = 'column_domain_usage';

	public static array $jsonable = [
		MColumnDomainUsage::FJ_DOMAIN_CATALOG =>[ MColumnDomainUsage::F_DOMAIN_CATALOG ,null,'string(name)', ],
		MColumnDomainUsage::FJ_DOMAIN_SCHEMA  =>[ MColumnDomainUsage::F_DOMAIN_SCHEMA  ,null,'string(name)', ],
		MColumnDomainUsage::FJ_DOMAIN_NAME    =>[ MColumnDomainUsage::F_DOMAIN_NAME    ,null,'string(name)', ],
		MColumnDomainUsage::FJ_TABLE_CATALOG  =>[ MColumnDomainUsage::F_TABLE_CATALOG  ,null,'string(name)', ],
		MColumnDomainUsage::FJ_TABLE_SCHEMA   =>[ MColumnDomainUsage::F_TABLE_SCHEMA   ,null,'string(name)', ],
		MColumnDomainUsage::FJ_TABLE_NAME     =>[ MColumnDomainUsage::F_TABLE_NAME     ,null,'string(name)', ],
		MColumnDomainUsage::FJ_COLUMN_NAME    =>[ MColumnDomainUsage::F_COLUMN_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_DOMAIN_CATALOG,
			self::F_DOMAIN_SCHEMA,
			self::F_DOMAIN_NAME,
			self::F_TABLE_CATALOG,
			self::F_TABLE_SCHEMA,
			self::F_TABLE_NAME,
			self::F_COLUMN_NAME,
		]; 

		protected $fillable = [
		];





}

