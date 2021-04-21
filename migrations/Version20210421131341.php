<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210421131341 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2129058FA76ED395');
        $this->addSql('DROP INDEX IDX_2129058FF347EFB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_panier AS SELECT id, quantite FROM im2021_panier');
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('CREATE TABLE im2021_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, PanierId INTEGER NOT NULL, CONSTRAINT FK_2129058F8BF0FAEA FOREIGN KEY (PanierId) REFERENCES im2021_produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_2129058F1E74DE48 FOREIGN KEY (Panierid) REFERENCES im2021_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO im2021_panier (id, quantite) SELECT id, quantite FROM __temp__im2021_panier');
        $this->addSql('DROP TABLE __temp__im2021_panier');
        $this->addSql('CREATE INDEX IDX_2129058F8BF0FAEA ON im2021_panier (PanierId)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2129058F8BF0FAEA');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_panier AS SELECT id, quantite, PanierId FROM im2021_panier');
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('CREATE TABLE im2021_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, produit_id INTEGER NOT NULL, user_id INTEGER NOT NULL)');
        $this->addSql('INSERT INTO im2021_panier (id, quantite, produit_id) SELECT id, quantite, PanierId FROM __temp__im2021_panier');
        $this->addSql('DROP TABLE __temp__im2021_panier');
        $this->addSql('CREATE INDEX IDX_2129058FA76ED395 ON im2021_panier (user_id)');
        $this->addSql('CREATE INDEX IDX_2129058FF347EFB ON im2021_panier (produit_id)');
    }
}
