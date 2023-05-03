<?php header("Content-type: text/css"); ?>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

nav {
  display: flex;
  
  margin-bottom: 50px;
  
}

form {
  display: flex;
  flex-direction: column;
  width: 600px;
}


#weight-container,
#dimensions-container {
  display: none;
}

footer {
  margin-top: auto;
  text-align: center;
  background: white;
  border-top: 3px solid black;
  
  
  font-size: 20px;
}

body > footer > div {
  background-color:#bcbcbc;
  height:25px;
}

body > footer > p {
  padding-bottom:20px;
  border-bottom: 4px solid black;
  
}

#nav-buttons > a {margin:20px;}

header {
  border-bottom: 3px solid black;
 height:40px;
 margin-top: 50px;
}

body > header > nav > h1 {
  margin-left: 30px;
  font-size: 30px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight:normal;
}
#nav-buttons  {
margin-left:1100px;
background-color:white;
}
#add-product-btn {
  background-color:white;
  width:50px;
  box-shadow: 3px 3px 1px 0px black;
  border: 3px solid black;
}
#delete-product-btn {
  background-color:white;
  width:120px;
  box-shadow: 3px 3px 1px 0px black;
  border: 3px solid black;
}
#product_list {
  margin-top:25px;
  display:flex;
  margin-left:20px;
  width:fit-content;
  padding:10px;
  text-align:center;

}
#product_list > input{
  cursor:pointer;
  width:10px;
}
#product_list > div {
  width:300px;
  height:170px;
  border: 3px solid black;
  margin: 30px;
}
#product_list > div > input {
  padding-right:50px;
}


