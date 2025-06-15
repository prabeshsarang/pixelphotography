<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Styled Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  /* Base Styling */
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
  }

  /* Navigation Bar */
  nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background:rgb(9, 5, 87);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    transition: background 0.3s;
  }

  nav:hover {
    background:rgb(5, 6, 100);
  }

  nav ul {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    margin: 0;
    list-style: none;
  }

  nav ul li {
    margin: 0 20px;
  }

  nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    font-size: 1.1rem;
    padding: 20px 0;
    display: block;
    transition: color 0.3s;
  }

  nav ul li a:hover {
    color: #222;
  }

  main {
    padding-top: 80px;
  }
/* Welcome Section */
#welcome {
  background: url('images/welcome-bg.jpg') center/cover no-repeat;
  position: relative;
  height: 100vh;
  text-align: center;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

#welcome .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.55);
  z-index: 1;
}

#welcome .content {
  position: relative;
  z-index: 2;
  max-width: 900px;
  margin: auto;
}

#welcome h1 {
  font-size: 3.5rem;
  margin-bottom: 20px;
  letter-spacing: 2px;
  font-weight: bold;
}

#welcome p {
  font-size: 1.4rem;
  margin-bottom: 30px;
  line-height: 1.6;
}

#welcome .btn-container .btn {
  display: inline-block;
  margin: 10px;
  padding: 14px 28px;
  background: rgb(3, 7, 125);
  color: #fff;
  font-weight: 600;
  text-decoration: none;
  border-radius: 8px;
  transition: 0.3s ease;
}

#welcome .btn-container .btn:hover {
  background: #fff;
  color: rgb(11, 5, 99);
}

  /* About Section */
  #about {
    background: url('images/your-background.jpg') center/cover no-repeat;
    position: relative;
    padding: 150px 20px;
    text-align: center;
    color: #fff;
  }

  #about .overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
  }

  #about .content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: auto;
  }

  #about h2 {
    font-size: 3rem;
    margin-bottom: 20px;
    letter-spacing: 1.5px;
  }

  #about p {
    font-size: 1.2rem;
    line-height: 1.7;
  }

  #about .btn-container .btn {
    display: inline-block;
    margin: 10px;
    padding: 14px 26px;
    background:rgb(3, 7, 125);
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s ease;
  }

  #about .btn-container .btn:hover {
    background: #fff;
    color:rgb(11, 5, 99);
  }
/* Photography Section */
#photography {
  background: url('images/photography-bg.jpg') center/cover no-repeat;
  position: relative;
  padding: 150px 20px;
  text-align: center;
  color: #fff;
}

#photography .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.55);
  z-index: 1;
}

#photography .content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  margin: auto;
}

#photography h2 {
  font-size: 3rem;
  margin-bottom: 20px;
  letter-spacing: 1.5px;
}

#photography p {
  font-size: 1.2rem;
  line-height: 1.7;
}

#photography .btn-container .btn {
  display: inline-block;
  margin: 10px;
  padding: 14px 26px;
  background: rgb(3, 7, 125);
  color: #fff;
  font-weight: 600;
  text-decoration: none;
  border-radius: 8px;
  transition: 0.3s ease;
}

#photography .btn-container .btn:hover {
  background: #fff;
  color: rgb(11, 5, 99);
}

  /* Services Section */
  #services {
    background-color: #f4f4f4;
    padding: 80px 20px;
    text-align: center;
  }

  #services h2 {
    font-size: 2.5rem;
    margin-bottom: 40px;
    text-transform: uppercase;
  }

  .service-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    max-width: 1200px;
    margin: auto;
  }

  .service-card {
    background: #fff;
    padding: 30px;
    flex: 1 1 300px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
  }

  .service-card:hover {
    transform: translateY(-5px);
  }

  .service-card h3 {
    font-size: 1.4rem;
    text-transform: uppercase;
    color: #222;
    margin-bottom: 15px;
  }

  .service-card p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
  }

  /* Portfolio Section */
  #portfolio {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('background.jpg') center/cover no-repeat;
    padding: 100px 20px;
    color: #fff;
    text-align: center;
  }

  .divider {
    width: 60px;
    height: 4px;
    background:rgb(16, 5, 96);
    margin: 15px auto;
    border-radius: 2px;
  }

  .gallery-menu {
    margin-bottom: 35px;
  }

  .gallery-menu .btn {
    padding: 14px 22px;
    border: none;
    margin: 10px;
    background:rgb(34, 0, 255);
    color: #fff;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: 0.3s ease-in-out;
  }

  .gallery-menu .btn:hover,
  .gallery-menu .btn.active {
    background: #fff;
    color:rgb(3, 9, 92);
    transform: scale(1.05);
  }

  .gallery-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
  }

  .image-container {
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
  }

  .image-container img {
    width: 100%;
    display: block;
    border-radius: 15px;
    transition: 0.3s ease-in-out;
  }

  .image-container:hover img {
    transform: scale(1.1);
    filter: brightness(90%);
  }

  .image-container:hover {
    transform: translateY(-5px);
  }

  /* Contact Section */
  #contact {
    background: #222;
    padding: 100px 20px;
    color: #fff;
    text-align: center;
  }

  #contact form {
    max-width: 600px;
    margin: auto;
    background: #333;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
  }

  #contact input,
  #contact textarea {
    width: 100%;
    padding: 14px;
    margin: 12px 0;
    border: none;
    border-radius: 8px;
    background: #444;
    color: #fff;
    font-size: 1rem;
  }

  #contact button {
    padding: 14px 26px;
    background:rgb(0, 4, 255);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 1.1rem;
    transition: 0.3s ease;
  }

  #contact button:hover {
    background: #fff;
    color:rgb(5, 15, 88);
    transform: scale(1.08);
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .service-container {
      flex-direction: column;
    }

    nav ul li {
      margin: 0 10px;
    }

    #about h2 {
      font-size: 2.2rem;
    }

    .gallery-menu .btn {
      padding: 12px 18px;
    }
  }
