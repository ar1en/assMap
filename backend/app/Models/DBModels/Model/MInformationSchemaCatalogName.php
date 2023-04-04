<?php
/** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models\DBModels\Model;


use  App\Models\DBModels\DBClass;

/**
 * Class MInformationSchemaCatalogName
 * Representation for db table information_schema_catalog_name.

 * @property  string(name) catalog_name [1] type:name   
 * @package App\Models\DBModels\Model
 */
class MInformationSchemaCatalogName extends DBClass {


	const  FJ_CATALOG_NAME = 'catalogName';
	const  FT_CATALOG_NAME = 'information_schema_catalog_name.catalog_name';
	const  F_CATALOG_NAME  = 'catalog_name';

    protected $table = 'information_schema_catalog_name';

	public static array $jsonable = [
		MInformationSchemaCatalogName::FJ_CATALOG_NAME =>[ MInformationSchemaCatalogName::F_CATALOG_NAME ,null,'string(name)', ],
	];

		protected $visible = [
			self::F_CATALOG_NAME,
		]; 

		protected $fillable = [
		];





}

