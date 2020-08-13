<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813094933 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte ADD clientmoral_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652607F0F55A1 FOREIGN KEY (clientmoral_id) REFERENCES client_moral (id)');
        $this->addSql('CREATE INDEX IDX_CFF652607F0F55A1 ON compte (clientmoral_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652607F0F55A1');
        $this->addSql('DROP INDEX IDX_CFF652607F0F55A1 ON compte');
        $this->addSql('ALTER TABLE compte DROP clientmoral_id');
    }
}
