<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210421115644 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE im2021_panier');
        $this->addSql('DROP INDEX IDX_71404AEF77D927C');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_produit AS SELECT id, libelle, prix, quantite FROM im2021_produit');
        $this->addSql('DROP TABLE im2021_produit');
        $this->addSql('CREATE TABLE im2021_produit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL COLLATE BINARY, prix DOUBLE PRECISION NOT NULL, quantite INTEGER NOT NULL)');
        $this->addSql('INSERT INTO im2021_produit (id, libelle, prix, quantite) SELECT id, libelle, prix, quantite FROM __temp__im2021_produit');
        $this->addSql('DROP TABLE __temp__im2021_produit');
        $this->addSql('DROP INDEX UNIQ_7431C84F85E0677');
        $this->addSql('DROP INDEX IDX_7431C84F77D927C');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_user AS SELECT pk, nom, prenom, username, roles, password, birthday FROM im2021_user');
        $this->addSql('DROP TABLE im2021_user');
        $this->addSql('CREATE TABLE im2021_user (pk INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(30) DEFAULT \'1\' NOT NULL COLLATE BINARY, prenom VARCHAR(30) DEFAULT \'1\' NOT NULL COLLATE BINARY, username VARCHAR(64) NOT NULL COLLATE BINARY --Set de login doit être unique
        , roles CLOB NOT NULL COLLATE BINARY --(DC2Type:json)
        , password VARCHAR(64) NOT NULL COLLATE BINARY --mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer
        , birthday DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO im2021_user (pk, nom, prenom, username, roles, password, birthday) SELECT pk, nom, prenom, username, roles, password, birthday FROM __temp__im2021_user');
        $this->addSql('DROP TABLE __temp__im2021_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7431C84F85E0677 ON im2021_user (username)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE im2021_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_produit AS SELECT id, libelle, prix, quantite FROM im2021_produit');
        $this->addSql('DROP TABLE im2021_produit');
        $this->addSql('CREATE TABLE im2021_produit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INTEGER NOT NULL, panier_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO im2021_produit (id, libelle, prix, quantite) SELECT id, libelle, prix, quantite FROM __temp__im2021_produit');
        $this->addSql('DROP TABLE __temp__im2021_produit');
        $this->addSql('CREATE INDEX IDX_71404AEF77D927C ON im2021_produit (panier_id)');
        $this->addSql('DROP INDEX UNIQ_7431C84F85E0677');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_user AS SELECT pk, nom, prenom, username, roles, password, birthday FROM im2021_user');
        $this->addSql('DROP TABLE im2021_user');
        $this->addSql('CREATE TABLE im2021_user (pk INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(30) DEFAULT \'1\' NOT NULL, prenom VARCHAR(30) DEFAULT \'1\' NOT NULL, username VARCHAR(64) NOT NULL --Set de login doit être unique
        , roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(64) NOT NULL --mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer
        , birthday DATE DEFAULT NULL, panier_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO im2021_user (pk, nom, prenom, username, roles, password, birthday) SELECT pk, nom, prenom, username, roles, password, birthday FROM __temp__im2021_user');
        $this->addSql('DROP TABLE __temp__im2021_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7431C84F85E0677 ON im2021_user (username)');
        $this->addSql('CREATE INDEX IDX_7431C84F77D927C ON im2021_user (panier_id)');
    }
}
