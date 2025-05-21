<?php
// INSERT INTO `notes` (`s.no`, `title`, `description`, `tstamp`) VALUES (NULL, 'Buy Groceries', 'Go to the grocery store to buy some vegetables.', current_timestamp());
//connection to the database
$insert = false;
$delete =false;
$update= false;

$servername="localhost";
$username="root";
$password =null;
$dbname="enotes";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

//delete a record
if(isset($_GET['delete'])){       // get id from url directed by javascript in delete
    $sno = $_GET['delete']; 
    
    // Validate input (ensure it's a number)
    if(!is_numeric($sno)) {
        die("Invalid input: Serial number must be numeric");
    }
    
    // Use try-catch for error handling
    try {
        $sql = $conn->prepare("DELETE FROM `notes` WHERE `s.no` = ?");
        $sql->bind_param("i", $sno);
        $result = $sql->execute();
        
        if($result && $sql->affected_rows > 0) {
            $delete = true;
            // Success message or redirect
        } else {
            // No rows were deleted (record didn't exist)
            $delete = false;
        }
    } catch(Exception $e) {
        die("Error deleting record: " . $e->getMessage());
    }
}



  if(isset($_POST['add'])){

    if(isset($_POST['snoEdit'])) {
        // update the record.
        $snoEdit = $_POST['snoEdit'];
      
        $title = trim($_POST['titleEdit']);
        $description = trim($_POST['descEdit']);
        if(empty($title) || empty($description)){
            $error = "Title and Description cannot be empty";
        }else{

            $sql = $conn->prepare("UPDATE `notes` SET  `title`=?, `description`=?, `tstamp`=current_timestamp() where `s.no`=?");
            $sql->bind_Param("ssi",$title,$description,$snoEdit);  // ss means two strings  and i is integer
            $sql->execute();
           // update message
            if($sql){
                $update=true;
            }
        
        }

    }else{

      // create new note
        $title = trim($_POST['title']);  // user input sanitization
        $description = trim($_POST['desc']); // user input sanitization

        if(empty($title) || empty($description)){
            $error = 'Title and Description cannot be empty';
        }else{

            //sql query to be executed 
            $sql = $conn->prepare("INSERT INTO `notes` (`s.no`, `title`, `description`, `tstamp`) VALUES (NULL, ?, ?, current_timestamp())");
            $sql->bind_Param("ss",$title,$description);  // ss means two strings
            $sql->execute();
            if($sql){
              $insert = true;
            }
        }
       } 
    
        
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <!-- Add advanced interaction controls to your HTML tables datatables.net-->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>E-Notes App</title>
    <link rel="shortcut icon" href="enotes-logo.png" type="image/x-icon">
</head>

<body>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="editModalLabel">Edit Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/learning-php/CRUD_Operation/crud.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group mb-3">
                            <label for="notetitle" class="form-label">Note Title</label>
                            <input type="text" name="titleEdit" id="titleEdit" class="form-control"
                                aria-describedby="noteEntry" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="desc">Note Description</label>
                            <textarea class="form-control" name="descEdit" id="descEdit"
                                style="height: 100px"></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <!-- display:block and margin right auto-->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="enotes_logo.png" alt="logo.png" width="150px" style="z-index:100;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <?php if(isset($error)) { ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>

    <?php
  
    if($insert){
    echo "<div class='alert alert-success' role='alert'>
        Note has been saved successfully!
    </div>";
    }
    if($update){
    echo "<div class='alert alert-success' role='alert'>
        Note has been updated successfully!
    </div>";
    }
    if($delete){
    echo "<div class='alert alert-success' role='alert'>
        Note has been deleted successfully!
    </div>";
    }

    ?>
    <!-- form -->
    <div class="container my-4 ">
        <h2>Add a Note</h2>
        <!-- add proper path of the file in action -->
        <form action="/learning-php/CRUD_Operation/crud.php" method="post">
            <div class="form-group mb-3">
                <label for="notetitle" class="form-label">Note Title</label>
                <input type="text" name="title" class="form-control" id="notetitle" aria-describedby="noteEntry" required/>
            </div>

            <div class="form-group">
                <label class="form-label" for="desc">Note Description</label>
                <textarea class="form-control" name="desc" id="desc" class="desc" style="height: 100px" required></textarea>
            </div>
            <button type="submit" name="add" class="btn btn-primary my-3">
                Add Note
            </button>
        </form>
    </div>
    <div class="container my-4 ">

        <table class="table table-hover table-dark" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Time</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php  
      // fetching the data from server to show on browser(UI)
    
    $sql="SELECT * FROM `notes`";
    $result = mysqli_query($conn,$sql);
    $sno = 0; // serial number initialize to zero
    while($row = mysqli_fetch_assoc($result)){
      $sno = $sno + 1;
      echo "<tr>
      <th >".$sno."</th>
      <td >".$row['title']."</td>
      <td >".$row['description']."</td>
      <td >".$row['tstamp']."</td>
      <td style='width:150px;'> <button class= 'edit btn btn-sm btn-primary' id=".$row['s.no'].">Edit</button>  
      <button class= 'delete btn btn-sm btn-primary' id=d".$row['s.no'].">Delete</button> </td>
      </tr>";
    }
      
  ?>


            </tbody>
        </table>
    </div>
    <hr>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script> -->
    <!-- Add this for  -->
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script>
    // Simple initialization without server-side processing
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <script>
    edits = document.getElementsByClassName("edit");
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit");
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            // console.log(title,description);
            document.getElementById("titleEdit").value = title;
            // js automatically select element with id descEdit in this way
            descEdit.value = description;
            snoEdit.value = e.target.id;
            console.log(e.target.id);
            $('#editModal').modal('toggle');
        })
    })
    // for deleteing a record
    deletes = document.getElementsByClassName("delete");
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("deletes", e);
            const sno = e.target.id.substr(1, );

            if (confirm("Are you sure, you want to delete this note!")) {
                window.location = `/learning-php/CRUD_Operation/crud.php?delete=${sno}`;
            } else {
                console.log("no");
            }
        })
    })
    </script>


</body>

</html>