<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="images/DOLE_picture.ico" type="image/x-icon">

  <!-- Bootstrap CSS -->
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-body">

  <div class="h-screen bg-cover bg-center relative bg-no-repeat justify-content-center align-items-center" style="background-image: url(https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/bansilang-mountain-range-misamis-oriental-philippines-jay-decenella.jpg);">
    <div class="items-center justify-center align-content-center p-4 bg-transparent h-full w-full sm:w-">
      <div class="h-full w-full flex justify-center align-center sm:min-w-[460px]">
        <div class=" bg-black/40 backdrop-blur-3xl lg:max-w-[480px] z-10 p-6 flex w-full h-full border-t-4 border-blue-600 rounded-lg">
          <div class="flex flex-col h-full gap-4">
          <div class="d-flex align-items-center justify-content-center mt-4"> 
            <img src="{{ asset('images/DOLE_picture.png') }}" alt="DOLE Logo" style="height: 60px; margin-right: 10px;">
            <div class="text-center">
                <h6 class="mb-0 text-white" style="font-size: 14px;">Department of Labor and Employment-X</h6>
                <h6 class="mb-0 text-white" style="font-size: 14px;">Northern Mindanao</h6>
                <h6 class="mb-0 text-white" style="font-size: 14px;">Misamis Oriental Field Office</h6>
            </div>
        </div>
            <div class="my-auto">
              <!-- title-->
              <h4 class="text-white text-2xl font-semibold mb-2">Log In</h4>
              <p class="text-gray-100 mb-9">Enter your email address and password to access account.</p>

              <!-- form -->
              <form action="#">
                <div class="mb-4">
                  <label for="emailaddress" class="block text-base/normal font-semibold text-gray-200 mb-2">Email address</label>
                  <input class="block w-full rounded py-1.5 px-3 bg-transparent border-white/10 text-white/80 focus:border-white/25 focus:outline-0 focus:ring-0" type="email" id="emailaddress" required="" placeholder="Enter your email">
                </div>
                <!-- end email input -->
                <div class="mb-4">
                  <label for="password" class="block text-base/normal font-semibold text-gray-200 mb-2">Password</label>
                  <input class="block w-full rounded py-1.5 px-3 bg-transparent border-white/10 text-white/80 focus:border-white/25 focus:outline-0 focus:ring-0" type="password" required="" id="password" placeholder="Enter your password">
                </div>
                
                <div class="mb-6 text-center">
                  <a href="#" class="w-full inline-flex items-center justify-center px-6 py-2 backdrop-blur-2xl bg-white/20 text-white rounded-lg transition-all duration-500 group hover:bg-blue-600/60 hover:text-white mt-5" type="submit">Log In </a>
                </div>
                <!-- social-->
                
              </form>
              <!-- end form-->
            </div>

           
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>


