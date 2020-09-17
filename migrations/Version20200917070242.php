<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200917070242 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE bird_id_seq CASCADE');
        $this->addSql('DROP TABLE human');
        $this->addSql('DROP TABLE bird');
        $this->addSql('DROP TABLE mammal');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE bird_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE human (id INT NOT NULL, surname VARCHAR(255) NOT NULL, haircolor VARCHAR(255) NOT NULL, nb_foot SMALLINT NOT NULL, weight INT NOT NULL, height INT NOT NULL, length INT NOT NULL, width INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE bird (id INT NOT NULL, paw_shape VARCHAR(255) NOT NULL, feather_type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE mammal (id INT NOT NULL, nb_foot SMALLINT NOT NULL, weight INT NOT NULL, height INT NOT NULL, length INT NOT NULL, width INT NOT NULL, PRIMARY KEY(id))');
    }
}
