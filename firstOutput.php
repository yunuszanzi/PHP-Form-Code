<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Personal Information of Student</h3><br>
    <b>Student's Full Name: </b> <?php 
    echo $_POST['fname'], " ", $_POST['lname'].'<br>'; 
    echo '<b>Gender: </b>',$_POST['gender'].'<br>';
    echo "<b>Date of Birth: </b>",$_POST['dob'].'<br>';
    echo "<b>Student CNIC: </b>", $_POST['cnic'].'<br>';
    echo "<b>Student's Contact Number: </b>", $_POST['std_contact'].'<br>';
    echo "<b>Student's Whatsapp Number: </b>", $_POST['std_whatsapp'].'<br>';
    echo "<b>Home Phone Number: </b>", $_POST['home_contact'].'<br>';
    echo "<b>Student's Email Address: </b>", $_POST['std_email'].'<br>';
    echo "<b>Address: </b>", $_POST['std_res_address'].'<br>';
    echo "<b>City: </b>", $_POST['city'].'<br>';
    echo "<b>Zip Code: </b>", $_POST['zip_code'].'<br><br>';

    echo "<h3>Student's Qualification</h3><br>";
    //for Olevels
    if ($_POST['qualification'] == 'olevels')
    {
        echo "<b>Qualification: </b>O'levels<br>";
        echo"<b>O'Levels Institute: </b>",$_POST['olevels_institute'].'<br>';
        echo"<b>O'Levels Grades: </b>",$_POST['olevel_grades'].'<br>';
    }
    //for A levels
    else if($_POST['qualification'] == 'alevels')
    {
        echo "<b>Qualification: </b>A'levels<br>";
        echo"<b>A'Levels Institute: </b>",$_POST['alevels_institute'].'<br>';
        echo"<b>A'Levels Subjects: </b>",$_POST['alevel_subjects'].'<br>';
    }
    // for AS levels
    else if($_POST['qualification'] == 'aslevels')
    {
        echo "<b>Qualification: </b>As'levels<br>";
        echo"<b>As'Levels Institute: </b>",$_POST['aslevels_institute'].'<br>';
        echo"<b>As'Levels Subjects: </b>",$_POST['aslevel_subjects'].'<br>';
    }
    //for bachelors    
    else if($_POST['qualification'] == 'bachelors')
    {
        echo "<b>Qualification: </b>Bachelors<br>";
        echo"<b>Qualification: </b> Bachelors <br>";
        echo"<b>Bachelors Institute: </b>",$_POST['bachelors_institute'].'<br>';
        echo"<b>Bachelors Qualification: </b>",$_POST['bachelors_qualification'].'<br>';
        echo"<b>Duration of Degree: </b>",$_POST['duration'].'<br>';
        echo"<b>Grade: </b>",$_POST['grade'].'<br>';
    }
    //Intermediate or matriculation Info    
    else if($_POST['qualification'] == 'intermediate')
    {
        echo "<b>Qualification: </b>Intermediate/ Matriculation<br>";
        echo "<h3><b>Qualification: </b> Intermediate/ Matriculation</h3>";
        echo"<b>Institute: </b>",$_POST['intermediate_institute'].'<br>';
        echo"<b>Year: </b>",$_POST['intermediate_year'].'<br>';
        echo"<b>Percentage: </b>",$_POST['intermediate_percentage'].'<br>';

    }
    //Other Degree
    else if($_POST['qualification'] == 'academics_other_degree')
    {
        echo "<b>Qualification: </b>Other Degree<br>";
        echo"<b>Degree Program: </b>",$_POST['degree_program'].'<br>';
        echo"<b>Awarding Institute: </b>",$_POST['degree_awarding_institue'].'<br>';
        echo"<b>Country: </b>",$_POST['country'].'<br>';
        echo"<b>Year: </b>",$_POST['other_degree_year'].'<br>';
    }
    //transfer Student
    else if($_POST['qualification'] == 'academics_transfer_student')
    {
        echo "<b>Qualification: </b>Transfer Student<br>";
        echo"<b>Student Level: </b>",$_POST['transfer_student_level'].'<br>';
        echo"<b>Isntitute: </b>",$_POST['transfer_std_institue'].'<br>';
    }
    else if($_POST['qualification'] == 'internationalFunding')
    {
        echo "<b>Qualification: </b>International Funding<br>";
    }
    echo "<br>";
    echo "<b>Program: </b>", $_POST['programme'].'<br><br>';
    
    //Parent Information
    echo "<b><h3> Parent/Guardian Information </h3></b>";
    echo "<b>First Name: </b>", $_POST['parent_fname'].'<br>';
    echo "<b>Last Name: </b>", $_POST['parent_lname'].'<br>';
    echo "<b>Email: </b>", $_POST['parent_email'].'<br>';
    echo "<b>Contact Number: </b>", $_POST['parent_contact'].'<br>';
    echo "<b>CNIC: </b>", $_POST['parent_cnic'].'<br>';
    echo "<b>NTN: </b>", $_POST['parent_ntn'].'<br>';
    echo "<b>Occupation: </b>", $_POST['parent_occupation'].'<br>';
    echo "<b>Resident Address: </b>", $_POST['parent_res_address'].'<br>';
    echo "<b>Office Address: </b>", $_POST['parent_office_address'].'<br>';
    echo "<b>Relation with Student: </b>", $_POST['relation'].'<br>';
    echo "<b>Is Parent Tax Payer: </b>", $_POST['tax'].'<br><br>';

    
    echo '<h3><b>How the Student Found out about Denning via: </b></h3>',$_POST['find_how'].'<br><br>';
    echo "<h3><b>Student's Personal Statement </b></h3><br>",$_POST['statement'].'<br><br>';
   
   
    //Uploading images in the folder
    echo '<h3><b>Document Images</b></h3>';

        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';

        //for profile picture
        $profile_image = $_FILES['profile_image']['name'];
        $profile_image_size = $_FILES['profile_image']['size'];
        $profile_image_tmp = $_FILES['profile_image']['tmp_name'];
        $profile_image_type = $_FILES['profile_image']['type'];

        if($profile_image_size > 2000000)
        {
            echo "profile image too large";
        }
        else
        {
            move_uploaded_file($profile_image_tmp,"applications_data/".$profile_image);
        }


        //for Cnic documents
        echo "<h4>CNIC Documents</h4>";
        $total_cnic = count($_FILES['cnic_image']['name']);
        echo $total_cnic.'<br>';
        for($i = 0; $i < $total_cnic; $i++)
        {
            $cnic_image = $_FILES['cnic_image']['name'][$i];
            $cnic_image_size = $_FILES['cnic_image']['size'][$i];
            $cnic_image_tmp = $_FILES['cnic_image']['tmp_name'][$i];
            $cnic_image_type = $_FILES['cnic_image']['type'][$i];

           

    
            if($cnic_image_size > 2000000)
            {
                echo "CNIC Document number: " + $i + "is Larger than 2MB limit" ;
            }
            else
            {
                echo "Array [",$i, "]<br>";
                echo '  ',$cnic_image.'<br>';
                echo '  ',$cnic_image_size.'<br>';
                echo '  ',$cnic_image_tmp.'<br>';
                echo '  ',$cnic_image_type.'<br><br>';
                move_uploaded_file($cnic_image_tmp,"applications_data/".$cnic_image);
            }
        }
        //for Cnic documents
        echo "<h4>CNIC Documents</h4>";
        $total_cnic = count($_FILES['cnic_image']['name']);
        echo $total_cnic.'<br>';
        for($i = 0; $i < $total_cnic; $i++)
        {
            $cnic_image = $_FILES['cnic_image']['name'][$i];
            $cnic_image_size = $_FILES['cnic_image']['size'][$i];
            $cnic_image_tmp = $_FILES['cnic_image']['tmp_name'][$i];
            $cnic_image_type = $_FILES['cnic_image']['type'][$i];

       
            if($cnic_image_size > 2000000)
            {
                echo "CNIC Document number: " + $i + "is Larger than 2MB limit" ;
            }
            else
            {
                echo "Array [",$i, "]<br>";
                echo '  ',$cnic_image.'<br>';
                echo '  ',$cnic_image_size.'<br>';
                echo '  ',$cnic_image_tmp.'<br>';
                echo '  ',$cnic_image_type.'<br><br>';
                move_uploaded_file($cnic_image_tmp,"applications_data/".$cnic_image);
            }
        }


        //for transcripts documents
        echo "<h4>Transcripts Documents</h4>";
        $total_transcripts = count($_FILES['transcripts']['name']);
        echo 'Total Transcripts document: ',$total_transcripts.'<br>';
        for($i = 0; $i < $total_transcripts; $i++)
        {
            $transcripts = $_FILES['transcripts']['name'][$i];
            $transcripts_size = $_FILES['transcripts']['size'][$i];
            $transcripts_tmp = $_FILES['transcripts']['tmp_name'][$i];
            $transcripts_type = $_FILES['transcripts']['type'][$i];

               
            if($transcripts_size > 2000000)
            {
                echo "CNIC Document number: " + $i + "is Larger than 2MB limit" ;
            }
            else
            {
                echo "Array [",$i, "]<br>";
                echo '  ',$transcripts.'<br>';
                echo '  ',$transcripts_size.'<br>';
                echo '  ',$transcripts_tmp.'<br>';
                echo '  ',$transcripts_type.'<br><br>';
                move_uploaded_file($transcripts_tmp,"applications_data/".$transcripts);
            }
        }

        //for certificates documents
        echo "<h4>Certificates</h4>";
        $total_certificates = count($_FILES['certificates']['name']);
        echo 'Total Certificates count: ',$total_certificates.'<br>';
        for($i = 0; $i < $total_certificates; $i++)
        {
            $certificates = $_FILES['certificates']['name'][$i];
            $certificates_size = $_FILES['certificates']['size'][$i];
            $certificates_tmp = $_FILES['certificates']['tmp_name'][$i];
            $certificates_type = $_FILES['certificates']['type'][$i];

            if($certificates_size > 2000000)
            {
                echo "certificates number: " + $i + "is Larger than 2MB limit" ;
            }
            else
            {
                echo "Array [",$i, "]<br>";
                echo '  ',$certificates.'<br>';
                echo '  ',$certificates_size.'<br>';
                echo '  ',$certificates_tmp.'<br>';
                echo '  ',$certificates_type.'<br><br>';
                move_uploaded_file($certificates_tmp,"applications_data/".$certificates);
            }
        }

        //for extra_curricular documents
        echo "<h4>Extra Curricular Documents</h4>";
        $total_extra_curricular = count($_FILES['extra_curricular']['name']);
        echo 'Total Extra Curricular Document: ',$total_extra_curricular.'<br>';
        for($i = 0; $i < $total_extra_curricular; $i++)
        {
            $extra_curricular = $_FILES['extra_curricular']['name'][$i];
            $extra_curricular_size = $_FILES['extra_curricular']['size'][$i];
            $extra_curricular_tmp = $_FILES['extra_curricular']['tmp_name'][$i];
            $extra_curricular_type = $_FILES['extra_curricular']['type'][$i];
    
            if($extra_curricular_size > 2000000)
            {
                echo "Extra Curricular Document Number: " + $i + "is Larger than 2MB limit" ;
            }
            else
            {
                echo "Array [",$i, "]<br>";
                echo '  ',$extra_curricular.'<br>';
                echo '  ',$extra_curricular_size.'<br>';
                echo '  ',$extra_curricular_tmp.'<br>';
                echo '  ',$extra_curricular_type.'<br><br>';
                move_uploaded_file($extra_curricular_tmp,"applications_data/".$extra_curricular);
            }
        }
