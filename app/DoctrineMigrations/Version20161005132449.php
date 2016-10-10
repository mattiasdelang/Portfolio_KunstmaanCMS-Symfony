<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161005132449 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kuma_menu (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(25) DEFAULT NULL, locale VARCHAR(5) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kuma_menu_item (id BIGINT AUTO_INCREMENT NOT NULL, parent_id BIGINT DEFAULT NULL, menu_id BIGINT DEFAULT NULL, node_translation_id BIGINT DEFAULT NULL, type VARCHAR(15) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, new_window TINYINT(1) DEFAULT NULL, lft INT NOT NULL, lvl INT NOT NULL, rgt INT NOT NULL, INDEX IDX_EB603AB1727ACA70 (parent_id), INDEX IDX_EB603AB1CCD7E912 (menu_id), INDEX IDX_EB603AB1E0B87CE0 (node_translation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kuma_menu_item ADD CONSTRAINT FK_EB603AB1727ACA70 FOREIGN KEY (parent_id) REFERENCES kuma_menu_item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE kuma_menu_item ADD CONSTRAINT FK_EB603AB1CCD7E912 FOREIGN KEY (menu_id) REFERENCES kuma_menu (id)');
        $this->addSql('ALTER TABLE kuma_menu_item ADD CONSTRAINT FK_EB603AB1E0B87CE0 FOREIGN KEY (node_translation_id) REFERENCES kuma_node_translations (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kuma_menu_item DROP FOREIGN KEY FK_EB603AB1CCD7E912');
        $this->addSql('ALTER TABLE kuma_menu_item DROP FOREIGN KEY FK_EB603AB1727ACA70');
        $this->addSql('DROP TABLE kuma_menu');
        $this->addSql('DROP TABLE kuma_menu_item');
    }
}
