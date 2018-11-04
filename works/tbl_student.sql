CREATE TABLE tbl_student (
  stu_id int(15) NOT NULL AUTO_INCREMENT,
  stu_name varchar(100) DEFAULT NULL,
  stu_dob date DEFAULT NULL,
  stu_sex varchar(20) NOT NULL,
  stu_religion varchar(20) DEFAULT NULL,
  stu_marital varchar(20) DEFAULT NULL,
  stu_nid varchar(100) DEFAULT NULL,
  stu_occupation varchar(100) DEFAULT NULL,
  stu_image varchar(100) DEFAULT NULL,
    
  stu_father varchar(50) DEFAULT NULL,
  stu_mother varchar(100) DEFAULT NULL,
  stu_guardian varchar(100) DEFAULT NULL,
  stu_relation varchar(100) DEFAULT NULL,
    
  stu_guardian_mobile varchar(20) DEFAULT NULL,
  stu_mobile varchar(20) DEFAULT NULL,
  stu_email varchar(100) DEFAULT NULL,
  stu_present_address varchar(100) DEFAULT NULL, 
  stu_permanent_address varchar(100) DEFAULT NULL,
  
  stu_institute varchar(50) DEFAULT NULL,
  stu_session varchar(100) DEFAULT NULL,
  stu_trade varchar(100) DEFAULT NULL,
  stu_roll varchar(100) DEFAULT NULL, 
  stu_examination varchar(100) DEFAULT NULL,
  
  stu_board varchar(100) DEFAULT NULL, 
  stu_group varchar(100) DEFAULT NULL, 
  
  stu_pass_year varchar(100) DEFAULT NULL, 
  stu_result varchar(100) DEFAULT NULL, 
  
  PRIMARY KEY (stu_id)
);
