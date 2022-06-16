<?php
include_once('hellodoc/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Informasi Telah Disubmit');</script>";
echo "<script>window.location.href ='kontak.php'</script>";

}


?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="hello doc., Kontak Kami, Silahkan Tinggalkan Pesan Anda Pada Kolom Yang Tersedia">
    <meta name="description" content="">
    <title>kontak</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="kontak.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="kontak">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-15e9"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-lato u-text u-text-custom-color-5 u-text-1" data-animation-out="0">Laporan dokter</h1>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 400;">
            <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9fd4"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-9fd4" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-spacing-20 u-text-font u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-grey-30 u-border-hover-grey-30 u-button-style u-nav-link u-text-active-custom-color-5 u-text-grey-90" style="padding: 10px;">Masuk</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="asset/admin">admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="asset/dokter">dokter</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link">Masuk</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="asset/admin">admin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="asset/dokter">dokter</a>
</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-2">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-text-font u-unstyled u-nav-5"><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-5 u-text-grey-90 u-text-hover-custom-color-5" href="index.html" style="padding: 6px 28px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-5 u-text-grey-90 u-text-hover-custom-color-5" href="kontak.php" style="padding: 6px 28px;">Kontak</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="kontak.php">Kontak</a>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-custom-color-5 u-section-1" id="sec-a4b1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form name="contactus" method="post" padding="10px">
            <div class="u-form-group u-form-name">
              <span><label >Name</label></span>
              <span><input type="text" placeholder="Enter your Name" name="fullname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="true" value=""></span>
            </div>
            <div class="u-form-email u-form-group">
              <span><label >Email</label></span>
             <span> <input type="email" placeholder="Enter a valid email address" name="emailid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="true" value= ""></span>
            </div>
            <div class="u-form-group u-form-phone u-form-group-3">
             <span> <label>Phone</label> </span>
             <span> <input type="text"  placeholder="Enter your phone number"  name="mobileno" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="true" value=""></span>
            </div>
            <div class="u-form-group u-form-message">
             <span> <label>Description</label></span>
              <span><textarea name="description" placeholder="Enter your message" rows="4" cols="50" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="true"></textarea></span>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
             <span> <a class="u-border-2 u-border-hover-white u-border-palette-1-base u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-lato u-hover-palette-1-base u-radius-6 u-text-hover-white u-white u-btn-1">Submit</a> <span>
             <span> <input type="submit" name="submit" value="submit" class="u-form-control-hidden"></span>
            </div>
          </form>
        </div>
        <h1 class="u-custom-font u-font-lato u-text u-text-default u-text-1">Kontak Kami</h1>
        <h2 class="u-custom-font u-font-lato u-text u-text-2">Silahkan Tinggalkan Pesan Anda Pada Kolom Yang Tersedia</h2>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-83d1"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">®2022 Hello Doc. All Right Deserved</p>
      </div></footer>
  </body>
</html>