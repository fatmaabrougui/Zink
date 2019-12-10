<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id_client = $titre_reclamation = $comm_reclam = "";
$id_client_err = $titre_reclamation_err = $comm_reclam_err = "";
  
// Processing form data when form is submitted
if( isset($_POST["id_reclamation"]) && !empty($_POST["id_reclamation"])){
    // Get hidden input value
                            $id_reclamation = $_GET["id_reclamation"];
                            
                            $input_id_client = $_POST["id_client"];
                            if(empty($input_id_client)){
                                $id_client_err = "Please enter a id_client.";
                            }  elseif(!ctype_digit($input_id_client)){
                                $id_client_err = "Please enter a positive integer value.";
                            } else{
                                $id_client = $input_id_client;
                            }
                            var_dump($id_client);
    // Validate titre_reclamation titre_reclamation
                                                $input_titre_reclamation = trim($_POST["titre_reclamation"]);
                                                if(empty($input_titre_reclamation)){
                                                    $titre_reclamation_err = "Please enter an titre_reclamation.";     
                                                } else{
                                                    $titre_reclamation = $input_titre_reclamation;
                                                }
                                                var_dump($titre_reclamation );
    // Validate comm_reclam
                                                                                    $input_comm_reclam = trim($_POST["comm_reclam"]);
                                                                                    if(empty($input_comm_reclam)){
                                                                                        $comm_reclam_err = "Please enter the comm_reclam.";     
                                                                                    } else{
                                                                                        $comm_reclam = $input_comm_reclam;
                                                                                    }var_dump($comm_reclam );
                                                                                    
    // Check input errors before inserting in database
    if(empty($id_client_err) && empty($titre_reclamation_err) && empty($comm_reclam_err))
    {
        // Prepare an update statement
        $sql = "UPDATE reclamations SET id_client=?, titre_reclamation=?, comm_reclam=? WHERE id_reclamation=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            
            mysqli_stmt_bind_param($stmt, "issi", $param_id_client, $param_titre_reclamation, $param_comm_reclam, $param_id_reclamation);
            
            // Set parameters
            $param_id_client = $id_client;
            $param_titre_reclamation = $titre_reclamation;
            $param_comm_reclam = $comm_reclam;
            $param_id_reclamation = $id_reclamation;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id_reclamation"]) && !empty(trim($_GET["id_reclamation"]))){
        // Get URL parameter
        $id_reclamation =  trim($_GET["id_reclamation"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM reclamations WHERE id_reclamation = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id_reclamation);
            
            // Set parameters
            $param_id_reclamation = $id_reclamation;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $id_client = $row["id_client"];
                    $titre_reclamation = $row["titre_reclamation"];
                    $comm_reclam = $row["comm_reclam"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
       mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
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
                        <input type="hidden" name="id_reclamation" value="<?php echo $id_reclamation; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>