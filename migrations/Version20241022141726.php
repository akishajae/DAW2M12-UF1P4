<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241022141726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nurse (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, first_surname VARCHAR(255) NOT NULL, second_surname VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_surname VARCHAR(255) NOT NULL, second_surname VARCHAR(255) DEFAULT NULL, nurse_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE records (id INT AUTO_INCREMENT NOT NULL, weight_height VARCHAR(255) DEFAULT NULL, diet VARCHAR(255) DEFAULT NULL, breathing INT DEFAULT NULL, blood_pressure INT DEFAULT NULL, pulse INT DEFAULT NULL, temperature INT DEFAULT NULL, intake INT DEFAULT NULL, discharge INT DEFAULT NULL, record_date DATE NOT NULL, record_time VARCHAR(1) DEFAULT NULL, patient_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE nurse');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE records');
    }
}
