<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DishDirect Buy Your Favorite Foods Online</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../pg/pg.css">

</head>
<body>
  
  <header>
    <div class="logo">
      <img src="../images/dishdirectlogo.png" alt="">
    </div>

    <div class="menu">
      <menu>
        <a href="./index.html">Home</a>
        <a href="./addfoods.html">Foods</a>
        <a href="./users.html">Users</a>
        <a href="./orders.html">Orders</a>
        <a href="../index.html">Logout</a>
      </menu>
    </div>
  </header>

  <main>
    <div class="mtitle">ADD A MEAL</div>
    <form action="" style="margin-bottom: 100px;">
      <label for="mealName">Meal Name</label>
      <input type="text" id="mealName" name="mealName" required>
  
      <label for="mealDescription">Meal Description</label>
      <textarea id="mealDescription" name="mealDescription" rows="4" required></textarea>
  
      <label for="mealPrice">Price</label>
      <input type="number" id="mealPrice" name="mealPrice" step="0.01" required>
  
      <label for="mealImage">Meal Image</label>
      <input type="file" id="mealImage" name="mealImage" accept="image/*" required>
  
      <label for="mealCategory">Category</label>
      <select id="mealCategory" name="mealCategory" required>
          <option value="" disabled selected>Select a category</option>
          <option value="Appetizer">Appetizer</option>
          <option value="Main Course">Main Course</option>
          <option value="Dessert">Dessert</option>
          <option value="Beverage">Beverage</option>
      </select>
  
      <label for="mealIngredients">Ingredients</label>
      <input type="text" id="mealIngredients" name="mealIngredients" required>
  
      <label for="mealSpiceLevel">Spice Level</label>
      <select id="mealSpiceLevel" name="mealSpiceLevel">
          <option value="Mild">Mild</option>
          <option value="Medium">Medium</option>
          <option value="Spicy">Spicy</option>
          <option value="Very Spicy">Very Spicy</option>
      </select>
  
      <div class="middle">
          <button type="submit">Add Meal</button>
      </div>
  </form>
  
  </main>
  <footer>
    <div class="numberf">
      <div class="first">
        <img src="../images/dishdirectlogo.png" alt="">
        <p>At DISHDIRECT, we take pride in offering a diverse range of dishes that cater to every taste bud. Our commitment to quality and convenience drives us to deliver the finest food right to your doorstep. Thank you for choosing DISHDIRECT for your culinary adventures.</p>

      </div>

      <div class="second">
        <div class="ftilt">
          Navigate
        </div>
        <div class="links">
          <a href="#">Home</a>
        <a href="#">Foods</a>
        <a href="#">Menu</a>
        <a href="#">About</a>
        <a href="#">Account</a>
        </div>
      </div>

      <div class="third">
        <div class="ftilt">Follow Us</div>
        <div class="links">
          <a href="">Facebook</a>
        <a href="">Instagram</a>
        <a href="">Twitter</a>
        <a href="">TikTok</a>
        </div>

      </div>
    </div>

  </footer>
  <div class="last">Copyright Benigne Entreprises 2023</div>

</body>
</html>