<html>
    <head>
    <style>
        body {
  background-color: seagreen;
  background-color: #262626;
}

a {
  outline: 0;
}

#title {
  color: white;
  text-align: center;
  font-family: 'Slabo 27px', serif;
}

#randLink {
  text-decoration: none;
  outline: 0;
}

#rand {
  color: white;
  text-align: center;
  font-family: 'Slabo 27px', serif;
  margin-top: 25px;
  cursor: pointer;
  display: default;
}

#term {
  color: white;
  text-align: center;
  font-family: 'Slabo 27px', serif;
  margin-top: 25px;
}

#results {
  max-width: 1000px;
  margin: 0 auto;
  margin-top: 30px;
}

.wikiLink {
  text-decoration: none;
}

.result {
  text-align: left;
  border-left: 5px solid #262626;
  margin-bottom: 8px;
  background-color: white;
  padding: 15px;
}

.result:hover {
  border-left: 5px solid #e68a00;
}

.title {
  color: #0077b3;
  margin-bottom: 5px;
  font-size: 1.7em;
  //font-weight: bold;
  font-family: 'Slabo 27px', serif;
}

.extract {
  color: black;
  font-family: 'Slabo 27px', serif;
}

/* Expanding Search Bar */
/* Tweaked from: http://codeconvey.com/Tutorials/ExpandingSearchBar/index2.html */
*,
*:after,
*::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.SearchBox {
  //float: right;
  //margin: 28px 0;
  text-align: center;
  display: block;
  margin: 0 auto;
}

.SearchForm {
  border: 3px solid #fff;
  border-radius: 20px;
  display: inline-block;
  height: 34px;
  position: relative;
}

input#field {
  font-size: 1em;
  font-family: 'Slabo 27px', serif;
  //font-family: 'Source Sans Pro', sans-serif;
  //font-family: 'PT Sans', sans-serif;
  //font-family: 'Dosis', sans-serif;
  //font-family: 'Poiret One', cursive;
  cursor: pointer;
  border: none;
  background: transparent;
  height: 30px;
  width: 0px;
  line-height: 0px;
  vertical-align: top;
  padding: 0px 15px;
  -webkit-transition: width .5s;
  transition: width .5s;
  position: relative;
  z-index: 2;
  color: #fff;
}

input#field:focus {
  width: 200px;
  outline: none;
  margin-right: 30px;
}

.close {
  position: absolute;
  width: 30px;
  height: 30px;
  top: 0px;
  right: 0px;
  -webkit-transition: .2s ease-in-out;
  -moz-transition: .2s ease-in-out;
  -o-transition: .2s ease-in-out;
  transition: .2s ease-in-out;
  cursor: pointer;
  z-index: 1
}

.close span {
  background: #fff none repeat scroll 0 0;
  border-radius: 3px;
  display: block;
  height: 4px;
  position: absolute;
  right: -7px;
  top: 29px;
  width: 14px;
  -webkit-transition: .2s .5s ease-in-out;
  -moz-transition: .2s .5s ease-in-out;
  -o-transition: .2s .5s ease-in-out;
  transition: .2s .5s ease-in-out;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.close span.back {
  top: 12px;
  right: 5px;
  opacity: 0;
}

input#field:focus+.close span {
  top: 12px;
  right: 5px;
}

input#field:focus+.close span.back {
  -webkit-transition: .5s .7s ease-in-out;
  -moz-transition: .5s .7s ease-in-out;
  -o-transition: .5s .7s ease-in-out;
  transition: .5s .7s ease-in-out;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  opacity: 1;
}

::-webkit-input-placeholder {
  /* Chrome */
  color: white;
}

:-ms-input-placeholder {
  /* IE 10+ */
  color: white;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: white;
  opacity: 1;
}

:-moz-placeholder {
  /* Firefox 4 - 18 */
  color: white;
  opacity: 1;
}
        
        </style>
    
    </head>
<h1 id='title'>product search</h1>
<div class="SearchBox">
  <div class="SearchForm">
      <form method="post" action="sample.php" >
    <input id="field" type="text" placeholder="Search............" name="search"/>
      </form>
          <div class="close">
      <span class="front"></span>
      <span class="back"></span>
    </div>
  </div>
</div>
<a>
  <div id='rand'>[Search With GEO]</div>
</a>
<div id='term'></div>
<div id='results'>
  
</div>
<html>