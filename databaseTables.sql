CREATE TABLE lostpets (
	lost_pet_id INT AUTO_INCREMENT PRIMARY KEY,
    pet_name varchar(30),
    pet_type varchar(30),
    pet_breed varchar(30),
    pet_image varchar(100),
    person_name varchar(30),
    person_mobile varchar(10),
    person_email varchar(40),
    person_message varchar(3000),
    date_added date
);

INSERT INTO `lostpets` (`lost_pet_id`, `pet_name`, `pet_type`, `pet_breed`, `pet_image`, `person_name`, `person_mobile`, `person_email`, `person_message`, `date_added`) VALUES (NULL, 'Sparky', 'Dog', 'Red Setter', '', 'Trish', '0876719992', 'fishytrishy@gmail.com', 'I have lost my dog in Drogheda, please dont hesitate to call or email at any time.', '2023-03-08'), (NULL, 'Stitch', 'Alien', 'Genetically Modified Koala', 'stitch.jpg', 'Lilo', '0854271015', 'lilo@hotmail.com', 'I need help finding my pet alien dog, he was last seen near Templetown Beach this morning', '2023-03-06');

CREATE TABLE foundpets (
	found_pet_id INT AUTO_INCREMENT PRIMARY KEY,
    pet_name varchar(30),
    pet_type varchar(30),
    pet_breed varchar(30),
    pet_image varchar(100),
    person_name varchar(30),
    person_mobile varchar(10),
    person_email varchar(40),
    person_message varchar(3000),
    date_added date
);

INSERT INTO `foundpets` (`found_pet_id`, `pet_name`, `pet_type`, `pet_breed`, `pet_image`, `person_name`, `person_mobile`, `person_email`, `person_message`, `date_added`) VALUES (NULL, 'Lisa', 'Cat', 'Maine Coon', 'cat.jpg', 'Mike', '0874918524', 'mikeg1463@gmail.com', 'I have found this cat on the main road outside Carlingford. Her name tag says \"Lisa\", but the contact number has been partially scratched off. Call me with that same number and we can arrange a pick up, or email me with proof of ownership. Thanks, Mike', '2023-03-06');
