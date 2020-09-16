<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916092425 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE mammal_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE human_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE bird_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE bird (id INT NOT NULL, paw_shape VARCHAR(255) NOT NULL, feather_type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE human ADD name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD sex VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD type VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD scream VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE human ADD paws SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE human ADD nb_foot SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE human ADD weight INT NOT NULL');
        $this->addSql('ALTER TABLE human ADD height INT NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD sex VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD type VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD scream VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE mammal ADD paws SMALLINT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE bird_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE mammal_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE human_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP TABLE bird');
        $this->addSql('ALTER TABLE mammal DROP name');
        $this->addSql('ALTER TABLE mammal DROP sex');
        $this->addSql('ALTER TABLE mammal DROP type');
        $this->addSql('ALTER TABLE mammal DROP scream');
        $this->addSql('ALTER TABLE mammal DROP paws');
        $this->addSql('ALTER TABLE human DROP name');
        $this->addSql('ALTER TABLE human DROP sex');
        $this->addSql('ALTER TABLE human DROP type');
        $this->addSql('ALTER TABLE human DROP scream');
        $this->addSql('ALTER TABLE human DROP paws');
        $this->addSql('ALTER TABLE human DROP nb_foot');
        $this->addSql('ALTER TABLE human DROP weight');
        $this->addSql('ALTER TABLE human DROP height');
    }
}
