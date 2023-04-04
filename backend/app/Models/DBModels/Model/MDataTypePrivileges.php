<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MDataTypePrivileges
 * Representation for db table data_type_privileges.

 * @property  string(name) object_catalog [1] type:name      
 * @property  string(name) object_schema  [2] type:name      
 * @property  string(name) object_name    [3] type:name      
 * @property  string       object_type    [4] type:varchar   
 * @property  string(name) dtd_identifier [5] type:name      
 * @package App\Models\DBModels\Model
 */
class MDataTypePrivileges extends DBClass {


	const  FJ_DTD_IDENTIFIER = 'dtdIdentifier';
	const  FJ_OBJECT_CATALOG = 'objectCatalog';
	const  FJ_OBJECT_NAME    = 'objectName';
	const  FJ_OBJECT_SCHEMA  = 'objectSchema';
	const  FJ_OBJECT_TYPE    = 'objectType';
	const  FT_DTD_IDENTIFIER = 'data_type_privileges.dtd_identifier';
	const  FT_OBJECT_CATALOG = 'data_type_privileges.object_catalog';
	const  FT_OBJECT_NAME    = 'data_type_privileges.object_name';
	const  FT_OBJECT_SCHEMA  = 'data_type_privileges.object_schema';
	const  FT_OBJECT_TYPE    = 'data_type_privileges.object_type';
	const  F_DTD_IDENTIFIER  = 'dtd_identifier';
	const  F_OBJECT_CATALOG  = 'object_catalog';
	const  F_OBJECT_NAME     = 'object_name';
	const  F_OBJECT_SCHEMA   = 'object_schema';
	const  F_OBJECT_TYPE     = 'object_type';

    protected $table = 'data_type_privileges';

	public static array $jsonable = [
		MDataTypePrivileges::FJ_OBJECT_CATALOG =>[ MDataTypePrivileges::F_OBJECT_CATALOG ,null,'string(name)', ],
		MDataTypePrivileges::FJ_OBJECT_SCHEMA  =>[ MDataTypePrivileges::F_OBJECT_SCHEMA  ,null,'string(name)', ],
		MDataTypePrivileges::FJ_OBJECT_NAME    =>[ MDataTypePrivileges::F_OBJECT_NAME    ,null,'string(name)', ],
		MDataTypePrivileges::FJ_OBJECT_TYPE    =>[ MDataTypePrivileges::F_OBJECT_TYPE    ,null,'string',       ],
		MDataTypePrivileges::FJ_DTD_IDENTIFIER =>[ MDataTypePrivileges::F_DTD_IDENTIFIER ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_OBJECT_CATALOG,
			self::F_OBJECT_SCHEMA,
			self::F_OBJECT_NAME,
			self::F_OBJECT_TYPE,
			self::F_DTD_IDENTIFIER,
		]; 

		protected $fillable = [
		];





}