print_r($_POST);
        //student
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $cnic=$_POST['cnic'];
        $std_contact=$_POST['std_contact'];
        $std_gender=$_POST['gender'];
        $std_dob=$_POST['dob'];
        $stdWhatsapp=$_POST['std_whatsapp'];
        $stdHomePhone=$_POST['home_contact'];
        $stdPostalAddress=$_POST[''];
        $zip_code=$_POST['zip_code'];
        $std_res_address=$_POST['std_res_address'];
        $std_email=$_POST['std_email'];
        // $std_zipCode=$_POST['zip_code'];
        $qualification=$_POST['qualification']; 
        $olevels_institute=$_POST['olevels_institute'];
        $olevels_grades=$_POST['olevel_grades'];
        $alevelsInstitute=$_POST['alevels_institute'];
        $alevelSubjects=$_POST['alevel_subjects'];
        $aslevelsInstitute=$_POST['aslevels_institute'];
        $aslevelSubjects=$_POST['aslevel_subjects'];
        $bachelorsInstitue=$_POST['bachelors_institute'];
        $bachelorsQualification=$_POST['bachelors_qualification'];
        $bachelorsDuration=$_POST['duration'];
        $bachelorsGrade=$_POST['grade'];
        $intermediateInstitue=$_POST['intermediate_institute'];
        $intermediateYear=$_POST['intermediate_year'];
        $intermediatePercentage=$_POST['intermediate_percentage'];
        $otherDegreeProgram=$_POST['degree_program'];
        $otherDegreeAwardingInstitute=$_POST['degree_awarding_institue'];
        $otherDegreeCountry=$_POST['country'];
        $otherDegreeYear=$_POST['other_degree_year'];
        $transferStudentLevel=$_POST['transfer_student_level'];
        $transferStdInstitute=$_POST['transfer_std_institue'];
        $programme=$_POST['programme'];
        
        //parent info
        $parentFirstName=$_POST['parent_fname'];
        $parentLastName=$_POST['parent_lname'];
        $parentEmail=$_POST['parent_email'];
        $parentContact=$_POST['parent_contact'];
        $parentCNIC=$_POST['parent_cnic'];
        $parentNTN=$_POST['parent_ntn'];
        $parentOccupation=$_POST['parent_occupation'];
        $parentResAddress=$_POST['parent_res_address'];
        $parentOfficeAddress=$_POST['parent_office_address'];
        $parentRelation=$_POST['relation'];
        $taxPayer=$_POST['tax'];
            
        $foundHow=$_POST['find_how'];
        $personalStatement=$_POST['statement'];





        //creating db
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = 'student registration';

        // Create connection        
        $conn = mysqli_connect($servername, $username, $password,'registeration');
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error());
        }
        else{
           $stmt = $conn->prepare("insert into `applications` (`fname`, `lname`, `cnic`, `std_contact`, `std_gender`, `std_dob, `stdWhatsapp`,
            `stdHomePhone`,`stdPostalAddress`,`zip_code`,`std_email`,`std_res_address`,`qualification`,`olevels_institute`,`olevels_grades`, `alevelsInstitute`, `alevelsSubjects`,
            `aslevelsInstitute`, `bachelorsInstitue`, `bachelorsQualification`, `bachelorsDuration`, `bachelorsGrade`, `intermediateInstitue`,
            `intermediateYear`, `intermediatePercentage`, `otherDegreeProgram`, `otherDegreeAwardingInstitute`, `otherDegreeCountry`,
            `otherDegreeYear`, `transferStudentLevel`, `transferStdInstitute`, `programme`, `parentFirstName`, `parentLastName`, `parentEmail`,
            `parentContact`, `parentCNIC`, `parentNTN`, `parentOccupation`, `parentResAddress`, `parentRelation`, `taxPayer`, `foundHow`, 
            `personalStatement`)
            values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $stmt->bind_param('ssss', $fname, $lname, $cnic, $std_contact);
            $stmt->execute();
            echo "Registeration Successful";
            $stmt->close();
            $conn->close();
        }
        
        ?>
        </body>
        </html>

        