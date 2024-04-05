DROP DATABASE If exists MentorMatching;
CREATE DATABASE MentorMatching;
USE MentorMatching;

CREATE TABLE User(
userId int primary key auto_increment,
firstName varchar(50),
lastName varchar(50),
dob date,
email varchar(50), 
major varchar(20),
nationality varchar(20));



CREATE TABLE Course(
courseId int primary key auto_increment,
courseName varchar(100),
courseLevel int);



CREATE TABLE Message (messageId int primary key auto_increment, 
senderId int, 
receiverId int,
message varchar(2000),
created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY(senderId) REFERENCES User(userId),
FOREIGN KEY(receiverId) REFERENCES User(userId)
);



CREATE TABLE Mentor( 
mentorId int primary key auto_increment,
userId int,
FOREIGN KEY (userId) REFERENCES User(userId)
);


CREATE TABLE Mentee(
menteeId int primary key auto_increment,
userId int,
FOREIGN KEY (userId) REFERENCES User(userId)
);



CREATE TABLE MentorshipCourseRegistration(
registrationId int primary key auto_increment,
mentorId int,
courseId int,
timeadded  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (mentorId) REFERENCES User(userId),
FOREIGN KEY (courseId) REFERENCES Course(courseId)
);



CREATE TABLE MenteeCourseRegistration(
registrationId int primary key auto_increment,
menteeId int,
courseId int,
timeadded  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (menteeId) REFERENCES User(userId),
FOREIGN KEY (courseId) REFERENCES Course(courseId));


CREATE TABLE Matching (
matchingId int primary key auto_increment,
mentorId int,
menteeId int,
status enum("Pending","Accepted","Rejected"),
FOREIGN KEY (mentorId) REFERENCES User(userId),
FOREIGN KEY (menteeId) REFERENCES User(userId));

























