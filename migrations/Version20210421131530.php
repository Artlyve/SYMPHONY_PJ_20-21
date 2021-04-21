<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210421131530 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2129058F8BF0FAEA');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_panier AS SELECT id, quantite, PanierId FROM im2021_panier');
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('CREATE TABLE im2021_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, Produitr_Id INTEGER NOT NULL, User_id INTEGER NOT NULL, CONSTRAINT FK_2129058F66B56EDF FOREIGN KEY (Produitr_Id) REFERENCES im2021_produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_2129058F68D3EA09 FOREIGN KEY (User_id) REFERENCES im2021_user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO im2021_panier (id, quantite, Produitr_Id) SELECT id, quantite, PanierId FROM __temp__im2021_panier');
        $this->addSql('DROP TABLE __temp__im2021_panier');
        $this->addSql('CREATE INDEX IDX_2129058F66B56EDF ON im2021_panier (Produitr_Id)');
        $this->addSql('CREATE INDEX IDX_2129058F68D3EA09 ON im2021_panier (User_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2129058F66B56EDF');
        $this->addSql('DROP INDEX IDX_2129058F68D3EA09');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_panier AS SELECT id, quantite FROM im2021_panier');
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('CREATE TABLE im2021_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, PanierId INTEGER NOT NULL)');
        $this->addSql('INSERT INTO im2021_panier (id, quantite) SELECT id, quantite FROM __temp__im2021_panier');
        $this->addSql('DROP TABLE __temp__im2021_panier');
        $this->addSql('CREATE INDEX IDX_2129058F8BF0FAEA ON im2021_panier (PanierId)');
    }
}
