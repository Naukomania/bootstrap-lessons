<?php

class m170325_230600_move_currency_field extends CDbMigration
{
	public function up()
	{
		$query = <<<SQL
ALTER TABLE `collection` DROP `currency`;
ALTER TABLE `brand` ADD `currency` INT NOT NULL DEFAULT 1;
SQL;
		$this->execute($query);
	}

	public function down()
	{
		$query = <<<SQL
ALTER TABLE `collection` ADD `currency` INT NOT NULL DEFAULT 1;
ALTER TABLE `brand` DROP `currency`;
SQL;
		$this->execute($query);
	}
}