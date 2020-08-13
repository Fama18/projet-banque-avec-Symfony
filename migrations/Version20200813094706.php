<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813094706 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte ADD clientphysique_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260A0CF2AA1 FOREIGN KEY (clientphysique_id) REFERENCES client_physique (id)');
        $this->addSql('CREATE INDEX IDX_CFF65260A0CF2AA1 ON compte (clientphysique_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260A0CF2AA1');
        $this->addSql('DROP INDEX IDX_CFF65260A0CF2AA1 ON compte');
        $this->addSql('ALTER TABLE compte DROP clientphysique_id');
    }
}
