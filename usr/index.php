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
        <a href="../index.html">Logout</a>
      </menu>
    </div>
  </header>

  <main>
    <div class="mtitle">Recent Orders</div>
    <table id="tables" style="margin-top: 100px;">
      <tr>
          <th>Order ID</th>
          <th>Date Placed</th>
          <th>Arrival Time</th>
          <th>Status</th>
          <th>Feedback</th>
          <th>Items Ordered</th>
          <th>Total Price</th>
          <th>Details</th>
      </tr>
      <tr>
          <td>001</td>
          <td>2023-08-16</td>
          <td>2023-08-16 18:30</td>
          <td>Delivered</td>
          <td>Excellent</td>
          <td>
              <ul>
                  <li>Spaghetti Carbonara (x2)</li>
                  <li>Caesar Salad (x1)</li>
              </ul>
          </td>
          <td>$40.00</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>002</td>
          <td>2023-08-20</td>
          <td>2023-08-20 19:15</td>
          <td>Delivered</td>
          <td>Good</td>
          <td>
              <ul>
                  <li>Chicken Tikka Masala (x1)</li>
                  <li>Garlic Naan (x2)</li>
              </ul>
          </td>
          <td>$30.00</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
        <td>003</td>
        <td>2023-08-25</td>
        <td>2023-08-25 20:00</td>
        <td>Delivered</td>
        <td>Excellent</td>
        <td>
            <ul>
                <li>Margherita Pizza (x1)</li>
                <li>Garlic Breadsticks (x1)</li>
            </ul>
        </td>
        <td>$18.50</td>
        <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>004</td>
          <td>2023-08-28</td>
          <td>2023-08-28 19:45</td>
          <td>Delivered</td>
          <td>Good</td>
          <td>
              <ul>
                  <li>Chicken Alfredo (x1)</li>
                  <li>Cheese Garlic Bread (x2)</li>
              </ul>
          </td>
          <td>$35.25</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>005</td>
          <td>2023-09-02</td>
          <td>2023-09-02 18:15</td>
          <td>Delivered</td>
          <td>Good</td>
          <td>
              <ul>
                  <li>Sushi Combo (x1)</li>
                  <li>Miso Soup (x2)</li>
              </ul>
          </td>
          <td>$27.75</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>006</td>
          <td>2023-09-05</td>
          <td>2023-09-05 20:30</td>
          <td>Delivered</td>
          <td>Excellent</td>
          <td>
              <ul>
                  <li>BBQ Ribs (x1)</li>
                  <li>Coleslaw (x1)</li>
                  <li>Cornbread (x3)</li>
              </ul>
          </td>
          <td>$42.00</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>007</td>
          <td>2023-09-09</td>
          <td>2023-09-09 19:00</td>
          <td>Delivered</td>
          <td>Excellent</td>
          <td>
              <ul>
                  <li>Vegetable Stir-Fry (x1)</li>
                  <li>Spring Rolls (x4)</li>
              </ul>
          </td>
          <td>$22.50</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>008</td>
          <td>2023-09-12</td>
          <td>2023-09-12 21:15</td>
          <td>Delivered</td>
          <td>Good</td>
          <td>
              <ul>
                  <li>Pepperoni Pizza (x2)</li>
                  <li>Cheese Sticks (x1)</li>
              </ul>
          </td>
          <td>$28.75</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>009</td>
          <td>2023-09-15</td>
          <td>2023-09-15 18:45</td>
          <td>Delivered</td>
          <td>Good</td>
          <td>
              <ul>
                  <li>Beef Tacos (x3)</li>
                  <li>Guacamole (x1)</li>
                  <li>Salsa (x1)</li>
              </ul>
          </td>
          <td>$19.80</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
      <tr>
          <td>010</td>
          <td>2023-09-18</td>
          <td>2023-09-18 20:45</td>
          <td>Delivered</td>
          <td>Good</td>
          <td>
              <ul>
                  <li>Pho Soup (x1)</li>
                  <li>Spring Rolls (x2)</li>
              </ul>
          </td>
          <td>$23.25</td>
          <td onclick="displayItem()" class="modalBtn"><span>View Details</span></td>
      </tr>
    
    </table>
    <div class="mtitle">Change Details</div>

    <form action="" style="margin-bottom: 100px;">
      <label for="email">Names</label>
      <input type="text" placeholder="Mujawabandi Delice" readonly>
      <label for="email">Phone</label>
      <input type="email" placeholder="078900231" readonly>
      <label for="email">Location</label>
      <input type="location" placeholder="Gacuriro-Gasabo" readonly>
      <label for="email">Email</label>
      <input type="email" placeholder="mujadelice@gmail.com" readonly>
      <label for="email">Password</label>
      <input type="password" placeholder="*******">
      <div class="middle">
          <button type="submit">Login-Here</button>
      </div>
      <p class="small">If you have an account <a href="./login.html">Login Here</a></p>
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