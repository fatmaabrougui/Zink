<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id_client = $titre_reclamation = $comm_reclam = "";
$id_client_err = $titre_reclamation_err = $comm_reclam_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate id_client

                $input_id_client = $_POST["id_client"];
                if(empty($input_id_client)){
                    $id_client_err = "Please enter a id_client.";
                }  elseif(!ctype_digit($input_id_client)){
                    $id_client_err = "Please enter a positive integer value.";
                }
                else{
                    $id_client = $input_id_client;
                }
                



    // Validate titre_reclamation
                                    $input_titre_reclamation = trim($_POST["titre_reclamation"]);
                                    if(empty($input_titre_reclamation)){
                                        $titre_reclamation_err = "Please enter an titre_reclamation.";     
                                    } else{
                                        $titre_reclamation = $input_titre_reclamation;
                                    }
                                    
                                    // Validate comm_reclam
                                                        $input_comm_reclam = trim($_POST["comm_reclam"]);
                                                        if(empty($input_comm_reclam)){
                                                            $comm_reclam_err = "Please enter the comm_reclam.";     
                                                        } else{
                                                            $comm_reclam = $input_comm_reclam;
                                                        }
                                                        
    
    // Check input errors before inserting in database
    if(empty($id_client_err) && empty($titre_reclamation_err) && empty($comm_reclam_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO reclamations (id_client, titre_reclamation, comm_reclam) VALUES (?, ?, ?)";
         
                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters

                    $param_id_client = $id_client;
                    $param_titre_reclamation = $titre_reclamation;
                    $param_comm_reclam = $comm_reclam;
                    mysqli_stmt_bind_param($stmt, "iss", $id_client, $titre_reclamation, $comm_reclam);
                    
                   
                    
                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Records created successfully. Redirect to landing page
                        header("location: index.php");
                        exit();
                    } else{
                        echo "Something went wrong. Please try again later.";
                    }
                }      
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add reclamation record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($id_client_err)) ? 'has-error' : ''; ?>">
                            <label>id_client</label>
                            <input type="text" name="id_client" class="form-control" value="<?php echo $id_client; ?>">
                            <span class="help-block"><?php echo $id_client_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($titre_reclamation_err)) ? 'has-error' : ''; ?>">
                            <label>titre_reclamation</label>
                            <textarea name="titre_reclamation" class="form-control"><?php echo $titre_reclamation; ?></textarea>
                            <span class="help-block"><?php echo $titre_reclamation_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($comm_reclam_err)) ? 'has-error' : ''; ?>">
                            <label>comm_reclam</label>
                            <input type="text" name="comm_reclam" class="form-control" value="<?php echo $comm_reclam; ?>">
                            <span class="help-block"><?php echo $comm_reclam_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>