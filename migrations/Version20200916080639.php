<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916080639 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE ark_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE ark (id INT NOT NULL, length INT NOT NULL, width INT NOT NULL, weight INT NOT NULL, height INT NOT NULL, animals VARCHAR(25) NOT NULL, humans VARCHAR(25) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE ark_id_seq CASCADE');
        $this->addSql('DROP TABLE ark');
    }
}
