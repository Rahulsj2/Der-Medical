drop schema if exists DER2021; 
create database DER2021; 
use DER2021; 

create table User(
user_id int(9) not null,
username char(25),
password varchar(25),
email varchar(25), 
primary key(user_id));

create table Staff(
staff_id int(4) not null, 
first_name varchar(25) not null, 
last_name varchar(25) not null, 
email varchar(25) not null, 
date_of_birth date not null, 
SSN int(8), 
Salary int(9), 
Staff_type enum("Medical Staff", "Administration"),
phone int(10) not null, 
address varchar(25) not null, 
gender enum("Male","Female"), 
start_date date, 
primary key(staff_id));

create table Department(
dept_id int(4) not null, 
dept_name int(25) ,
dept_location int(25), 
staff_id int(4) not null, 
primary key(dept_id), 
foreign key(staff_id) references Staff(staff_id));


Create table Medical_Staff(
staff_id int(4),
staff_position enum("Doctor", "Nurse"),
dept_id int(4),
shift_type enum("Morning Shift", "Evening Shift"),
office_number int(4), 
telephone int(10),
primary key(staff_id),
foreign key(staff_id) references Staff(staff_id), 
foreign key(dept_id) references Department(dept_id));

Create table Administration(
staff_id int(4),
dept_id int(4), 
office_number int(4),
telephone int(10),
primary key(staff_id),
foreign key(staff_id) references Staff(staff_id),
foreign key(dept_id) references Department(dept_id));


Create table Patient(
patient_id int(4) not null,
first_name varchar(25) not null,
last_name varchar(25) not null,
date_of_birth date not null,
gender enum ("Male", "Female"),
phone_number varchar(10) not null,
other_number varchar(10) default "None",
email varchar(25) not null,
eddress varchar(25) not null,
insurance enum("Yes","No"),
region char(10),
city char(10),
primary key(patient_id));

Create table Vitals(
vital_id int(4) not null, 
patient_id int(4),
staff_id int(4),
temperature int(3),
weight varchar(5),
blood_pressure varchar(7),
allergies varchar(100),
blood_group varchar(3),
other_information varchar(100), 
primary key(vital_id),
foreign key(staff_id) references Staff(staff_id),
foreign key(patient_id) references Patient(patient_id));

Create table Inpatient(
patient_id int(4) not null,
vital_id int(4),
room_number varchar(10),
primary key(room_number),
foreign key(patient_id) references Patient(patient_id),
foreign key(vital_id) references Vitals(vital_id));

Create table Outpatient(
patient_id int(4)not null,
vital_id int(4),
next_checkup char(20),
foreign key (patient_id) references Patient(patient_id),
foreign key(vital_id) references Vitals(vital_id));

create table Records(
record_id int(4),
patient_id int(4),
staff_id int(4),
primary key (record_id),
foreign key(patient_id) references Patient(patient_id), 
foreign key(staff_id) references Staff(staff_id));


Create table Diagnosis(
record_id int(4),
disease char(9),
treatment_method varchar(10),
observation_time date,
foreign key(record_id) references Records(record_id));

Create table Medical_record(
record_id int(4),
treatment varchar(10),
diagnosis char(9),
foreign key(record_id) references Records(record_id));

Create table Appointment(
appointment_number int(4),
appointment_date date,
staff_id int(4),
patient_id int(4),
dept_id int(4),
appointment_status enum("Approved", "Pending"),
payment enum("Full payment", "Part payment", "Not paid"),
primary key(appointment_number),
foreign key(patient_id) references Patient(patient_id),
foreign key(staff_id) references Staff(staff_id),
foreign key(dept_id) references Department(dept_id));


Create table Prescription(
prescription_number int(4),
date_issued date,
staff_id int(4),
patient_id int(4),
primary key(prescription_number),
foreign key(staff_id) references Staff(staff_id),
foreign key(patient_id) references Patient(patient_id));


create table Lab_report(
record_id int(4),
test_name char(10),
result enum("Positive","Negative","Pending"),
foreign key (record_id) references Records(record_id));

create table Pharmacy(
item_id varchar(15),
drug_name char(10),
price varchar(8),
quantity int(9),
expire_date date,
primary key(item_id));

create table Drug_issue(
drugissue_id int(9),
item_id varchar(15),
patient_id int(4) not null,
staff_id int(4) not null,
date_issue date,
primary key(drugissue_id),
foreign key (item_id) references Pharmacy(item_id),
foreign key (patient_id) references Patient(patient_id),
foreign key (staff_id) references Staff(staff_id));


