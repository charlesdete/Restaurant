<!DOCTYPE html>
<html>
    <head>
        <title>
            RESTAURANTS
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
    </head>
    <body>
  
  <div class="wrapper">
     
          <div class="search">
          <input type="text" placeholder="Enter restaurant name" spellcheck="false">
          <button ><img src="images/search.png" onclick="fetchData()">  </button>
          </div>
    
        <div class="ard">
            <div class="ard-info">
        <h2>THE BEST RESTAURANTS</h2>
         <div class="thumbnail">
            <img src="images/hotel2.jpeg">
            </div>
        </div>
         
    
             <div class="hotel-info">
                 <h1 class="name">Hotel Name</h1>
                <h2 class="city">City</h2>
            </div>
          <div class="hotel">
              <div class="hotel-rec">
                <div class="hotel-recon">
              <i class="uis uis-star checked "></i>
              <i class="uis uis-star checked "></i>
              <i class="uis uis-star checked "></i>
              <i class="uis uis-star checked "></i>
              <i class="uis uis-star checked"></i>
              </div>
             <!-- <h1 class="recommendations">RATING:4.4</h1> -->
             
               <img src="images/breakfast1.jpeg">
           </div>
            </div>
          </div>
       </div>
       

 
    
<script >
 

    function fetchData(restaurantName){
      
   const response = {
  "error": false,
  "message": "success",
  "count": 20,
  "restaurants": [
      {
          "id": "rqdv5juczeskfw1e867",
          "name": "Melting Pot",
          "description": "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ...",
          "pictureId": "14",
          "city": "Medan",
          "rating": 3
      },
      {
          "id": "s1knt6za9kkfw1e867",
          "name": "Kafe Kita",
          "description": "Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. ...",
          "pictureId": "25",
          "city": "Gorontalo",
          "rating": 4
      },
      {
          "id": "1",
          "name": "Serena",
          "description": "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ...",
          "pictureId": "17",
          "city": "Nairobi",
          "rating": 2
      },
      {
          "id": "2",
          "name": "Sarova sands",
          "description": "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. ...",
          "pictureId": "20",
          "city": "Mombasa",
          "rating": 5
      }

  ]
}


    // Find the restaurant in the response that matches the search query
    const restaurant = response.restaurants.find(r => r.name.toLowerCase() === restaurantName.toLowerCase());

    // If the restaurant exists, display its details
    if (restaurant) {
        document.querySelector(".name").innerHTML = restaurant.name;
        document.querySelector(".city").innerHTML = restaurant.city;

        
    

        // Change the color of the stars based on the rating
            const checkedElements = document.querySelectorAll(".checked");
            const rating = restaurant.rating;

            if (rating <= checkedElements.length) {
                for (let i = 0; i < rating; i++) {
                    checkedElements[i].style.color = "#f59b1e"; // Set to orange
                    console.log('color changed');
                }
            } else {
                console.error('Rating exceeds the number of elements');
            }
 
    }
     else {
        document.querySelector(".name").innerHTML = "Restaurant not found";
        document.querySelector(".city").innerHTML = "";
        document.querySelector(".recommendations").innerHTML = "";
        
    }
    
}

// Event listener for the search button
document.querySelector(".search button").addEventListener("click", () => {
    const searchBox = document.querySelector(".search input");
    fetchData(searchBox.value);
});
        //   fetchData(restaurant);

	

           
          
          
        
</script>



</body>
</html>