<?php
require_once "database.php";

class Student extends Database{
  public function createStudent($firstName,$lastName,$username,$course, $times, $password){
    $sql = "INSERT INTO students (first_name, last_name, username, course, `times`, `password`) VALUES ('$firstName', '$lastName', '$username', '$course',  $times, '$password')";

    if($this->conn->query($sql)){
      header("location: ../pages/studentList.php");
      exit;
    } else{
      die ("Error: creating new student " .$this->conn->error);
    }
  }

  public function login($username, $password){

    $sql = "SELECT *FROM students WHERE username = '$username' ";

    $result = $this->conn->query($sql);
    if($result->num_rows == 1){
      $stuDetails = $result->fetch_assoc();

      if(password_verify($password,$stuDetails['password'])){
        session_start();

        $_SESSION['id'] = $stuDetails['id'];
        $_SESSION['username'] = $stuDetails['username'];

        header("location: ../pages/topPage.php");
        exit;
      } else{
        echo "Password is incorrect!";
      } 
    } else{
      echo "Username is incorrect!";
    }
  }

  public function getStudent(){
    $username = $_SESSION['username'] ;
    $sql = "SELECT * FROM students WHERE username = '$username' ";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    } else{
      die ("Error retrieving profile: " .$this->conn->error);
    }

  }

  public function createNewLesson($lessonName, $suitedAge,$teacher, $date, $day, $time){
    $sql ="INSERT INTO lessons (lesson_name, suited_age, teacher, lesson_date, lesson_day, lesson_time) VALUES ('$lessonName', '$suitedAge', '$teacher', '$date', '$day', '$time')";

    if($this->conn->query($sql)){
      header("location: ../pages/lessonListAdmin.php");
      exit;
    } else{
      die("Error creating new lesson:" .$this->conn->error);
    }
  }

  public function getLessonID($studentID){
    $sql = "SELECT lesson_id FROM schedule 
    WHERE student_id = $studentID";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving lessonID:" .$this->conn->error);
    }
  }


  public function getLesson($id){
    $sql = "SELECT * FROM lessons WHERE id = $id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    } else{
      die("Error retrieving lesson:" .$this->conn->error);
    }
  }

  public function getElemenLessons(){
    $sql = "SELECT * FROM lessons 
    WHERE suited_age = 'Elementary' 
    ORDER BY lesson_date,lesson_time ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving Elementary lessons:" .$this->conn->error);
    }
  }

  public function getJhLessons(){
    $sql = "SELECT * FROM lessons 
    WHERE suited_age = 'Junior high' 
    ORDER BY lesson_date,lesson_time ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving JH lessons:" .$this->conn->error);
    }
  }

  public function getHsLessons(){
    $sql = "SELECT * FROM lessons 
    WHERE suited_age = 'High school' 
    ORDER BY lesson_date,lesson_time ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving JH lessons:" .$this->conn->error);
    }
  }

  public function getAdultLessons(){
    $sql = "SELECT * FROM lessons 
    WHERE suited_age = 'Adults' 
    ORDER BY lesson_date,lesson_time ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving JH lessons:" .$this->conn->error);
    }
  }

  public function createSchedule($studentID, $lessonID){
    $sql = "INSERT INTO schedule (student_id, lesson_id) VALUES($studentID, $lessonID)";

    if($this->conn->query($sql)){
      header("location: ../pages/schedule.php");
      exit;
    } else{
      die("Error creating schedule:" .$this->conn->error);
    }
  }

  public function getSchedule($studentID){
    $sql = "SELECT lessons.*
    FROM schedule
    INNER JOIN students
    ON schedule.student_id = students.id
    INNER JOIN lessons
    ON schedule.lesson_id = lessons.id
    WHERE schedule.student_id = $studentID
    ORDER BY lesson_date, lesson_time ASC"; 

    if($result = $this->conn->query($sql)){
      return $result;
      exit;
    } else{
      die("Error retrieving schedule:" .$this->conn->error);
    }
  }

  public function getElemenStudents(){
    $sql = "SELECT * FROM students WHERE course = 'Elementary' ORDER BY `times` ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving Elementary students:" .$this->conn->error);
    }
  }

  public function getJhStudents(){
    $sql = "SELECT * FROM students WHERE course = 'Junior high' ORDER BY `times` ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving Jh students:" .$this->conn->error);
    }
  }

  public function getHsStudents(){
    $sql = "SELECT * FROM students WHERE course = 'High school' ORDER BY `times` ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving Hs students:" .$this->conn->error);
    }
  }
  
  public function getAdultStudents(){
    $sql = "SELECT * FROM students WHERE course = 'Adults' ORDER BY `times` ASC ";

    if($result = $this->conn->query($sql)){
      return $result;
    } else{
      die("Error retrieving adult students:" .$this->conn->error);
    }
  }

  public function getAllSchedule(){
    $sql ="SELECT * FROM lessons
    ORDER BY lesson_date, lesson_time ASC";

    if($result = $this->conn->query($sql)){
      return $result;
      exit;
    } else{
      die("Error retrieving all schedule:" .$this->conn->error);  
    }
   }


   public function deleteBooking($lessonID){
    $sql = "DELETE FROM schedule WHERE lesson_id = $lessonID";

    if($this->conn->query($sql)){
      header("location:schedule.php");
      exit;
    } else{
      die("Error deleting the booked lesson: " .$this->conn->error);
    }
  }

  public function deleteStudent($studentID){
    $sql = "DELETE FROM students
    WHERE id = $studentID";

    if($this->conn->query($sql)){
      $sql = "DELETE FROM schedule
      WHERE student_id = $studentID";

    if($this->conn->query($sql)){
      header("location:studentList.php");
      exit;
    } else{
      die("Error deleting the registered student: " .$this->conn->error);
      }
   }
  }

  public function deleteLesson($lessonID){
    $sql = "DELETE FROM lessons    
    WHERE id = $lessonID";

    if($this->conn->query($sql)){
      $sql = "DELETE FROM schedule
      WHERE lesson_id = $lessonID";

    if($this->conn->query($sql)){
      header("location:lessonListAdmin.php");
      exit;
    } else{
      die("Error deleting the registered lesson: " .$this->conn->error);
        }
    }
  }

  public function getAllRegStudents($id){
    $sql = "SELECT students.first_name AS firstName,
    students.last_name AS lastName,
    students.course AS course
    FROM schedule
    INNER JOIN lessons
    ON schedule.lesson_id = lessons.id 
    INNER JOIN students
    ON schedule.student_id = students.id
    WHERE schedule.lesson_id = $id";

    if($result = $this->conn->query($sql)){
        return $result;
      } else{
        die("Error retrieving all the registered students:" .$this->conn->error);
      }

  }

}