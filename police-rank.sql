CREATE DATABASE IF NOT EXISTS police_data;
USE police_data;

CREATE TABLE IF NOT EXISTS police_ranks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  rank_title VARCHAR(100) DEFAULT NULL,
  code VARCHAR(20) DEFAULT NULL,
  name VARCHAR(100) DEFAULT NULL,
  rank VARCHAR(100) DEFAULT NULL,
  point VARCHAR(100) DEFAULT NULL,
  courses VARCHAR(255) DEFAULT NULL,
  discord_id VARCHAR(100) DEFAULT NULL,
  vacation VARCHAR(100) DEFAULT NULL,
  promotion VARCHAR(100) DEFAULT NULL
);

-- أدخل بيانات جدولك هنا يدويًا مع تحديد rank_title لكل مجموعة

INSERT INTO police_ranks (rank_title, code, name, rank, point, courses, discord_id, vacation, promotion) VALUES
('Police Chief & Deputy Chief', 'A-1', '', 'Police Chief', '', '', '', '', 'اثبات جدارة'),
('Police Chief & Deputy Chief', 'A-2', '', 'Deputy Chief', '', '', '', '', 'اثبات جدارة'),
('High Commander', 'P-0', '', 'High Commander', '', '', '', '', 'اثبات جدارة'),
('High Commander', 'P-1', '', 'High Commander', '', '', '', '', 'اثبات جدارة'),
-- ... أكمل بقية الجدول بنفس النمط ...
('Solo Cadet', 'U-159', '', 'Solo Cadet', '', '', '', '', '0');