<!DOCTYPE>

<head>
	<title> Contact us </title>
	<!-- Custom CSS -->
	<link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css" >
	
	<!-- Custom Java Script -->
	<link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css" >

</head>

<body>


<div id='browser'>
  <div id='browser-bar'>
    <div class='circles'></div>
    <div class='circles'></div>
    <div class='circles'></div>
    <p>Contact Us</p>
    <span class='arrow entypo-resize-full'></span>
  </div>
  <div id='content'>
    <div id='left'>
      <div id='map'>
        <p>Where To Find Us</p>
        <div class='map-locator'>
          <div class='tooltip'>
            <ul>
              <li>
                <span class='entypo-location'></span>
                <span class='selectedLocation'>South Africa</span>
              </li>
              <li>
                <span class='entypo-mail'></span>
                <a href='#'>johndoe@gmail.com</a>
              </li>
              <li>
                <span class='entypo-phone'></span>
                (+972 2) 629 06 32
              </li>
            </ul>
          </div>
        </div>
        <div class='zoom'></div>
      </div>
    </div>
    <div id='right'>
      <p>Connect</p>
      <div id='social'>
        <a class='social'>
          <span class='entypo-facebook'></span>
        </a>
        <a class='social'>
          <span class='entypo-twitter'></span>
        </a>
        <a class='social'>
          <span class='entypo-linkedin'></span>
        </a>
        <a class='social'>
          <span class='entypo-gplus'></span>
        </a>
        <a class='social'>
          <span class='entypo-instagrem'></span>
        </a>
      </div>
      <form>
        <p>Get in Contact</p>
        <input placeholder='Email' type='email'>
        <input placeholder='Subject' type='text'>
        <textarea placeholder='Message' rows='4'></textarea>
        <input placeholder='Send' type='submit'>
      </form>
      <p>other way</p>
      <p class='other entypo-mail'>
        <a href='#'>johndoe@gmail.com</a>
      </p>
      <p class='other entypo-phone'>(+972 2) 629 06 32</p>
    </div>
  </div>
</div>

</body>