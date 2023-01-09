<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230111123216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'CREATE TABLE USER + CHANTIER';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<SQL
            -- CREATE TABLE USER
            CREATE TABLE user
            (
                matricule               VARCHAR(10),
                fullname                VARCHAR(255),
                age                     VARCHAR(3),
                societe                 VARCHAR(255),
                email                   VARCHAR(24),
                job_title               VARCHAR(255),
                resource_group_no       VARCHAR(255),
                travel_code             VARCHAR(255),
                numero_latest_chantier  INT,
                journal_pointage_erp    VARCHAR(255)
            )
            
            -- CREATE TABLE CHANTIER
            CREATE TABLE chantier
            (
                numero                INT NOT NULL AUTO_INCREMENT,
                description           VARCHAR(80),
                city                  VARCHAR(80),
                city_cp               INT,
                date_debut            DATE,
                date_fin              DATE,
                status                VARCHAR(255),
                lien_sharepoint       VARCHAR(255),
                lien_files            VARCHAR(255),
                lien_gearth           VARCHAR(255),
                prix_moyen_moe_jour   DECIMAL,
                prix_moyen_moe_nuit   DECIMAL,
                prix_moyen_materiel   DECIMAL,
                journal_pointage_erp  VARCHAR(255),
                PRIMARY KEY (numero)
            );
SQL
        );

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE chantier;');
    }
}
