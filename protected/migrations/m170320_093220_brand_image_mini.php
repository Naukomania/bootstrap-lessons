<?php

class m170320_093220_brand_image_mini extends CDbMigration
{
	public function up()
	{
		$query = <<<SQL
ALTER TABLE `brand` ADD `image_mini` VARCHAR(255) NULL;
ALTER TABLE `collection` ADD `stone_logo` VARCHAR(255) NULL;
SQL;
		$this->execute($query);
	}

	public function down()
	{
		$query = <<<SQL
ALTER TABLE `brand` DROP `image_mini`;
ALTER TABLE `collection` DROP `stone_logo`;
SQL;
		$this->execute($query);
	}
}