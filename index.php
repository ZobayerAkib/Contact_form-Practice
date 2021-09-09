<?php
$getdate = date('d/m/Y');
$id = 1;
$filename = 'Information.csv';

if (file_exists($filename)) {

    $DataFromFile = readCSV($filename);
    $id = count($DataFromFile);
} else {
    $id = 1;
}


if (!empty($_POST)) {
    echo "<pre>";
    print_r($_POST);

    echo  "</pre>";



    $new_csv = fopen($filename, 'a');

    $resOrder = array(
        0 => $id,
        1 => $_POST["name"],
        2 => $_POST["email"],
        3 => $_POST["phone"],
        4 => $_POST["message"],
        5 => $getdate

    );
    fputcsv($new_csv, $resOrder);
}
function readCSV($csvFile)
{
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle)) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}


        // echo '<script language="javascript">';
        // echo 'alert("Successfully submitted! ")';
        // echo '</script>';
   
   

?>
<!DOCTYPE HTML>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <section class="Form">
        <div class="container py-5">
            <div class="row">
            
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="title text-center text-white">
                                        <h3><b>Form</b></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="form">
                                <div class="row mt-5">

                                    <div class="col-md-12">
                                        <form action="" method="POST">

                                            <div class="form-group mb-3">
                                                <label>Name</label>
                                                <input type="text" placeholder="Enter your name" name="name" value="" class="form-control" />
                                            </div>


                                            <div class="form-group mb-3">
                                                <label>Email</label>
                                                <input type="email" placeholder="Enter your email" name="email" value="" class="form-control" />
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Phone</label>
                                                <input type="text" placeholder="Enter your phone" name="phone" value="" class="form-control" />
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Message</label>
                                                <textarea name="message" placeholder="Enter your message" class="form-control" style="height:45% ;"> </textarea>
                                            </div>



                                            <div class="form-group mb-3 btn-1">
                                                <input  type="submit" value="submit" class="btn btn-primary btn-lg" />
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
    
</body>

</html>