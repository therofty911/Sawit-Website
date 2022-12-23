<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <title>Palm Oil</title>
</head>
<style>
  .whatsapp_float {
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow: 2px 2px 3px #999;
    z-index:100;
  }

  .whatsapp-icon {
    margin-top:16px;
  }


  /* FOOTER */
  footer{
    width:100%;
    background-color:var(--tomato);
    color:#fff;
    }
    
  footer .title{
    padding-top: 10px;
    font-size: 2.5em;
  }

  .top_header{
  padding:2rem;
  display:flex;
  align-items:center;
  justify-content:center;
  position:relative;
  }
  
  .top_header section{
  display:flex;
  align-items:center;
  justify-content:center;
  width:100%;
  }

  .top_header section a{
    color:var(--white);
    text-decoration:none;
    border-bottom: 3px solid transparent;
    transition: 0.5s;

  }
  .top_header section a:hover{
    color: var(--white);
    border-bottom: 3px solid var(--white);

  }
  .top_header section a.active{
    border-bottom: 3px solid var(--white);

  }
  
  .top_header span{
  padding:0 1rem;
  }
  
  .top_header .fa{
  color:var(--white);
  font-size:35px;
  }
  
  footer .border-shape {
  width: 40%;
  }
  
  footer .border-shape::before {
  width: 100%;
  left:120px;
  }
  
  footer .border-shape::after {
  width: 100%;
  right:120px;
  }
  
  footer .bottom_content section{
  padding:1.5rem 2rem;
  display:flex;
  align-items:center;
  justify-content:Center;
  }
  
  .bottom_content a{
  margin:0 20px;
  color:rgba(255,255,255,0.7);
  text-decoration: none;
  border-bottom: 3px solid transparent;
  transition: 0.5s;
  }
  
  .bottom_content a:hover{
    color: var(--white);
    border-bottom: 3px solid var(--white);
  }
  
  .bottom_content a.active{
    border-bottom: 3px solid var(--tomato);
  }
  
  .copyright{
      width:100%;
  padding:0.8em 0;
  background-color:var(--tomatolow);
  text-align:center;
  color:var(--white);
  font-size:.9em;
  }
  @media (max-width:820px){
    .top_header{
      padding:1rem;
      display:block;
    }
    
    .top_header section{
      margin:40px 0;
      align-items:left;
      justify-content:left;
    }
    footer .bottom_content section{
      padding:1rem;
      display:block;
    }
    footer .bottom_content section a{
      padding:1rem;
      font-size:12px;
      margin:0 5px;
      display:inline-block;
    }
  }

  @media screen and (max-width: 767px){
      .whatsapp-icon {
    margin-top:10px;
      }
      .whatsapp_float {
          width: 40px;
          height: 40px;
          bottom: 20px;
          right: 10px;
          font-size: 22px;
      }
  }
