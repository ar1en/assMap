<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MDomainUdtUsage
 * Representation for db table domain_udt_usage.

 * @property  string(name) udt_catalog    [1] type:name   
 * @property  string(name) udt_schema     [2] type:name   
 * @property  string(name) udt_name       [3] type:name   
 * @property  string(name) domain_catalog [4] type:name   
 * @property  string(name) domain_schema  [5] type:name   
 * @property  string(name) domain_name    [6] type:name   
 * @package App\Models\DBModels\Model
 */
class MDomainUdtUsage extends DBClass {


	const  FJ_DOMAIN_CATALOG = 'domainCatalog';
	const  FJ_DOMAIN_NAME    = 'domainName';
	const  FJ_DOMAIN_SCHEMA  = 'domainSchema';
	const  FJ_UDT_CATALOG    = 'udtCatalog';
	const  FJ_UDT_NAME       = 'udtName';
	const  FJ_UDT_SCHEMA     = 'udtSchema';
	const  FT_DOMAIN_CATALOG = 'domain_udt_usage.domain_catalog';
	const  FT_DOMAIN_NAME    = 'domain_udt_usage.domain_name';
	const  FT_DOMAIN_SCHEMA  = 'domain_udt_usage.domain_schema';
	const  FT_UDT_CATALOG    = 'domain_udt_usage.udt_catalog';
	const  FT_UDT_NAME       = 'domain_udt_usage.udt_name';
	const  FT_UDT_SCHEMA     = 'domain_udt_usage.udt_schema';
	const  F_DOMAIN_CATALOG  = 'domain_catalog';
	const  F_DOMAIN_NAME     = 'domain_name';
	const  F_DOMAIN_SCHEMA   = 'domain_schema';
	const  F_UDT_CATALOG     = 'udt_catalog';
	const  F_UDT_NAME        = 'udt_name';
	const  F_UDT_SCHEMA      = 'udt_schema';

    protected $table = 'domain_udt_usage';

	public static array $jsonable = [
		MDomainUdtUsage::FJ_UDT_CATALOG    =>[ MDomainUdtUsage::F_UDT_CATALOG    ,null,'string(name)', ],
		MDomainUdtUsage::FJ_UDT_SCHEMA     =>[ MDomainUdtUsage::F_UDT_SCHEMA     ,null,'string(name)', ],
		MDomainUdtUsage::FJ_UDT_NAME       =>[ MDomainUdtUsage::F_UDT_NAME       ,null,'string(name)', ],
		MDomainUdtUsage::FJ_DOMAIN_CATALOG =>[ MDomainUdtUsage::F_DOMAIN_CATALOG ,null,'string(name)', ],
		MDomainUdtUsage::FJ_DOMAIN_SCHEMA  =>[ MDomainUdtUsage::F_DOMAIN_SCHEMA  ,null,'string(name)', ],
		MDomainUdtUsage::FJ_DOMAIN_NAME    =>[ MDomainUdtUsage::F_DOMAIN_NAME    ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_DOMAIN_CATALOG,
			self::F_DOMAIN_SCHEMA,
			self::F_DOMAIN_NAME,
		]; 

		protected $fillable = [
		];





}

