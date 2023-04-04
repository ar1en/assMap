<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MTransforms
 * Representation for db table transforms.

 * @property  string(name) udt_catalog      [1] type:name      
 * @property  string(name) udt_schema       [2] type:name      
 * @property  string(name) udt_name         [3] type:name      
 * @property  string(name) specific_catalog [4] type:name      
 * @property  string(name) specific_schema  [5] type:name      
 * @property  string(name) specific_name    [6] type:name      
 * @property  string(name) group_name       [7] type:name      
 * @property  string       transform_type   [8] type:varchar   
 * @package App\Models\DBModels\Model
 */
class MTransforms extends DBClass {


	const  FJ_GROUP_NAME       = 'groupName';
	const  FJ_SPECIFIC_CATALOG = 'specificCatalog';
	const  FJ_SPECIFIC_NAME    = 'specificName';
	const  FJ_SPECIFIC_SCHEMA  = 'specificSchema';
	const  FJ_TRANSFORM_TYPE   = 'transformType';
	const  FJ_UDT_CATALOG      = 'udtCatalog';
	const  FJ_UDT_NAME         = 'udtName';
	const  FJ_UDT_SCHEMA       = 'udtSchema';
	const  FT_GROUP_NAME       = 'transforms.group_name';
	const  FT_SPECIFIC_CATALOG = 'transforms.specific_catalog';
	const  FT_SPECIFIC_NAME    = 'transforms.specific_name';
	const  FT_SPECIFIC_SCHEMA  = 'transforms.specific_schema';
	const  FT_TRANSFORM_TYPE   = 'transforms.transform_type';
	const  FT_UDT_CATALOG      = 'transforms.udt_catalog';
	const  FT_UDT_NAME         = 'transforms.udt_name';
	const  FT_UDT_SCHEMA       = 'transforms.udt_schema';
	const  F_GROUP_NAME        = 'group_name';
	const  F_SPECIFIC_CATALOG  = 'specific_catalog';
	const  F_SPECIFIC_NAME     = 'specific_name';
	const  F_SPECIFIC_SCHEMA   = 'specific_schema';
	const  F_TRANSFORM_TYPE    = 'transform_type';
	const  F_UDT_CATALOG       = 'udt_catalog';
	const  F_UDT_NAME          = 'udt_name';
	const  F_UDT_SCHEMA        = 'udt_schema';

    protected $table = 'transforms';

	public static array $jsonable = [
		MTransforms::FJ_UDT_CATALOG      =>[ MTransforms::F_UDT_CATALOG      ,null,'string(name)', ],
		MTransforms::FJ_UDT_SCHEMA       =>[ MTransforms::F_UDT_SCHEMA       ,null,'string(name)', ],
		MTransforms::FJ_UDT_NAME         =>[ MTransforms::F_UDT_NAME         ,null,'string(name)', ],
		MTransforms::FJ_SPECIFIC_CATALOG =>[ MTransforms::F_SPECIFIC_CATALOG ,null,'string(name)', ],
		MTransforms::FJ_SPECIFIC_SCHEMA  =>[ MTransforms::F_SPECIFIC_SCHEMA  ,null,'string(name)', ],
		MTransforms::FJ_SPECIFIC_NAME    =>[ MTransforms::F_SPECIFIC_NAME    ,null,'string(name)', ],
		MTransforms::FJ_GROUP_NAME       =>[ MTransforms::F_GROUP_NAME       ,null,'string(name)', ],
		MTransforms::FJ_TRANSFORM_TYPE   =>[ MTransforms::F_TRANSFORM_TYPE   ,null,'string',       ],
	];

		protected $visible = [
			self::F_UDT_CATALOG,
			self::F_UDT_SCHEMA,
			self::F_UDT_NAME,
			self::F_SPECIFIC_CATALOG,
			self::F_SPECIFIC_SCHEMA,
			self::F_SPECIFIC_NAME,
			self::F_GROUP_NAME,
			self::F_TRANSFORM_TYPE,
		]; 

		protected $fillable = [
		];





}