</style>
<body>
  
  <nav>
    <div class="logo">
      <h2>Palm Oil<span>.</span></h2>
    </div>

    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#product">Product</a></li>
      <li><a href="#teams">Teams</a></li>
      <li><a href="#contact">Contacts</a></li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" name="" id="">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <section class="landing">
    <!-- <div class="flex-container"></div> -->
    <div class="content content-1">
      <h2>Take My Oil</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, omnis modi. Placeat deleniti debitis quo.</p>
      <a href="#" class="btn">Our Product</a>
    </div>
    <div class="content content-2">
      <img src="./src/1.png" alt="sawit seed">
    </div>
  </section>

  <section class="about" id="about">
    <div class="title">
      <h2 class="textTitle"><span>A</span>bout Us</h2>
    </div>
    <div class="main">
      <img src="src/4.jpg" alt="">
      <div class="about-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nostrum at inventore similique! Voluptatem beatae corporis repudiandae cumque obcaecati? Quisquam in assumenda voluptas dolore veniam reprehenderit ullam alias perferendis porro?</p>
        <br/>
        <br/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem temporibus, neque inventore quaerat totam placeat, quis architecto aperiam, suscipit eaque vero facilis cupiditate recusandae dolorem rerum non harum! Magnam unde eligendi voluptatum dignissimos, sapiente nisi. Beatae tenetur praesentium aut ullam!</p>
      </div>
    </div>
  </section>

  
    

  <section class="product" id="product">
    <div class="title">
      <h2 class="textTitle"><span>O</span>ur Product</h2>
    </div>
    <div class="content" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
      <div class="box">
        <div class="imgBx">
          <img src="./src/1.jpeg" alt="Cangkang">
        </div>
        <div class="text">
          <h3>Palm Kernel Shell</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, molestias.</p>
        </div>
        <div class="title-btn">
          <a href="http://wa.me/6281276973181" class="btn whatsapp"><i class="fa-solid fa-phone"></i> Call Us</a>
          <a href="cangkang.php" class="btn" target="_blank">Read More</a>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="./src/2.jpeg" alt="Bungkil">
        </div>
        <div class="text">
          <h3>Bungkil</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, molestias.</p>
        </div>
        <div class="title-btn">
          <a href="http://wa.me/6281276973181" class="btn whatsapp"><i class="fa-solid fa-phone"></i> Call Us</a>
          <a href="bungkil.php" class="btn" target="_blank">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="teams" id="teams">
    <div class="title">
      <h2 class="textTitle"><span>M</span>y teams</h2>
    </div>
    <div class="baris">
      <!--First User design starts here-->
      <div class="profile-card" data-aos="zoom-in">
        <div class="profile-content">
            <div class="profile-image">
                <img class="p-img" src="src/5.jpg" alt="first user">
            </div>
            <div class="desc">
                <h2>Sunmetecha</h2>
                <p>Lorem ipsum dolor sit amet adipisicing elit. </p>
            </div>
            
        </div>
    </div>
    <!--First user design ends here-->
     <!--second User design starts here-->
     <div class="profile-card" data-aos="zoom-in">
        <div class="profile-content">
            <div class="profile-image">
                <img class="p-img" src="src/5.jpg" alt="first user">
            </div>
            <div class="desc">
                <h2>Sunmetecha</h2>
                <p>Lorem ipsum dolor sit amet adipisicing elit. </p>
            </div>
            
        </div>
    </div>
    <!--second user design ends here-->
     <!--third User design starts here-->
     <div class="profile-card" data-aos="zoom-in">
        <div class="profile-content">
            <div class="profile-image">
                <img class="p-img" src="src/5.jpg" alt="first user">
            </div>
            <div class="desc">
                <h2>Sunmetecha</h2>
                <p>Lorem ipsum dolor sit amet adipisicing elit. </p>
            </div>
            
        </div>
    </div>
    <!--third user design ends here-->
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="title">
      <h2 class="textTitle"><span>C</span>ontact Us</h2>
    </div>
    <div class="contactForm">
      <h3>Send Message</h3>
      <div class="inputBox">
        <input type="text" placeholder="Name">
      </div>
      <div class="inputBox">
        <input type="email" placeholder="Email">
      </div>
      <div class="inputBox">
        <textarea name="text" id="" placeholder="Message"></textarea>
      </div>
      <div class="inputBox">
        <input type="submit" value="send">
      </div>
    </div>
  </section>

  <!-- <footer>
    <div class="footer-flex">
      <div class="container-foot">
        <div class="sec logos">
          <h2>Palm Oil.</h2>
          <img src="src/2.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum aperiam facilis aspernatur tenetur reprehenderit.</p>
        </div>

        <div class="sec quickLinks">
          <h2>Quick Links</h2>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#teams">Teams</a></li>
            <li><a href="#contact">Contacts</a></li>
          </ul>
        </div>
        <div class="sec contacts">
          <h2>Contact Info</h2>
          <ul class="info">
            <li>
              <span><i class="fa-solid fa-location-dot"></i></span>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Voluptate error in totam nesciunt recusandae,<br>
                dignissimos exercitationem dolorem magni ipsum iusto?</span>
            </li>
            <li>
              <span><i class="fa-brands fa-whatsapp"></i></span>
              <p><a href="http://wa.me/6281276973181">+62 812-7697-3181</a></p> 
            </li>
            <li>
              <span><i class="fa-solid fa-envelope"></i></span>
              <p><a href="">aqil@gmail.com</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer> -->
  <footer>
    <div class="title">
      <h2 class="textTitle">Palm Oil.</h2>
    </div>
    <div class="top_header">
      <section>
        <span><i class="fa fa-map-marker"></i></span>
        <span>Street, full address, state/province, country, pincode</span>
      </section>
      <section>
        <span><i class="fa fa-phone"></i></span>
        <span><a href="http://wa.me/6281276973181">+62 812-7697-3181</a></span>
      </section>
      <section>
        <span><i class="fa fa-envelope"></i></span>
        <span><a href="mailto:rulyyanda@gmail.com?subject=NEW ORDERS!!!" target="_blank">aqil@gmail.com</a></span>
      </section>
    </div>
    <span class="border-shape"></span>
    <div class="bottom_content">
      <section>
      <a href="index.php">Home</a>
      <a href="#about">About</a>
      <a href="#product">Product</a>
      <a href="#teams">Teams</a>
      <a href="#contact">Contacts</a>
      </section>
    </div>
    <div class="copyright">
      Copyright <i class="fa-solid fa-copyright"></i> 2022 by Rulyanda Melsya - All rights reserved 
    </div>
  </footer>


  <a href="http://wa.me/6281276973181" class="whatsapp_float" target="_blank"> <i class="fa-brands fa-whatsapp whatsapp-icon"></i></a>

  

<script type="text/javascript" src="js/script.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>