<?php
// INSERT INTO `notes` (`s.no`, `title`, `description`, `tstamp`) VALUES (NULL, 'Buy Groceries', 'Go to the grocery store to buy some vegetables.', current_timestamp());
//connection to the database
$insert = false;

$servername="localhost";
$username="root";
$password =null;
$dbname="enotes";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

  if(isset($_POST['add'])){
        $title = $_POST['title'];  // user input sanitization
        $description = $_POST['desc']; // user input sanitization
        $sql = $conn->prepare("INSERT INTO `notes` (`s.no`, `title`, `description`, `tstamp`) VALUES (NULL, ?, ?, current_timestamp())");
        $sql->bind_Param("ss",$title,$description);  // ss means two strings
        $sql->execute();
        if($sql){
          $insert = true;
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
    <script>

      
    </script>

    

</head>

<body>

<!-- Edit modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
 Edit Modal    
</button> -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="editModalLabel">Modal title</h5  >
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Notes</a>
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
    <?php
    if($insert){
      echo "<div class='alert alert-success' role='alert'>
       Note has been saved successfully!
      </div>";
    }

    ?>
    <!-- form -->
    <div class="container my-4">
        <h2>Add a Note</h2>
        <!-- add proper path of the file in action -->
        <form action="/learning-php/CURD_Operation/crud.php" method="post">
            <div class="form-group mb-3">
                <label for="notetitle" class="form-label">Note Title</label>
                <input type="text" name="title" class="form-control" id="notetitle" aria-describedby="noteEntry" />
            </div>

            <div class="form-group">
                <label class="form-label" for="desc">Note Description</label>
                <textarea class="form-control" name="desc" id="desc" class="desc" style="height: 100px"></textarea>
            </div>
            <button type="submit" name="add" class="btn btn-primary my-3">
                Add Note
            </button>
        </form>
    </div>
    <div class="container my-4">

        <table class="table " id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
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
      <td ><a href='/del'>Delete</a> <a class='edit' href='/edit'>Edit</a></td>
      </tr>";
    }
      
  ?>


            </tbody>
        </table>
    </div>
<hr> 
<script>
    let table = new DataTable('#myTable');
 
    </script>
 

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
</body>

</html>