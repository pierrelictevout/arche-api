<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916094439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal ADD length INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD width INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD weight INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD height INT NOT NULL');
        $this->addSql('ALTER TABLE animal DROP name');
        $this->addSql('ALTER TABLE animal DROP sex');
        $this->addSql('ALTER TABLE animal DROP type');
        $this->addSql('ALTER TABLE animal DROP scream');
        $this->addSql('ALTER TABLE animal DROP paws');
        $this->addSql('ALTER TABLE human ADD length INT NOT NULL');
        $this->addSql('ALTER TABLE human ADD width INT NOT NULL');
        $this->addSql('ALTER TABLE human DROP name');
        $this->addSql('ALTER TABLE human DROP sex');
        $this->addSql('ALTER TABLE human DROP type');
        $this->addSql('ALTER TABLE human DROP scream');
        $this->addSql('ALTER TABLE human DROP paws');
        $this->addSql('ALTER TABLE mammal ADD length INT NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD width INT NOT NULL');
        $this->addSql('ALTER TABLE mammal DROP name');
        $this->addSql('ALTER TABLE mammal DROP sex');
        $this->addSql('ALTER TABLE mammal DROP type');
        $this->addSql('ALTER TABLE mammal DROP scream');
        $this->addSql('ALTER TABLE mammal DROP paws');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE human ADD name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD sex VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD type VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD scream VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD paws SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE human DROP length');
        $this->addSql('ALTER TABLE human DROP width');
        $this->addSql('ALTER TABLE animal ADD name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE animal ADD sex VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE animal ADD type VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE animal ADD scream VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE animal ADD paws SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE animal DROP length');
        $this->addSql('ALTER TABLE animal DROP width');
        $this->addSql('ALTER TABLE animal DROP weight');
        $this->addSql('ALTER TABLE animal DROP height');
        $this->addSql('ALTER TABLE mammal ADD name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD sex VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD type VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD scream VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD paws SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE mammal DROP length');
        $this->addSql('ALTER TABLE mammal DROP width');
    }
}
