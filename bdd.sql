-- Création de la table book
CREATE TABLE book (
  id INT PRIMARY KEY,
  title VARCHAR(255),
  author VARCHAR(255),
  edition VARCHAR(255),
  isbn VARCHAR(255),
  category VARCHAR(255),
  pages INT,
  format VARCHAR(255)
);

-- Création de la table booking
CREATE TABLE booking (
  id INT PRIMARY KEY,
  client INT,
  book INT,
  dateStart DATE,
  dateEnd DATE,
  FOREIGN KEY (client) REFERENCES client(id),
  FOREIGN KEY (book) REFERENCES book(id)
);


-- Création de la table client
CREATE TABLE client (
  id INT PRIMARY KEY,
  firstname VARCHAR(255),
  lastname VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(255),
  birthdayYear INT,
  address VARCHAR(255),
  city VARCHAR(255),
  deposit BOOLEAN,
  bookings JSON
);

-- Création de la table user
CREATE TABLE user (
  id INT PRIMARY KEY,
  username VARCHAR(255),
  password VARCHAR(255)
);

-- Insertion des données dans la table book
INSERT INTO book (id, title, author, edition, isbn, category, pages, format)
VALUES
(1, 'Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', '1st Edition', '9780590353427', 'Fantasy', 320, 'Paperback'),
(2, 'To Kill a Mockingbird', 'Harper Lee', '50th Anniversary Edition', '9780062420701', 'Fiction', 336, 'Hardcover'),
(3, '1984', 'George Orwell', 'Reprint Edition', '9780451524935', 'Science Fiction', 328, 'Paperback'),
(4, 'Pride and Prejudice', 'Jane Austen', 'Revised Edition', '9780141439518', 'Romance', 480, 'Paperback'),
(5, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Illustrated Edition', '9780743273565', 'Fiction', 180, 'Hardcover'),
(6, 'To Kill a Kingdom', 'Alexandra Christo', '1st Edition', '9781250112682', 'Young Adult', 352, 'Paperback'),
(7, 'The Hobbit', 'J.R.R. Tolkien', '75th Anniversary Edition', '9780547928227', 'Fantasy', 400, 'Hardcover'),
(8, 'The Catcher in the Rye', 'J.D. Salinger', 'Mass Market Paperback Edition', '9780316769488', 'Fiction', 224, 'Paperback'),
(9, 'The Alchemist', 'Paulo Coelho', '25th Anniversary Edition', '9780062315007', 'Fiction', 208, 'Paperback'),
(10, 'The Chronicles of Narnia', 'C.S. Lewis', 'Complete Collection', '9780064405379', 'Fantasy', 768, 'Paperback'),
(11, 'The Da Vinci Code', 'Dan Brown', 'Special Illustrated Edition', '9780307474278', 'Mystery', 592, 'Paperback'),
(12, 'The Lord of the Rings', 'J.R.R. Tolkien', '50th Anniversary Edition', '9780544003415', 'Fantasy', 1178, 'Paperback'),
(13, 'The Girl on the Train', 'Paula Hawkins', 'Movie Tie-in Edition', '9781594634024', 'Thriller', 416, 'Paperback'),
(14, 'Gone Girl', 'Gillian Flynn', '1st Edition', '9780307588371', 'Mystery', 432, 'Paperback'),
(15, 'The Hunger Games', 'Suzanne Collins', 'Special Edition', '9781338572959', 'Young Adult', 384, 'Hardcover');


-- Insertion des données dans la table client
INSERT INTO client (id, firstname, lastname, email, phone, birthdayYear, address, city, deposit, bookings)
VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '1234567890', 1990, '123 Street', 'New York', 1, '[1, 2]'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '0987654321', 1985, '456 Avenue', 'Los Angeles', 0, '[3]'),
(3, 'Mike', 'Johnson', 'mike.johnson@example.com', '9876543210', 1995, '789 Road', 'Chicago', 1, '[4, 5]'),
(4, 'Sarah', 'Williams', 'sarah.williams@example.com', '0123456789', 1988, '321 Lane', 'San Francisco', 0, '[]'),
(5, 'Emily', 'Brown', 'emily.brown@example.com', '5678901234', 1992, '654 Boulevard', 'Houston', 1, '[6, 7]'),
(6, 'David', 'Taylor', 'david.taylor@example.com', '4321098765', 1987, '987 Court', 'Seattle', 0, '[8]'),
(7, 'Olivia', 'Miller', 'olivia.miller@example.com', '8901234567', 1993, '123 Street', 'Miami', 1, '[9, 10]'),
(8, 'Andrew', 'Anderson', 'andrew.anderson@example.com', '6789012345', 1991, '456 Avenue', 'Boston', 0, '[11]'),
(9, 'Sophia', 'Clark', 'sophia.clark@example.com', '3456789012', 1989, '789 Road', 'Dallas', 1, '[]'),
(10, 'Daniel', 'Thomas', 'daniel.thomas@example.com', '9012345678', 1994, '321 Lane', 'Philadelphia', 0, '[12]');


-- Insertion des données dans la table booking
INSERT INTO booking (id, client, book, dateStart, dateEnd)
VALUES
(1, 1, 4, '2023-01-01', '2023-01-15'),
(2, 1, 1, '2023-02-01', '2023-02-05'),
(3, 2, 3, '2023-03-01', '2023-03-10'),
(4, 3, 2, '2023-04-01', '2023-04-30'),
(5, 4, 6, '2023-05-01', '2023-05-07'),
(6, 6, 7, '2023-06-01', '2023-06-20'),
(7, 7, 9, '2023-07-01', '2023-07-31'),
(8, 8, 8, '2023-08-01', '2023-08-31'),
(9, 9, 5, '2023-09-01', '2023-09-15'),
(10, 10, 3, '2023-10-01', '2023-10-31');