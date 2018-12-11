create database crud_db;

use crud_db;

CREATE TABLE 'user_review' (
  'id' int(11) NOT NULL auto_increment,
  'order_id' varchar(100),
  'product_id' varchar(100),
  'user_id' varchar(100),
  'rating' float(5),
  'review' varchar(100),
  'created_at' varchar(100) NOT NULL auto_generated,
  'updated_at' varchar(100) NOT NULL auto_generated,
  PRIMARY KEY  ('id')
);