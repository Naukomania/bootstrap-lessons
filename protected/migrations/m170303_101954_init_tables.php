<?php

class m170303_101954_init_tables extends CDbMigration
{
	public function up()
	{
		$query = <<<SQL
		CREATE TABLE IF NOT EXISTS `meta` (
		  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
		  `title` VARCHAR(255) NULL COMMENT '',
		  `keywords` VARCHAR(255) NULL COMMENT '',
		  `description` VARCHAR(255) NULL COMMENT '',
		  PRIMARY KEY (`id`)  COMMENT '')
		ENGINE = InnoDB;
		
		CREATE TABLE IF NOT EXISTS `brand` (
		  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
		  `name` VARCHAR(255) NOT NULL COMMENT '',
		  `image` VARCHAR(255) NULL COMMENT '',
		  `description` TEXT NULL COMMENT '',
		  `descriptionCollEx` TEXT NULL COMMENT '',
		  `meta_id` INT NULL COMMENT '',
		  PRIMARY KEY (`id`)  COMMENT '',
		  INDEX `fk_brand_meta1_idx` (`meta_id` ASC)  COMMENT '',
		  CONSTRAINT `fk_brand_meta1`
		    FOREIGN KEY (`meta_id`)
		    REFERENCES `meta` (`id`)
		    ON DELETE NO ACTION
		    ON UPDATE NO ACTION)
		ENGINE = InnoDB;

		CREATE TABLE IF NOT EXISTS `collection` (
		  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
		  `name` VARCHAR(255) NOT NULL COMMENT '',
		  `description` TEXT NULL COMMENT '',
		  `brand_id` INT NOT NULL COMMENT '',
		  PRIMARY KEY (`id`)  COMMENT '',
		  INDEX `fk_collection_brand_idx` (`brand_id` ASC)  COMMENT '',
		  CONSTRAINT `fk_collection_brand`
		    FOREIGN KEY (`brand_id`)
		    REFERENCES `brand` (`id`)
		    ON DELETE NO ACTION
		    ON UPDATE NO ACTION)
		ENGINE = InnoDB;

		CREATE TABLE IF NOT EXISTS `stone` (
		  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
		  `name` VARCHAR(255) NOT NULL COMMENT '',
		  `image` VARCHAR(255) NOT NULL COMMENT '',
		  `collection_id` INT NOT NULL COMMENT '',
		  `meta_id` INT NULL COMMENT '',
		  `description` TEXT NOT NULL COMMENT '',
		  PRIMARY KEY (`id`)  COMMENT '',
		  INDEX `fk_stone_collection1_idx` (`collection_id` ASC)  COMMENT '',
		  INDEX `fk_stone_meta1_idx` (`meta_id` ASC)  COMMENT '',
		  CONSTRAINT `fk_stone_collection1`
		    FOREIGN KEY (`collection_id`)
		    REFERENCES `collection` (`id`)
		    ON DELETE NO ACTION
		    ON UPDATE NO ACTION,
		  CONSTRAINT `fk_stone_meta1`
		    FOREIGN KEY (`meta_id`)
		    REFERENCES `meta` (`id`)
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
		DROP TABLE `collection`
		DROP TABLE `brand`
		DROP TABLE `meta`
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