</style>

<body>
    <header>
        <h1>Welcome to Pixel Photography</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Gallery</a></li>
            <li><a href="#contact,php">Contact</a></li>
        </ul>
    </nav>
    <main>
<!-- WELCOME SECTION -->
<section id="welcome">
  <div class="overlay"></div>
  <div class="content">
    <h1>Welcome to Pixel Photography</h1>
    <p>Capturing moments. Creating memories. One frame at a time.</p>
    <div class="btn-container">
      <a href="#about" class="btn">Learn More</a>
      <a href="#photography" class="btn">View Portfolio</a>
    </div>
  </div>
</section>
<!-- ABOUT US SECTION -->
<section id="about">
  <div class="overlay"></div>
  <div class="content">
    <h2>About Us</h2>
    <p>
    <?php
      include 'connection.php';
      $query = "SELECT Description FROM home";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $description = $row['Description'];
      } else {
          $description = "Default description"; // Provide a default if no description is found
      }
      mysqli_close($conn);
      echo $description;
    ?>
    </p>
    <div class="btn-container">
      <a href="#" class="btn">Choose Demo</a>
      <a href="#" class="btn">View More Themes</a>
    </div>
  </div>
</section>

<!-- PHOTOGRAPHY SECTION -->
<section id="photography">
  <div class="overlay"></div>
  <div class="content">
    <h2>Barun Sherstha</h2>
    <p>
      Photography is more than just capturing moments—it's about telling a story, evoking emotion, and preserving memories that last a lifetime. At our studio, we specialize in a range of photography styles including portrait, wedding, nature, and commercial shoots. Our mission is to deliver high-quality visuals with artistic flair and technical precision.
    </p>
    <div class="btn-container">
      <a href="#" class="btn">Explore Gallery</a>
      <a href="#" class="btn">Book a Session</a>
    </div>
  </div>
</section>


<!-- SERVICES SECTION -->
<section id="services">
  <h2>Our Services</h2>
  <div class="service-container">
    <div class="service-card">
      <h3>Web Development</h3>
      <p>We build responsive and modern websites.</p>
    </div>
    <div class="service-card">
      <h3>SEO Optimization</h3>
      <p>Boost your website's ranking with our strategies.</p>
    </div>
    <div class="service-card">
      <h3>Digital Marketing</h3>
      <p>Grow your online presence with our marketing solutions.</p>
    </div>
  </div>
</section>

        
        <!-- Begin Portfolio Section -->
        <section id="portfolio" class="page bg-style1">
            <div class="container">
                <div class="page-header text-center">
                    <h2>Gallery</h2>
                    <div class="divider"></div>
                    <p class="subtitle">Some of our latest works</p>
                </div>
                <div class="gallery">
                    <form method="GET" class="gallery-menu">
                        <button type="submit" name="category" value="All" class="btn">All</button>
                        <button type="submit" name="category" value="Portrait" class="btn">Portrait</button>
                        <button type="submit" name="category" value="Nature" class="btn">Nature</button>
                        <button type="submit" name="category" value="Product" class="btn">Product</button>
                        <button type="submit" name="category" value="Wedding" class="btn">Wedding</button>
                    </form>
                    <div class="gallery-content">
                        <?php
                        include 'connection.php';
                        $category = isset($_GET['category']) ? $_GET['category'] : 'All';
                        $query = ($category === 'All') ? "SELECT img_name, category FROM image" : "SELECT img_name, category FROM image WHERE category = ?";
                        if ($stmt = mysqli_prepare($conn, $query)) {
                            if ($category !== 'All') {
                                mysqli_stmt_bind_param($stmt, "s", $category);
                            }
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<div class="image-container">';
                                    echo '<img src="images/' . htmlspecialchars($row['img_name']) . '" alt="Image">';
                                    echo '</div>';
                                }
                            } else {
                                echo '<p>No images found in the database.</p>';
                            }
                        } else {
                            echo '<p>Database query failed.</p>';
                        }
                        mysqli_stmt_close($stmt);
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        
        <section id="contact">
            <h2>Contact Us</h2>
            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // Check if any field is empty
    if (empty($first_name) || empty($last_name) || empty($email) || empty($comments)) {
        echo "Error: All fields are required.";
    } else {
        $query = "INSERT INTO contact (First_name, Last_name, Email, Comments) VALUES ('$first_name', '$last_name', '$email', '$comments')";
        if (mysqli_query($conn, $query)) {
            echo "Thank you for contacting us.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
             <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $query = "INSERT INTO contact (First_name, Last_name, Email, Comments) VALUES ('$first_name', '$last_name', '$email', '$comments')";
    if (mysqli_query($conn, $query)) {
        echo "Thank you for contacting us.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
}
?>
<form action="#" method="post">
<h3 class="contact-heading">Get in touch</h3>
    <div class="form-floating my-3">
        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" aria-label="First name" />
        <label for="first_name">First name</label>
    </div>
    <div class="form-floating my-3">
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name" />
        <label for="last_name">Last name</label>
    </div>
    <div class="form-floating my-3">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" />
        <label for="email">Email address</label>
    </div>
    <div class="form-floating my-3">
        <textarea class="form-control" id="comments" name="comments" placeholder="Comments" rows="3"></textarea>
        <label for="comments">Comments</label>
    </div>
    <br />
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Our Website. All rights reserved.</p>
    </footer>
</body>
</html>