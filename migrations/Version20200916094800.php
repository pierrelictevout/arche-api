<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916094800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal ADD ark_id INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F845FA2D3 FOREIGN KEY (ark_id) REFERENCES ark (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_6AAB231F845FA2D3 ON animal (ark_id)');
        $this->addSql('ALTER TABLE ark DROP animals');
        $this->addSql('ALTER TABLE ark DROP humans');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE ark ADD animals VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE ark ADD humans VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE animal DROP CONSTRAINT FK_6AAB231F845FA2D3');
        $this->addSql('DROP INDEX IDX_6AAB231F845FA2D3');
        $this->addSql('ALTER TABLE animal DROP ark_id');
    }
}
