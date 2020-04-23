
<style>
@import url('https://fonts.googleapis.com/css?family=Abril+Fatface|Oswald:200,400|Playfair+Display:400,400i');

$bold: 'Oswald', sans-serif;
$abril: 'Abril Fatface', serif;
$serif: 'Playfair Display', serif;

$white: #ffffff;
$main: #92BFB1;
$dark: #333333;

$ease-slow: all .4s ease-out;

body {
  margin: 0;
  background: lighten($main, 10%);
}

a {
  text-decoration: none;
  color: $main;
  &:hover {
    background: $main;
    color: $dark;
  }
}

.sticky1 {
  position: fixed;
  z-index: 9;
}
.navbar--container {
  top: 15%;
  background: $white;
  height: 220px;
  width: 90px;
  box-shadow: 2px 2px 15px rgba($dark, .1);
}
.navbar--icon {
  margin-top: 24px;
  margin-left: 49px;
  font-size: 1em;
  &:hover {
    color: $main;
    cursor: pointer;
  }
}
.navbar--title {
  margin-left: 27px;
  margin-top: 35px;
  h4 {
    writing-mode: vertical-rl;
    font-family: $bold;
    letter-spacing: .34em;
    text-transform: uppercase;
    font-size: 0.9em;
  }
}

//navigation open

.nav--open {
  height: 100vh;
  width: 300px;
  background: $white;
  transition: $ease-slow;
  opacity: 1;
  box-shadow: 2px 2px 15px rgba($dark, .1);
}

.nav--open-icon {
  text-align: right;
  padding: 20px;
  i {
    font-size: 1.8em;
    color: $main;
    &:hover {
      color: $dark;
      cursor: pointer;
    }
  }
}

.nav--open-title {
  font-family: $serif;
  font-size: .8em;
  text-transform: uppercase;
  letter-spacing: .2em;
  text-align: center;
  margin-top: 35%;
}

.nav--open-menu {
  height: 100%;
  display: flex;
  flex-direction: column;
  text-align: center;
  margin-top: 30px;
  a {
    font-size: 2em;
    font-weight: 100;
    font-family: $serif;
    padding: 15px 0;
  }
}

.close {
  transform: translateX(-300px);
  transition: $ease-slow;
  opacity: 0;
}

section {
  height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.two {
  background: darken($main, 1%);
}

.three {
  background: darken($main, 10%);
}

h1 {
  font-family: $abril;
  margin: 0;
  line-height: 1em;
  font-weight: 100;
  color: $white;
  font-size: 3.5em;
  span {
    font-style: italic;
    text-decoration: underline;
    color: darken($main, 10%);
  }
}

.light {
  color: lighten($main, 10%);
}

.underline {
  text-decoration: underline;
}
</style>
<div class="navbar--container sticky">
  <div class="navbar--title"><h4>navigation</h4></div>
  <div class="navbar--icon"><i class="fas fa-bars"></i></div>
</div>
<div class="nav--open close sticky">
  <div class="nav--open-icon"><i class="fas fa-times"></i></div>
  <div class="nav--open-title">explore</div>
  <div class="nav--open-menu">
    <a href="">about</a>
    <a href="">work</a>
    <a href="">services</a>
    <a href="">blog</a>
    <a href="">contact</a>
  </div>
</div>

<script>
let open = document.querySelector('.navbar--icon');
let menu = document.querySelector('.nav--open');
let close = document.querySelector('.nav--open-icon');

open.addEventListener('click', function() {
  menu.classList.toggle('close');
});


close.addEventListener('click', function() {
  menu.classList.toggle('close');
})
</script>


  