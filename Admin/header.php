<style type="text/css">
  .header {
  overflow: hidden;
  background-color: #c1c1c1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {

  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
box-shadow:1px 1px 0px 0px black ;
  border: 2px solid white ;
  border-radius: 40px;
}

/* Change the background color on mouse-over */
.header a:hover {
  
  border: 2px solid white ;
    font-color:white; 
    box-shadow:1px 1px 0px 0px black ;
  background-color: ;
  border-radius: 10px;
  color: black;
}

/* Style the active/current link*/
.header a.active {

  color: black;
}

/* Float the link section to the right */
.header-right {
  float: right;
}
</style>
<div class="header">
      <a href="#default" class="logo">AddressBook</a>
      <div class="header-right">
        <a class="active" href="index2.php">Home</a>
        <a href="user.php">Users</a>
        <a href="detailsprofile.php">Contact</a>
        <a href="contact_us.php">Contact Us</a>
        <a href="index.php">Logout</a>
      </div>
    </div> 