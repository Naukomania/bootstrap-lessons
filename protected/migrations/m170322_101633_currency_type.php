<?php

class m170322_101633_currency_type extends CDbMigration
{
	public function up()
	{
				$query = <<<SQL
ALTER TABLE `brand` ADD `type` INT NOT NULL DEFAULT 1;
ALTER TABLE `collection` ADD `currency` INT NOT NULL DEFAULT 1;
SQL;
		$this->execute($query);
	}

	public function down()
	{
		$query = <<<SQL
ALTER TABLE `brand` DROP `type`;
ALTER TABLE `collection` DROP `currency`;
SQL;
		$this->execute($query);
	}
}