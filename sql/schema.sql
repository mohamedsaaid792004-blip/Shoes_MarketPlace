-- Simple schema for shoes
CREATE TABLE shoes (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  description TEXT,
  price NUMERIC(10,2),
  image TEXT
);
