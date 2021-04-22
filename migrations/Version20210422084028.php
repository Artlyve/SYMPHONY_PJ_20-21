<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210422084028 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2129058FD5ED5989');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_panier AS SELECT quantite, User_id, Produit_Id FROM im2021_panier');
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('CREATE TABLE im2021_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, User_id INTEGER NOT NULL, Produit_Id INTEGER NOT NULL, CONSTRAINT FK_2129058F68D3EA09 FOREIGN KEY (User_id) REFERENCES im2021_user (pk) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_2129058FD5ED5989 FOREIGN KEY (Produit_Id) REFERENCES im2021_produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO im2021_panier (quantite, User_id, Produit_Id) SELECT quantite, User_id, Produit_Id FROM __temp__im2021_panier');
        $this->addSql('DROP TABLE __temp__im2021_panier');
        $this->addSql('CREATE INDEX IDX_2129058FD5ED5989 ON im2021_panier (Produit_Id)');
        $this->addSql('CREATE INDEX IDX_2129058F68D3EA09 ON im2021_panier (User_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2129058F68D3EA09');
        $this->addSql('DROP INDEX IDX_2129058FD5ED5989');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_panier AS SELECT quantite, User_id, Produit_Id FROM im2021_panier');
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('CREATE TABLE im2021_panier (quantite INTEGER NOT NULL, User_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, Produit_Id INTEGER NOT NULL)');
        $this->addSql('INSERT INTO im2021_panier (quantite, User_id, Produit_Id) SELECT quantite, User_id, Produit_Id FROM __temp__im2021_panier');
        $this->addSql('DROP TABLE __temp__im2021_panier');
        $this->addSql('CREATE INDEX IDX_2129058FD5ED5989 ON im2021_panier (Produit_Id)');
    }
}
