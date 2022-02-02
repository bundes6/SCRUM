<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- JavaScript -->
    
    <script src="script/script.js"></script>

    <!-- Fonts -->
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Abril+Fatface"
    />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet" type="text/css"> 
    <title>Hako - Webshop</title>
  </head>

  <body>
    <!-- Navbar Component -->
    
    <nav class="navbar navbar-expand-sm navbar-light bg-light" id="top">
      <a class="navbar-brand" href="index.html"
        >
        <img src="img/logo.png " class="logoimg my-0">
        
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item text-secondary">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Webshop <span class="sr-only">(current)</span></a
            >
          </li>

          <li class="nav-item">
            <a class="nav-link text-secondary" href="workshop.php">Workshop</a>
          </li>
        </ul>
      </div>
    </nav>
    
    

    <!-- Container -->
    <div class="container">

      <!-- Selected Item -->
      <div class="row justify-content-center shopItem my-4  rounded collapse" id="demo">
        <div class="col-12 text-center">
          <img src="img/logo.png " class="logoimg my-0">
        </div>
        <div class="col rounded py-3 my-3" id="shoptop">
          <!-- <i class="far fa-times-circle" onclick="hideItem()" class="float-right"></i> 
           -->
           
           <button type="button" class="close" onclick="hideItem()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="row justify-content-center align-content-center">
            <div class="col-10 col-md-5 align-center text-center">
              <img class="img-sizer2 rounded" id="shopItemTop" src="">
            </div>
            <div class="col-10 col-md-5">
              <div class="row justify-content-center flex-column">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link text-success" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Product
                        </button>
                      </h5>
                    </div>
                
                    <div id="collapseOne" class="collapse show my-4 text-success" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p id="productTxt"></p>
                        <p id="productTxt1"></p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Materials
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        Information
                      </div>
                    </div>
                  </div>
                  <!-- <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Collapsible Group Item #3
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- <div class="col-9 text-success text-center">
                  <ul class="list-unstyled">
                    <li>Handmade</li>
                    <li>$43,23</li>
                  </ul>
                </div>
              -->
              
              <div class="row mb-auto  justify-content-center">
                <div class="col-12 text-center align-text-bottom mb-auto">

                  <input type="button" class="btn btn-success" href="#" value="Buy Now" id="shop-btn1" onclick="showItem(this.id)">
                  <input type="button" class="btn btn-info" href="#" value="Add to Cart" onclick="disableBtn()">
                  
                </div>
              </div>
                
                
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <hr>  
      <!-- Filter -->
      <div class="row justify-content-start my-3">
        <div class="col-3 col-md-2">
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" data-toggle="collapse"
            data-target="#collapseJewellery"
            aria-expanded="false"
            aria-controls="collapseJewellery" >
            <label class="form-check-label" for="flexCheckChecked">
              Jewellery
            </label>
          </div>
        </div>
        <div class="col-3 col-md-2">
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" data-toggle="collapse"
            data-target="#collapseTshirt"
            aria-expanded="false"
            aria-controls="collapseTshirt" >
            <label class="form-check-label" for="flexCheckChecked">
              T-Shirts
            </label>
          </div>
        </div> 
      </div>
      
      <hr>  
      
      

      <!-- <div class="btn-group my-2" role="group" aria-label="Basic example">
        <button
          class="btn btn-success"
          type="button"
          data-toggle="collapse"
          data-target="#collapseJewellery"
          aria-expanded="false"
          aria-controls="collapseJewellery"
        >
          T-Shirts
        </button>

        <button
          class="btn btn-success"
          type="button"
          data-toggle="collapse"
          data-target="#collapseTshirt"
          aria-expanded="false"
          aria-controls="collapseTshirt"
        >
          Jewellery
        </button>
      </div> -->

      <!-- Products Row 1 -->


      <div class="row justify-content-center mb-5">
        <div class="col-6 col-md-3 my-2" id="collapseJewellery">
          <div class="card">
            <img src="img/1.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Black n Blue</h5>
              <p class="card-text">$13.24</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn1" onclick="showItem(this.id)">
              </a>
              
              <!-- <input type="button" value="Add" onclick="getVal(this.value)"> -->
            </div>
          </div>
        </div>

        <div class="col-6 col-md-3 my-2" id="collapseJewellery">
          <div class="card">
            <img src="img/2.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Yellow n Brown</h5>
              <p class="card-text">$19.45</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn2" onclick="showItem(this.id)">
              </a>
              
            </div>
          </div>
        </div>

        <div class="col-6 col-md-3 my-2" id="collapseJewellery">
          <div class="card">
            <img src="img/3.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Galaxy Yellow</h5>
              <p class="card-text">$43.21</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn3" onclick="showItem(this.id)">
              </a>
              
            </div>
          </div>
        </div>

        <div class="col-6 col-md-3 my-2" id="collapseJewellery">
          <div class="card">
            <img src="img/4.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Grey Nebula</h5>
              <p class="card-text">$23.21</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn4" onclick="showItem(this.id)">            
              </a>
              
            </div>
          </div>
        </div>


        <!-- ROW 2 -->


        <div class="col-6 col-md-3" id="collapseJewellery">
          <div class="card">
            <img src="img/5.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Just Brown</h5>
              <p class="card-text">$23.43</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn5" onclick="showItem(this.id)">
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3" id="collapseJewellery">
          <div class="card">
            <img src="img/6.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Mahogany</h5>
              <p class="card-text">$25.21</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn6" onclick="showItem(this.id)">
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3" id="collapseJewellery">
          <div class="card">
            <img src="img/7.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Wambo</h5>
              <p class="card-text">$21.34</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn7" onclick="showItem(this.id)">
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3" id="collapseJewellery">
          <div class="card">
            <img src="img/8.jpg" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">Black Holes</h5>
              <p class="card-text">$43.12</p>
              <a href="#top">
                <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn8" onclick="showItem(this.id)">
              </a>
              
            </div>
          </div>
      </div>


      <!-- ROW 3 -->


      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/9.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Sleeky</h5>
            <p class="card-text">$32.52</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn9" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/10.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Lassi</h5>
            <p class="card-text">$51.23</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn10" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/11.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Hako</h5>
            <p class="card-text">$31.21</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn11" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/12.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Jansen</h5>
            <p class="card-text">$19.08</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn12" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>


      <!-- ROW 4 -->


      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/13.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Swineflu</h5>
            <p class="card-text">$21.50</p>
            <a href="#demo">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn13" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/14.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Ocean Stone</h5>
            <p class="card-text">$23.39</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn14" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/15.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Ocean Stone v2 </h5>
            <p class="card-text">$29.00</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn15" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/16.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Gluticosa</h5>
            <p class="card-text">$12.20</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn16" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>


      <!-- ROW 5 -->


      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/17.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Salix</h5>
            <p class="card-text">$24.00</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn17" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/18.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Summer Breeze</h5>
            <p class="card-text">$31.55</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn18" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/19.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Jatsoch</h5>
            <p class="card-text">$26.99</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#" value="Shop Now" id="shop-btn19" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/20.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Quercus</h5>
            <p class="card-text">$21.99</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#demo" value="Shop Now" id="shop-btn20" onclick="showItem(this.id)">
            </a>
          </div>
        </div>
      </div>


      <!-- ROW 6 -->


      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/21.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Ginkgo</h5>
            <p class="card-text">$31.99</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#demo" value="Shop Now" id="shop-btn21" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/22.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Black Switch</h5>
            <p class="card-text">$32.25</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#demo" value="Shop Now" id="shop-btn22" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/23.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Sweet Nectar</h5>
            <p class="card-text">$23.99</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#demo" value="Shop Now" id="shop-btn23" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3" id="collapseJewellery">
        <div class="card">
          <img src="img/24.jpg" class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title">Aesculus</h5>
            <p class="card-text">$25.99</p>
            <a href="#top">
              <input type="button" class="btn btn-success" href="#demo" value="Shop Now" id="shop-btn24" onclick="showItem(this.id)">
            </a>
            
          </div>
        </div>
      </div>


      <!-- ROW 7 -->
  

      <div class="col-6 col-md-3" id="collapseTshirt">
        <div class="card">
          <img src="img/tshirts/3.jpg" class="card-img-top"/>
          <div class="card-body align-items-center justify-content-center">
            <h5 class="card-title">Motivation</h5>
            <p class="card-text">$54.99</p>
            <p class="card-text"></p>
            <a href="#" class="btn btn-success">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3" id="collapseTshirt">
        <div class="card">
          <img src="img/tshirts/7.webp" class="card-img-top"/>
          <div class="card-body align-items-center justify-content-center">
            <h5 class="card-title">Hentai</h5>
            <p class="card-text">$55.99</p>
            <a href="#" class="btn btn-success">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3" id="collapseTshirt">
        <div class="card">
          <img src="img/tshirts/8.jpg" class="card-img-top"/>
          <div class="card-body align-items-center justify-content-center">
            <h5 class="card-title">Feelings</h5>
            <p class="card-text">$41.99</p>
            <a href="#" class="btn btn-success">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3" id="collapseTshirt">
        <div class="card">
          <img src="img/tshirts/4.jpg" class="card-img-top"/>
          <div class="card-body align-items-center justify-content-center">
            <h5 class="card-title">Warrior Heart</h5>
            <p class="card-text">$60.99</p>
            <a href="#" class="btn btn-success">Shop Now</a>
          </div>
        </div>
      </div>
      

      <!-- ROW 8 -->


      <div class="col-6 col-md-3" id="collapseTshirt">
        <div class="card">
          <img src="img/tshirts/5.jpg" class="card-img-top webshopitem"/>
          <div class="card-body align-items-center justify-content-center">
            <h5 class="card-title">Island Boys</h5>
            <p class="card-text">$24.99</p>
            <a href="#" class="btn btn-success">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3" id="collapseTshirt">
        <div class="card">
          <img src="img/tshirts/6.webp" class="card-img-top webshopitem"/>
          <div class="card-body align-items-center justify-content-center">
            <h5 class="card-title">Evil Twins</h5>
            <p class="card-text">$26.99</p>
            <a href="#" class="btn btn-success">Shop Now</a>
          </div>
        </div>
      </div>
    </div>     
    <hr>
         </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

   
      <div class="container text-center text-md-left">
    
        
        <div class="row justify-content-center" >
    
          <!-- Footer Nav -->
            <div class="col-12 col-md-3">
              <h5 class="font-weight-bold text-uppercase mb-4 text-center text-md-right" id="logotxt">Hako</h5>
            
            <ul class="list-unstyled text-center text-md-right">
              <li>
                <p>
                  <a href="#">Home</a>
                </p>
              </li>
              <li>
                <p>
                  <a href="webshop.html">Webshop</a>
                </p>
              </li>
              <li>
                <p>
                  <a href="workshop.html">Workshops</a>
                </p>
              </li>
              <!-- Big screen icons -->
              
            </ul>
          </div>    
          
              
            
            
            <!-- col 2 -->
            <div class="col-12 col-md-6 justify-content-center  text-center" id="foottext">
  
                <h5 class="font-weight-bold text-uppercase mb-4 text-center">The Artist</h5>
                <p class="text-center">Saskia is geboren en getogen in Suriname, Paramaribo. Voortgekomen uit creatieve Sranan roots, heeft ze er werk van gemaakt om haar veelzijdige talenten te cultiveren. Aan de basis hiervan staan voornamelijk twee van haar passies, natuur en culturele connectie. Dit is terug te vinden is in vele van haar creaties. In haar ambachtelijk vervaardigde sieraden verwerkt ze voornamelijk “natuur steen” ofwel de bekende zogeheten semi edelstenen,kralen van hardhout, cocos, schelpen, koraal, glas en waar nodig kunstmateriaal. De mooiste creaties komen tot stand door elementen van verschillende culturen bijeen te brengen. </p>
            <img id="artist" class="img-sizer1 rounded-circle center pb-4 " src="img/artist.png">
  
            </div>
  
            <!-- col 3 -->
  
            <div class="col-12 col-md-3">
              <h5 class="font-weight-bold text-uppe rcase mb-4">Contact</h5>
              <ul class="list-unstyled">
                <li>
                  <p>
                    <i class="fas fa-home mr-3"></i> Amsterdam, 1011 CD, &#127475&#127473</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-envelope mr-3"></i> noreply@hako.com</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-phone mr-3"></i> + 31 6 4823 2432</p>
                </li>
                <li id="footnav22">
                  <a class="btn-floating btn-fb mx-1" href="#">
                    <i class="fab footicon fa-facebook text-success h1"></i>
                  </a>
              </li>
              <li id="footnav22">
                  <a class="btn-floating mx-1" href="#">
                    <i class="fab footicon fa-whatsapp text-success h1"></i>
                  </a>
              </li>
              <li id="footnav22">
                  <a class="btn-floating btn-instagram mx-1" href="#">
                    <i class="fab footicon fa-instagram text-success h1"> </i>
                  </a>
              </li>
              <li id="footnav22">
                  <a class="btn-floating btn-li mx-1" href="#">
                    <i class="fab footicon fa-linkedin-in text-success h1"> </i>
                  </a>
              </li>
              
                
              </ul>
            </div>
            <hr>
    
          </div>
          
          
            
            <!-- Email Form -->
            <div class="row justify-content-center">
              
              <div class="col-8 col-md-5">
                <form class="text-center">
                  <div id="email" class="form-group">
                      <label for="exampleInputEmail1">Sign-up for our newsletter</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        
                     </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div> 
            </div>
      
  
              
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="https://mdbootstrap.com/"> Hako</a>
      </div>
      </div>
    
    </footer>
    <!-- Bootstrap's JavaScript Files -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
