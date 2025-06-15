<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
  body {
    background-color: #0b1d3a; /* Navy blue background */
    color: #ffffff; /* White text */
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
  }

  .tab-content {
    padding: 30px;
    border: 1px solid #1c3557;
    background-color: #1a2e50;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .tabs-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    margin: 20px;
  }

  .tabs {
    flex: 1;
    margin-right: 20px;
    background-color: #12375b;
    padding: 20px;
    border-radius: 8px;
  }

  .tab-content-container {
    flex: 3;
  }

  .logout-container {
    text-align: center;
    margin-top: 30px;
  }

  .logout-link {
    display: inline-block;
    padding: 10px 24px;
    background-color: #0074d9;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  .logout-link:hover {
    background-color: #dc3545; /* Red on hover */
  }

  .contact-container {
    margin-top: 30px;
  }

  .contact-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #183b65;
    color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
  }

  .contact-table th,
  .contact-table td {
    border: 1px solid #2f4e73;
    padding: 12px 15px;
    text-align: left;
  }

  .contact-table th {
    background-color: #0f2a4d;
    color: #00d9ff;
  }

  .btn-action {
    margin-right: 5px;
    padding: 6px 12px;
    border-radius: 4px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .btn-action:hover {
    background-color: #005fa3;
  }
</style>

</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Admin Panel</h1>
    <ul class="nav nav-tabs" id="adminTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
          role="tab" aria-controls="home" aria-selected="true">Home</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button"
          role="tab" aria-controls="gallery" aria-selected="false">Gallery</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button"
          role="tab" aria-controls="service" aria-selected="false">Service</button>
      </li> 
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
          role="tab" aria-controls="contact" aria-selected="false">Contact</button>
      </li>
    </ul>
    <div class="tab-content mt-3" id="adminTabsContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form method="post">
          <div class="mb-3">
            <label for="homeDescription" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="homeDescription" rows="5" placeholder="Enter home page description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="home">Update</button>
        </form>
        <?php
        include 'connection.php';
        if (isset($_POST['home'])) {
          $description = mysqli_real_escape_string($conn, $_POST['description']);
          $query2 = "UPDATE home SET Description= '$description' WHERE textid = 1;";
          $home = mysqli_query($conn, $query2);
          if ($home) {
            echo '<div class="alert alert-success mt-3">Home page description updated successfully.</div>';
          } else {
            echo '<div class="alert alert-danger mt-3">Error updating home page description.</div>';
          }
        }
        ?>
      </div>
      <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="galleryFile" class="form-label">Upload Files</label>
            <input type="file" class="form-control" id="galleryFile" name="image" multiple>
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Select Category</label>
            <select class="form-control" id="category" name="category">
              <option value="Human">Human</option>
              <option value="Nature">Nature</option>
              <option value="Country">Country</option>
              <option value="Wedding">Wedding</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
          if (isset($_FILES['image']) && isset($_POST['category'])) {
            $uploaded = [];
            $errors = [];
            $category = mysqli_real_escape_string($conn, $_POST['category']);

            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_error = $_FILES['image']['error'];

            if ($file_error !== UPLOAD_ERR_OK) {
              $errors[] = "Error uploading $file_name";
            } else {
              $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
              if (!in_array($file_type, $allowed_types)) {
                $errors[] = "Unsupported file type: $file_name";
              } else {
                $max_size = 5 * 1024 * 1024; // 5MB
                if ($file_size > $max_size) {
                  $errors[] = "File size exceeds limit: $file_name";
                } else {
                  $target_dir = 'images/';
                  $target_file = $target_dir . basename($file_name);
                  if (move_uploaded_file($file_tmp, $target_file)) {
                    $uploaded[] = $file_name;
                    $query = "INSERT INTO image (img_name, category) VALUES ('$file_name', '$category')";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                      $errors[] = "Error inserting $file_name into database";
                    }
                  } else {
                    $errors[] = "Error moving $file_name to directory";
                  }
                }
              }
            }

            if (!empty($uploaded)) {
              echo '<div class="alert alert-success mt-3">File uploaded successfully: ' . implode(', ', $uploaded) . '</div>';
            }
            if (!empty($errors)) {
              echo '<div class="alert alert-danger mt-3">' . implode('<br>', $errors) . '</div>';
            }
          }
        }

        $query_select_images = "SELECT img_id, img_name FROM image";
        $result_select_images = mysqli_query($conn, $query_select_images);

        if ($result_select_images && mysqli_num_rows($result_select_images) > 0) {
          echo '<div class="row mt-4">';
          while ($row = mysqli_fetch_assoc($result_select_images)) {
            $img_id = htmlspecialchars($row['img_id']);
            $img_name = htmlspecialchars($row['img_name']);
            $img_path = 'images/' . $img_name;

            echo '<div class="col-md-4 mb-3">';
            echo '<div class="card">';
            echo '<img src="' . $img_path . '" class="card-img-top" alt="' . $img_name . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $img_name . '</h5>';
            echo '<form method="post">';
            echo '<input type="hidden" name="img_id" value="' . $img_id . '">';
            echo '<button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
          echo '</div>';
        } else {
          echo "<p>No images found.</p>";
        }

        if (isset($_POST['delete'])) {
          $img_id = $_POST['img_id'];

          $query_select_img = "SELECT img_name FROM image WHERE img_id = ?";
          $stmt = mysqli_prepare($conn, $query_select_img);
          mysqli_stmt_bind_param($stmt, "i", $img_id);
          mysqli_stmt_execute($stmt);
          $result_select_img = mysqli_stmt_get_result($stmt);

          if ($result_select_img && mysqli_num_rows($result_select_img) > 0) {
            $row = mysqli_fetch_assoc($result_select_img);
            $img_path = 'images/' . $row['img_name'];

            if (file_exists($img_path)) {
              unlink($img_path);
            }

            $query_delete_img = "DELETE FROM image WHERE img_id = ?";
            $stmt = mysqli_prepare($conn, $query_delete_img);
            mysqli_stmt_bind_param($stmt, "i", $img_id);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
              echo "<div class='alert alert-success mt-3'>Image deleted successfully.</div>";
            } else {
              echo "<div class='alert alert-danger mt-3'>Error deleting image record from database.</div>";
            }
          } else {
            echo "<div class='alert alert-danger mt-3'>Image not found or invalid ID.</div>";
          }
        }
        ?>
      </div>

                  <!-- CONTACT TAB -->
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <!-- Contact Form -->
        <section id="contact"></section>
       <!-- Display Contact Messages -->
       <h3 class="mt-4">Contact Messages</h3>
          <?php
          // Fetch existing contact data
          include 'connection.php';
          $select_query = "SELECT id, First_name, Last_name, Email, Comments FROM contact";
          $result = mysqli_query($conn, $select_query);

          if ($result && mysqli_num_rows($result) > 0) {
            echo "<table class='contact-table'>";
            echo "<tr>
                    <th>id</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Comments</th>
                  </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($row['id']) . "</td>";
              echo "<td>" . htmlspecialchars($row['First_name']) . "</td>";
              echo "<td>" . htmlspecialchars($row['Last_name']) . "</td>";
              echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
              echo "<td>" . htmlspecialchars($row['Comments']) . "</td>";
              echo "</tr>";
            }
            echo "</table>";
          } else {
            echo "<p>No contact messages found.</p>";
          }
          mysqli_close($conn);
          ?>
        </section>
      </div>
      <!-- END CONTACT TAB CONTENT -->
      </div>
       <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
        <h3>Add New Service</h3>
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="serviceName" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="serviceName" name="service_name" required>
          </div>
          <div class="mb-3">
            <label for="serviceDescription" class="form-label">Service Description</label>
            <textarea class="form-control" id="serviceDescription" name="service_description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="serviceIcon" class="form-label">Service Icon (SVG file)</label>
            <input type="file" class="form-control" id="serviceIcon" name="service_icon" accept=".svg" required>
          </div>
          <button type="submit" class="btn btn-primary" name="add_service">Submit</button>
        </form>
        <?php
        if (isset($_POST['add_service'])) {
          $service_name = mysqli_real_escape_string($conn, $_POST['service_name']);
          $service_description = mysqli_real_escape_string($conn, $_POST['service_description']);
          $target_dir = "images/icons/";
          $target_file = $target_dir . basename($_FILES["service_icon"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

          if($imageFileType != "svg") {
            echo '<div class="alert alert-danger mt-3">Only SVG files are allowed.</div>';
            $uploadOk = 0;
          }

          if ($uploadOk == 1 && move_uploaded_file($_FILES["service_icon"]["tmp_name"], $target_file)) {
            $query_service = "INSERT INTO services (name, description, icon) VALUES ('$service_name', '$service_description', '$target_file')";
            $result_service = mysqli_query($conn, $query_service);

            if ($result_service) {
              echo '<div class="alert alert-success mt-3">Service added successfully.</div>';
            } else {
              echo '<div class="alert alert-danger mt-3">Error adding service.</div>';
            }
          }
        }
        ?>
      </div> 
    </div>
    <div class="logout-container mt-4">
      <form action="logout.php" method="post">
        <button type="submit" class="btn btn-danger" name="submit">Logout</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>

</html>
