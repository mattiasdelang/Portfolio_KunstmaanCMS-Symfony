<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161004122020 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kuma_portfoliobundle_skill_page_parts (id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kuma_portfoliobundle_skill_page_part_skill (skill_page_part_id BIGINT NOT NULL, skill_id BIGINT NOT NULL, INDEX IDX_842AE6FA24EF307B (skill_page_part_id), UNIQUE INDEX UNIQ_842AE6FA5585C142 (skill_id), PRIMARY KEY(skill_page_part_id, skill_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kuma_portfoliobundle_skill_page_part_skill ADD CONSTRAINT FK_842AE6FA24EF307B FOREIGN KEY (skill_page_part_id) REFERENCES kuma_portfoliobundle_skill_page_parts (id)');
        $this->addSql('ALTER TABLE kuma_portfoliobundle_skill_page_part_skill ADD CONSTRAINT FK_842AE6FA5585C142 FOREIGN KEY (skill_id) REFERENCES kuma_portfoliobundle_skill (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kuma_portfoliobundle_skill_page_part_skill DROP FOREIGN KEY FK_842AE6FA24EF307B');
        $this->addSql('DROP TABLE kuma_portfoliobundle_skill_page_parts');
        $this->addSql('DROP TABLE kuma_portfoliobundle_skill_page_part_skill');
    }
}
