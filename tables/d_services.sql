CREATE TABLE d_services (
  sv_id int(11) NOT NULL AUTO_INCREMENT,
  sv_name varchar(50) DEFAULT NULL,
  sv_notes varchar(255) DEFAULT NULL,
  sv_created varchar(255) DEFAULT NULL,
  PRIMARY KEY (sv_id)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET latin1
COLLATE latin1_swedish_ci;