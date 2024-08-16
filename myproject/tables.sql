CREATE TABLE Students (
    StudentID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    FathersName VARCHAR(255) NOT NULL,
    MothersName VARCHAR(255) NOT NULL,
    DOB DATE NOT NULL,
    Gender VARCHAR(10) NOT NULL,
    Category VARCHAR(50),
    Religion VARCHAR(50),
    Caste VARCHAR(50),
    AdharNumber VARCHAR(20) UNIQUE,
    EmailID VARCHAR(255) UNIQUE,
    State VARCHAR(50),
    StudyPlace ENUM('Urban', 'Rural'),
    Study10Medium VARCHAR(50),
    PhoneNumber VARCHAR(15)
);
INSERT INTO Students (Name, FathersName, MothersName, DOB, Gender, Category, Religion, Caste, AdharNumber, EmailID, State, StudyPlace, Study10Medium, PhoneNumber)
VALUES 
('John Doe', 'David Doe', 'Mary Doe', '1998-05-15', 'Male', 'General', 'Christian', 'Doe', '123456789012', 'john.doe@email.com', 'California', 'Urban', 'English', '123-456-7890'),

('Jane Smith', 'Michael Smith', 'Susan Smith', '1999-08-22', 'Female', 'OBC', 'Hindu', 'Smith', '987654321098', 'jane.smith@email.com', 'New York', 'Rural', 'Hindi', '987-654-3210'),

('Bob Johnson', 'George Johnson', 'Alice Johnson', '2000-03-10', 'Male', 'SC', 'Christian', 'Johnson', '456789012345', 'bob.johnson@email.com', 'Texas', 'Urban', 'English', '345-678-9012'),

('Sara Miller', 'Andrew Miller', 'Laura Miller', '1997-11-28', 'Female', 'General', 'Jewish', 'Miller', '789012345678', 'sara.miller@email.com', 'Florida', 'Rural', 'Spanish', '567-890-1234');

CREATE TABLE TwelveMarks (
    StudentID INT PRIMARY KEY,
    Subject1 INT,
    Subject2 INT,
    Subject3 INT,
    TotalMarks INT,
    MaximumMarks INT,
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);


CREATE TABLE TenMarks (
    StudentID INT PRIMARY KEY,
    TotalMarks INT,
    MaximumMarks INT,
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);

CREATE TABLE CollegeEnrollment (
    StudentID INT,
    CollegeName VARCHAR(255) NOT NULL,
    CollegeID INT NOT NULL,
    CourseName VARCHAR(255) NOT NULL,
    DurationInYears INT NOT NULL,
    SeatType ENUM('Management', 'GovtAllotted') NOT NULL,
    Fees DECIMAL(10, 2) NOT NULL, 
    PRIMARY KEY (StudentID, CollegeID, CourseName),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);
CREATE TABLE StudentAccommodation (
    StudentID INT PRIMARY KEY,
    AccommodationType ENUM('Hostel', 'PG', 'Home') NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Pincode VARCHAR(10) NOT NULL,
    GuardianPhone VARCHAR(15),
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);




CREATE TABLE CollegeBill (
    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
    StudentID INT,
    Status ENUM('Paid', 'Pending') NOT NULL,
    AmountPaid DECIMAL(10, 2) NOT NULL,
    PendingAmount DECIMAL(10, 2) NOT NULL,
    DateOfPayment DATE,
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);




	
CREATE TABLE ExamResults (
    StudentID INT PRIMARY KEY,
    ExamType VARCHAR(50) NOT NULL,
    ERank INT,
    FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);
