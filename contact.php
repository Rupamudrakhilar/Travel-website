<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php include('screen/navbar.php') ?>


  <main>
    <header>
    <img class="image" src="image/contact-img (1).jpg" alt="">
      <div class="container">
        <div class="row">
         
        </div>
      </div>
    </header>
    <section id="contact_page">
      <div class="container">
        <div class="form-container">
          <div class="left-container">
            <div class="left-inner-container">
              <h2>Thank you</h2>
              <p>Thanks for everything! You've been a fantastic travel agent, so knowledgeable, easy to deal with and thoughtful. Thanks for the help in planning all of our trips – you've made it so much fun and we have loved every minute. Thank you for your recommendations and help in planning my trips.</p>
              <div class="social_container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="social"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>



          <div class="right-container">
            <div class="right-inner-container">
              <form action="#">
                <h2 class="lg-view">Contact</h2>
                <h2 class="sm-view">Let's Chat</h2>
        
                <input type="text" placeholder="Name *" />
                <input type="email" placeholder="Email *" />
               
                <input type="phone" placeholder="Phone" />
                <textarea rows="4" placeholder="Message"></textarea>
                <button>Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include('screen/footer.php') ?>

</body>

</html>