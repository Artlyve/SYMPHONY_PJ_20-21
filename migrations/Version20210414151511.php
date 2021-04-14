<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414151511 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_7431C84F85E0677');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_user AS SELECT id, nom, prenom, username, roles, password, birthday FROM im2021_user');
        $this->addSql('DROP TABLE im2021_user');
        $this->addSql('CREATE TABLE im2021_user (pk INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(30) DEFAULT \'1\' NOT NULL COLLATE BINARY, prenom VARCHAR(30) DEFAULT \'1\' NOT NULL COLLATE BINARY, username VARCHAR(64) NOT NULL COLLATE BINARY --Set de login doit être unique
        , roles CLOB NOT NULL COLLATE BINARY --(DC2Type:json)
        , password VARCHAR(64) NOT NULL COLLATE BINARY --mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer
        , birthday DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO im2021_user (pk, nom, prenom, username, roles, password, birthday) SELECT id, nom, prenom, username, roles, password, birthday FROM __temp__im2021_user');
        $this->addSql('DROP TABLE __temp__im2021_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7431C84F85E0677 ON im2021_user (username)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_7431C84F85E0677');
        $this->addSql('CREATE TEMPORARY TABLE __temp__im2021_user AS SELECT pk, nom, prenom, username, roles, password, birthday FROM im2021_user');
        $this->addSql('DROP TABLE im2021_user');
        $this->addSql('CREATE TABLE im2021_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(30) DEFAULT \'1\' NOT NULL, prenom VARCHAR(30) DEFAULT \'1\' NOT NULL, username VARCHAR(64) NOT NULL --Set de login doit être unique
        , roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(64) NOT NULL --mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer
        , birthday DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO im2021_user (id, nom, prenom, username, roles, password, birthday) SELECT pk, nom, prenom, username, roles, password, birthday FROM __temp__im2021_user');
        $this->addSql('DROP TABLE __temp__im2021_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7431C84F85E0677 ON im2021_user (username)');
    }
}
