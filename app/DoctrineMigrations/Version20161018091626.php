<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161018091626 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kuma_node_version_lock (id BIGINT AUTO_INCREMENT NOT NULL, node_translation_id BIGINT DEFAULT NULL, owner VARCHAR(255) NOT NULL, public_version TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_AEA13540E0B87CE0 (node_translation_id), INDEX nt_owner_public_idx (owner, node_translation_id, public_version), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kuma_portfoliobundle_pager_pages (id BIGINT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, page_title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kuma_node_version_lock ADD CONSTRAINT FK_AEA13540E0B87CE0 FOREIGN KEY (node_translation_id) REFERENCES kuma_node_translations (id)');
        $this->addSql('ALTER TABLE kuma_users CHANGE confirmation_token confirmation_token VARCHAR(180) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_39EF0B86C05FB297 ON kuma_users (confirmation_token)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE kuma_node_version_lock');
        $this->addSql('DROP TABLE kuma_portfoliobundle_pager_pages');
        $this->addSql('DROP INDEX UNIQ_39EF0B86C05FB297 ON kuma_users');
        $this->addSql('ALTER TABLE kuma_users CHANGE confirmation_token confirmation_token VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
