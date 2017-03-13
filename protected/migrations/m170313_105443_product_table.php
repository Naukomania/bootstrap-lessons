<?php

class m170313_105443_product_table extends CDbMigration
{
	public function up()
	{
		$query = <<<SQL
		ALTER TABLE `stone` ADD `status` INT NOT NULL DEFAULT 0;

		CREATE TABLE IF NOT EXISTS `product` (
		  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
		  `title` VARCHAR(255) NOT NULL COMMENT '',
		  `image` VARCHAR(255) NOT NULL COMMENT '',
		  `stone_id` INT NOT NULL COMMENT '',
		  PRIMARY KEY (`id`)  COMMENT '',
		  INDEX `fk_product_stone1_idx` (`stone_id` ASC)  COMMENT '',
		  CONSTRAINT `fk_product_stone1`
		    FOREIGN KEY (`stone_id`)
		    REFERENCES `prime`.`stone` (`id`)
		    ON DELETE NO ACTION
		    ON UPDATE NO ACTION)
		ENGINE = InnoDB;
SQL;
		$this->execute($query);
	}

	public function down()
	{
		$query = <<<SQL
		DROP TABLE `stone`;
		ALTER TABLE `stone` DROP `status`;
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