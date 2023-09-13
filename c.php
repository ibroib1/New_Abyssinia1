<?php
?>
<html>
<head>
  <title> E-commerce </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: lightgray;
    }
    h1 {
      text-align: center;
      color: white;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
    }
    .section {
      margin-bottom: 20px;
    }
    .products {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }
    .product {
      border: 1px solid gray;
      padding: 10px;
    }
    .product img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .product h3 {
      font-size: 18px;
      margin-top: 10px;
    }
    .product p {
      font-size: 16px;
      color: green;
    }
    .product button {
      background-color: blue;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
    }
    .cart {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .cart h2 {
      font-size: 24px;
    }
    .cart button {
      background-color: green;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
    }
    .contact {
      display: flex;
      justify-content: space-around;
    }
    .contact a {
      text-decoration: none;
      color: black;
      font-size: 24px;
    }
    .section contact{
      color: #0000;
      float: left;
    }
  </style>
</head>
<body>
  <h1>E-commerce </h1>
  <div class="container">
    <div class="section products">
      <div class="product">
        <img src="https://th.bing.com/th/id/R.6490f931ff5e4000ea1a47157cb8ad46?rik=71oqtHUddXFMrA&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2fb%2ff%2f5%2f713153-cool-shoes-hd-wallpapers-1920x1200-for-ipad-2.jpg&ehk=R9fQS46xHIQBHiD36%2bOZHeeysacA%2fJKao%2ftPkmLAzDY%3d&risl=&pid=ImgRaw&r=0/300x200" alt="Product 1">
        <h3>Product 1</h3>
        <p>$10.00</p>
        <h4>contact us +25197897698</h4>
      </div>
      <div class="product">
        <img src="https://th.bing.com/th/id/R.2f021b39c808432da17c83d43ee32626?rik=rKDmmzORKcL82g&riu=http%3a%2f%2flh3.ggpht.com%2f-GT_ZPGqKV2E%2fS8lIvC9FCaI%2fAAAAAAACbUI%2fyA6mHnUs10g%2fs800%2fnike-lebron-7-ps-gr-black-white-red-6-02.jpg&ehk=TFb2vqtBoHX7Hl%2fKUxcbGsTXMa8WbTPOWNzFR%2fTn5Yw%3d&risl=&pid=ImgRaw&r=0/300x200" alt="Product 2">
        <h3>Product 2</h3>
        <p>$20.00</p>
        <h4>contact us +25197897698</h4>
      </div>
      <div class="product">
        <img src="https://th.bing.com/th/id/OIP.atXHwOKPQmLyTxMY52IFMgHaK-?w=200&h=297&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 3">
        <h3>Product 3</h3>
        <p>$30.00</p>
        <h4>contact us +25197897698</h4>
      </div>
      <div class="product">
        <img src="https://th.bing.com/th/id/OIP.ex71U5uLBtzPv9Ml_9VslwHaEK?pid=ImgDet&rs=1/300x200" alt="Product 4">
        <h3>Product 4</h3>
        <p>$40.00</p>
        <h4>contact us +25197897698</h4>
      </div>
    </div>
    <div class="container">
      <div class="section products">
        <div class="product">
          <img src="https://th.bing.com/th/id/OIP.xBN3vc05X7gLqtN90ei4RAHaIq?w=163&h=191&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 1">
          <h3>Product 1</h3>
          <p>$10.00</p>
          <h4>contact us +25197897698</h4>
        </div>
        <div class="product">
          <img src="https://th.bing.com/th/id/OIP.AqPb-fiIKYbja1F8R6wdnAHaJG?w=155&h=191&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 2">
          <h3>Product 2</h3>
          <p>$20.00</p>
          <h4>contact us +25197897698</h4>
        </div>
        <div class="product">
          <img src="https://th.bing.com/th/id/OIP.3SODrx4lyMwUV4w26UTuGgHaEG?w=308&h=180&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 3">
          <h3>Product 3</h3>
          <p>$30.00</p>
          <h4>contact us +25197897698</h4>
        </div>
        <div class="product">
          <img src="https://th.bing.com/th/id/OIP.G4AzjAwd6paGKmcST3WGqAHaHa?w=185&h=185&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 4">
          <h3>Product 4</h3>
          <p>$40.00</p>
          <h4>contact us +25197897698</h4>
        </div>
      </div>
      <div class="container">
        <div class="section products">
          <div class="product">
            <img src="https://th.bing.com/th/id/OIP.zN06iu1WoiUKJXV1oDTlHAAAAA?w=183&h=122&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 1">
            <h3>Product 1</h3>
            <p>$10.00</p>
            <h4>contact us +25197897698</h4>
          </div>
          <div class="product">
            <img src="https://th.bing.com/th/id/OIP.Nagu2Qa0LheFN5b_AJIApAHaEE?w=325&h=180&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 2">
            <h3>Product 2</h3>
            <p>$20.00</p>
            <h4>contact us +25197897698</h4>
          </div>
          <div class="product">
            <img src="https://th.bing.com/th/id/OIP.IbgIvJzeZeU0vaI7hDejTwHaKr?w=200&h=288&c=7&r=0&o=5&pid=1.7" alt="Product 3">
            <h3>Product 3</h3>
            <p>$30.00</p>
            <h4>contact us +25197897698</h4>
          </div>
          <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Product 4">
            <h3>Product 4</h3>
            <p>$40.00</p>
            <h4>contact us +25197897698</h4>
          </div>
        </div>
        <div class="container">
          <div class="section products">
            <div class="product">
              <img src="data:image/jpeg;base64,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" alt="Product 1">
              <h3>Product 1</h3>
              <p>$10.00</p>
              <h4>contact us +25197897698</h4>
            </div>
            <div class="product">
              <img src="data:image/jpeg;base64,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" alt="Product 2">
              <h3>Product 2</h3>
              <p>$20.00</p>
              <h4>contact us +25197897698</h4>
            </div>
            <div class="product">
              <img src="https://th.bing.com/th/id/OIP.q9fH3r7EKiTrLFYZBWLCAwAAAA?w=200&h=285&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 3">
              <h3>Product 3</h3>
              <p>$30.00</p>
              <h4>contact us +25197897698</h4>
            </div>
            <div class="product">
              <img src="https://th.bing.com/th/id/OIP.IbgIvJzeZeU0vaI7hDejTwHaKr?w=200&h=288&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 4">
              <h3>Product 4</h3>
              <p>$40.00</p>
              <h4>contact us +25197897698</h4>
            </div>
          </div>
          <div class="container">
            <div class="section products">
              <div class="product">
                <img src="https://th.bing.com/th/id/OIP.d5mRKgMUJ0IFT7iQgzppLwHaIO?w=200&h=222&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 1">
                <h3>Product 1</h3>
                <p>$10.00</p>
                <h4>contact us +25197897698</h4>
              </div>
              <div class="product">
                <img src="https://th.bing.com/th/id/OIP.IbgIvJzeZeU0vaI7hDejTwHaKr?w=200&h=288&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 3">
                <h3>Product 2</h3>
                <p>$20.00</p>
                <h4>contact us +25197897698</h4>
              </div>
              <div class="product">
                <img src="https://th.bing.com/th/id/OIP.IbgIvJzeZeU0vaI7hDejTwHaKr?w=200&h=288&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 3">
                <h3>Product 3</h3>
                <p>$30.00</p>
                <h4>contact us +25197897698</h4>
              </div>
              <div class="product">
                <img src= https://th.bing.com/th/id/OIP.KMGAmQKA0MYxI0Rfs6YCzgHaHa?w=200&h=200&c=7&r=0&o=5&pid=1.7/300x200" alt="Product 4">
                <h3>Product 4</h3>
                <p>$40.00</p>
                <h4>contact us +25197897698</h4>
              </div>
            
            
                
                
   
    <div class="section contact" >
          <h2>Contact Us</h2><br>



     <h3>@ibroib1  </h3>
     </div>
     </div>
    </div>
  </div>
  
  <!-- You need to include Font Awesome icons for the contact links -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>