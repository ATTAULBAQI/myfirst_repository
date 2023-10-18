
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
          background: linear-gradient(to bottom, red, white);;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    STUDENT FORM
                </div>
                <div class="card-body">







               
             <form method="post" action="http://localhost/New%20folder/New%20folder/submitform.php" enctype="multipart/form-data" >
                        <div class="form-group">
                              <label for="studentName">Student Name:</label>
                             <input type="text" class="form-control" id="studentName" name="studentName" >
                         </div>
                        <div class="form-group">
                            <label for="studentEmail">Student Email:</label>
                            <input type="email" class="form-control" id="studentEmail" name="studentEmail" >
                        </div>
                        <div class="form-group">
                             <label for="studentPhone">Student Phone Number:</label>
                             <input type="tel" class="form-control" id="studentPhone" name="studentPhone" >
                        </div>
                        <div class="form-group">
                            <label for="studentAddress">Student Address:</label>
                            <textarea class="form-control" id="studentAddress" name="studentAddress" rows="3" ></textarea>
                        </div>
                        <div class="form-group">
                        <label for="file">Upload File:</label>
                       <input type="file" name="file" id="file">

                       <input type="submit" name="submit" value="Submit">
                       </div>


                               <button type="submit" class="btn btn-primary" onclick="showErrors()" >Submit</button>

           </form>



                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>

