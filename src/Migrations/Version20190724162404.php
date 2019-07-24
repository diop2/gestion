<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190724162404 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE versement (id INT AUTO_INCREMENT NOT NULL, id_versement_id INT NOT NULL, type VARCHAR(255) NOT NULL, solde INT NOT NULL, INDEX IDX_716E9367F87EF810 (id_versement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_partenaire (id INT AUTO_INCREMENT NOT NULL, id_identifiant_id INT NOT NULL, identifiant VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, nom_complet VARCHAR(255) NOT NULL, numero_identite INT NOT NULL, contact INT NOT NULL, created_at DATETIME NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_D487F6992D702E6B (id_identifiant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_systeme (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, id_partenaire_id INT NOT NULL, identifiant VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, numero_identite INT NOT NULL, contact INT NOT NULL, created_at DATETIME NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_32FFA37326F6C2C9 (id_partenaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE caissier (id INT AUTO_INCREMENT NOT NULL, id_caissier_id INT NOT NULL, idcaissier_id INT NOT NULL, identifiant VARCHAR(255) NOT NULL, non_complet VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, contact INT NOT NULL, numero_identite INT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_1F038BC2AD065ACC (id_caissier_id), INDEX IDX_1F038BC273D5E794 (idcaissier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE versement ADD CONSTRAINT FK_716E9367F87EF810 FOREIGN KEY (id_versement_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE sous_partenaire ADD CONSTRAINT FK_D487F6992D702E6B FOREIGN KEY (id_identifiant_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA37326F6C2C9 FOREIGN KEY (id_partenaire_id) REFERENCES admin_systeme (id)');
        $this->addSql('ALTER TABLE caissier ADD CONSTRAINT FK_1F038BC2AD065ACC FOREIGN KEY (id_caissier_id) REFERENCES admin_systeme (id)');
        $this->addSql('ALTER TABLE caissier ADD CONSTRAINT FK_1F038BC273D5E794 FOREIGN KEY (idcaissier_id) REFERENCES versement (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE caissier DROP FOREIGN KEY FK_1F038BC273D5E794');
        $this->addSql('ALTER TABLE partenaire DROP FOREIGN KEY FK_32FFA37326F6C2C9');
        $this->addSql('ALTER TABLE caissier DROP FOREIGN KEY FK_1F038BC2AD065ACC');
        $this->addSql('ALTER TABLE versement DROP FOREIGN KEY FK_716E9367F87EF810');
        $this->addSql('ALTER TABLE sous_partenaire DROP FOREIGN KEY FK_D487F6992D702E6B');
        $this->addSql('DROP TABLE versement');
        $this->addSql('DROP TABLE sous_partenaire');
        $this->addSql('DROP TABLE admin_systeme');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE caissier');
    }
}
