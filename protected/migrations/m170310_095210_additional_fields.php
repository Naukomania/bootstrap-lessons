<?php

class m170310_095210_additional_fields extends CDbMigration
{
	public function up()
	{
		$query = <<<SQL
ALTER TABLE `brand` ADD `title` VARCHAR(255) NULL;
ALTER TABLE `brand` ADD `country` INT NULL;
ALTER TABLE `collection` ADD `price` INT NULL;
ALTER TABLE `collection` ADD `priority` INT NULL DEFAULT 0;
ALTER TABLE `stone` ADD `texture` INT NULL;
ALTER TABLE `stone` ADD `tone` INT NULL;
SQL;
		$this->execute($query);
	}

	public function down()
	{
		$query = <<<SQL
ALTER TABLE `brand` DROP `title`;
ALTER TABLE `brand` DROP `country`;
ALTER TABLE `collection` DROP `price`;
ALTER TABLE `collection` DROP `priority`;
ALTER TABLE `stone` DROP `texture`;
ALTER TABLE `stone` DROP `tone`;
SQL;
		$this->execute($query);
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}