<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
  
  
  
  <form action="" method="post" enctype="multipart/form-data">
      
      <input type="file" name="myfile">
      <button type="submit" name="submit">UPLOAD</button>
      
      
  </form>
  
  
  
  <?php
    if(isset($_POST['submit'])){
      $filename=$_FILES['myfile']['name'];
      $filetype=$_FILES['myfile']['type'];
      $filetmp=$_FILES['myfile']['tmp_name'];
      $fileerron=$_FILES['myfile']['error'];
      $filesize=$_FILES['myfile']['size'];
        
        //pathinfo() for file type function
        
        $ext=pathinfo($filename,PATHINFO_EXTENSION);
        
        
        //upload function
        //.date for ignore overrite
        //'upload'/ for upload file 
        //than concat 
        //move_uploaded_file is a upload function and there is two parameter , first one is file temporary name and second one is file name
       
     
        
       // echo "Your file formate is ".$ext;
        
        if($filesize<1500000){
            if($ext==='png' or $ext==='jpg' or $ext==='jpeg' or $ext==='pdf' or $ext==='zip'){
                move_uploaded_file($filetmp,'upload/'.date('d_m_Y_h_i_s').$filename);
                
            }else{
                echo "please upload png , jpg, jpeg, pdf or zip file";
            }
            
        }else{
            echo "your file is too large";
        }
        
        
        
    }
    
    ?>
   
   
    
</body>
</html>