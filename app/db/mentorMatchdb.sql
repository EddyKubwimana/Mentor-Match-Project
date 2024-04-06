DROP DATABASE IF EXISTS MentorMatching;
CREATE DATABASE MentorMatching;
USE MentorMatching;

CREATE TABLE User(
    userId INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    dob DATE,
    email VARCHAR(50), 
    major VARCHAR(20),
    passwd VARCHAR(1000),
    nationality VARCHAR(20)
);

CREATE TABLE Course(
    courseId INT PRIMARY KEY AUTO_INCREMENT,
    courseName VARCHAR(100),
    courseLevel INT
);

CREATE TABLE Message (
    messageId INT PRIMARY KEY AUTO_INCREMENT, 
    senderId INT NOT NULL, 
    receiverId INT NOT NULL,
    message VARCHAR(2000),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(senderId) REFERENCES User(userId) ON DELETE CASCADE,
    FOREIGN KEY(receiverId) REFERENCES User(userId) ON DELETE CASCADE
);

CREATE TABLE Mentor( 
    mentorId INT PRIMARY KEY AUTO_INCREMENT,
    userId INT NOT NULL,
    timeadded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES User(userId) ON DELETE CASCADE
);

CREATE TABLE Mentee(
    menteeId INT PRIMARY KEY AUTO_INCREMENT,
    userId INT NOT NULL,
    timeadded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES User(userId) ON DELETE CASCADE
);

CREATE TABLE MentorshipCourseRegistration(
    registrationId INT PRIMARY KEY AUTO_INCREMENT,
    mentorId INT NOT NULL,
    courseId INT NOT NULL,
    timeadded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (mentorId) REFERENCES User(userId) ON DELETE CASCADE,
    FOREIGN KEY (courseId) REFERENCES Course(courseId) ON DELETE CASCADE
);

CREATE TABLE MenteeCourseRegistration(
    registrationId INT PRIMARY KEY AUTO_INCREMENT,
    menteeId INT NOT NULL,
    courseId INT NOT NULL,
    timeadded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (menteeId) REFERENCES User(userId) ON DELETE CASCADE,
    FOREIGN KEY (courseId) REFERENCES Course(courseId) ON DELETE CASCADE
);

CREATE TABLE Matching (
    matchingId INT PRIMARY KEY AUTO_INCREMENT,
    mentorId INT NOT NULL,
    menteeId INT NOT NULL,
    status ENUM("Pending","Accepted","Rejected"),
    timeadded TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (mentorId) REFERENCES User(userId) ON DELETE CASCADE,
    FOREIGN KEY (menteeId) REFERENCES User(userId) ON DELETE CASCADE
);
