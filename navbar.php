<!DOCTYPE html>
<html lang="en">
<header >
<style>
  li {
    display: inline;
    
  }
  li {
    float: left;
  }
  
  a {
    display: block;
    padding: 8px;
    background-color: purple;
  }
  ul {
    background-color:purple;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #111;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #333;
  }
  .active {
    background-color: purple;
  }
  
  </style>

</header>
<body>
<ul>
  <li><a href="index.html">Home</a></li>
  <li style="float:right"><a class="active" href="index.html#projects">Topic Notes</a></li>
</ul>  
</body>
</html>
