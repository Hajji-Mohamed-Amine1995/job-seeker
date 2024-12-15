<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241122212812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offers (id INT AUTO_INCREMENT NOT NULL, annees_experience INT NOT NULL, connaissances VARCHAR(255) NOT NULL, contrat VARCHAR(255) NOT NULL, experience_requise VARCHAR(255) NOT NULL, formation VARCHAR(255) NOT NULL, langue VARCHAR(255) NOT NULL, nbr_recruter INT NOT NULL, salaire TINYINT(1) NOT NULL, specialite VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, ville_travail VARCHAR(255) NOT NULL, user_ids JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE offers');
    }
}
