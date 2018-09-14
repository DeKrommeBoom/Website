<?php
include 'header.php';
?>


<script>
  $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 800) {
      $(this).addClass("slide");
    }
  });
}); 
</script>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="home paralax">
    <div class="landing-text animated bounceInUp">
      <h1 class="animated bounce">Maatwerkbedrijf</h1>
      <h3 class="animated bounce">De Kromme Boom</h3>
      <a href="#" class="btn btn-default btn-lg text-success">Aan de slag</a>
    </div>
  </div>

  <div class="container" style="padding-top: 2%">
    <div class="row slideanim ">
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p>
          <a class="btn btn-default" href="#" role="button">Lees verder »</a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p>
          <a class="btn btn-default" href="#" role="button">Lees verder »</a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p>
          <a class="btn btn-default" href="#" role="button">Lees verder »</a>
        </p>
      </div>
    </div>
  </div>
  <div class="py-5 text-center text-white opaque-overlay paralax bg-success">
    <div class="container">
        <h1 class="my-3 text-white">Waarom kiezen voor ons Maatwerkbedrijf?</h1>
      <div class="row">
        <div class="p-4 col-md-3 bg-success">
          <i class="text-white d-block fa fa-3x fa fa-users"></i>
          <h2 class="my-3 text-white">Sociaal</h2>
          <p class="text-white">tex text text</p>
        </div>
        <div class="col-md-3 p-4 bg-success">
          <i class="text-white d-block fa fa-3x fa fa-puzzle-piece"></i>
          <h2 class="my-3 text-white">Creatief</h2>
          <p class="text-white">tex text text</p>
        </div>
        <div class="col-md-3 p-4 bg-success">
          <i class="text-white d-block fa fa-3x fa fa-cogs"></i>
          <h2 class="my-3 text-white">Inventief</h2>
          <p class="text-white">tex text text</p>
        </div>
        <div class="col-md-3 p-4 bg-success">
          <i class="text-white d-block fa fa-3x fa fa-graduation-cap"></i>
          <h2 class="my-3 text-white">Groei</h2>
          <p class="text-white">tex text text</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row slideanim">
        <div class="col-md-12">
          <h1>Samenwerking</h1>
          <p class="lead">Wij werken samen met</p>
        </div>
      </div>
      <div class="row slideanim">
        <div class="col-md-4 p-4">
          <img class="img-fluid d-block rounded-circle mx-auto" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ4NDg0NDg8NDQ0NDQ8NDg0NFREWFhURFRUYHSggGBooGxUVITEhJSkrLi4uFx8zODMsNygtMCsBCgoKDg0OGxAQGy8mICYwLzAyLzAtLS8wLystLS0vLy8rLy8tLS0tLzUtLS0tLS0tNS0tNS0vLS0tLy0tLS0tLf/AABEIAIkBbwMBEQACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcBBQMECAL/xABJEAABAwIDAwYICggFBQAAAAABAAIDBBEFBhIHITETNUFRcbEUIjJSYXOBkRUXI0JydKGzwdJUYoKSk5SywyUzNENTFiRj0eH/xAAbAQEAAgMBAQAAAAAAAAAAAAAABAUDBgcCAf/EADoRAQABAwEEBgcHBAMBAQAAAAABAgMEEQUSITEGMzRBUXETFGGBwdHwIjJykaGx4RZCUlM1svEjFf/aAAwDAQACEQMRAD8AvFAQEBAQEBAQEBAQEBAQEBAQEBAQEBBhBlBhBlAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBBhAQZQEBBhBlAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQaPHcxClkFPDEaqqMT5/B2SBjhE0XJvY7z0DpXux6O5fptV1buvfz080icW76tVkxH2YmI85nwQo7YowbHD5ARuINQ0EH9xbN/TFX+2Py/lT+vx/ix8ccX6BJ/Mt/Kvv9MVf7I/L+T1+P8T444v0CT+Zb+VP6Yq/2R+X8nr8f4nxxxfoEn8y38qf0xV/sj8v5PX4/xPjji/QJP5lv5U/pir/ZH5fyevx/i2WXdp0dfWQUgo3xmZxaHmdrg2zSeGnfwUXM2BVjWars166d2n8slvMiuqKdFgLX0wQEGEGUGEGUGEGUBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQaHN+ZIsMpzI6zpn3bBF0vd1n0BYb96LVOves9l7Nrzb27H3Y5z9d6t9m1ZLU42Z5nF8sscznuPSbD7OhV+LVNV7WW3bfs0Wdm+jojSImHa2rZL0a8SpGeITeqiaPI/wDKB1dfv610XYW1N7THuzx/tn4fJyzLx/76feq1bSrxBlBhBJtm3PND9N/3blWbZ7Fc8o/eGfG62n67nohc6XYgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICDoY5i8NDTvqJzZrBuaPKe7oaPSV4uXIop3pSsPEuZV2LVuOM/pHioHMGNTYhUPqJjvO5jAfFjZ0NCpLtyblW9LqGDhW8OzFq3758Z8W/2T87M9TN3BZsLrVX0l7DPnC7HtDgWuALSCCCLgg8QVcxMxOsOcqL2k5MOHS+E07T4HM7cBv5B5+b2dS3vY21PWqPR3Pvx+sKjKx/RzvRyQhXiIwgIJNs255ofpv+7cqzbPYrnl8YZ8brafrueiFzpdiAgICAgICAgICAgICAgICAgICAgICAgICAgwgygICAgICAgIOGrqY4I3yyuDI42lz3ONgAF8qqimNZZLVqq7XFFEazKiM65nkxOouCW00RIgj4bvPPpKpci/N2r2Ol7I2ZTg2tP7p5z8PJHVgW6Y7J+dmepm7gpWF1rX+kvYZ84Xcrhzl16+iiqYZIJmB8UrSx7DwIPcfSslq7XariuidJh8qpiqNJee865WlwqpMZu+nkJdTzW8pvmu/WH/ANXQ9m7QozLW9HCqOcfXcpb9ibVXsR1WLAIJNs255ofpv+7cqzbPYrnl8YZ8brafrueiFzpdtRmfFnUVO18bGvmmmjp4GvJDDK87i63QACfYsV65NFOsc+Sfs7Epybs01zpTETVOnPSPB94PJXapY61kHiaTHNT6mskB4jS4kghfaJr4xU8ZVONpTVYmePOJ01j3xo2iyIaK7QsxVGGU8MtO2JzpJuTdyrXOGnQTusR1KNk3qrVMTSu9h7OtZ12qi7M6RGvDz8pQP408T/46P+FJ+dQvXrnsbN/S2H41fnHyc9JtXrWn5amppG9UfKRO95Lh9i9U59ffEMVzopjTH2K6on26T8IWLlfMtPikJkh1New2lifbWw9HaD1qdZvU3Y1hqm0dm3sG5u3OMTymOUuxmSufS0NVURaeUhic9moXbcdYXq7VNNE1QxYFim/k0Wq+UzohGR88V2IVzKacQCMse48nG5rrgbt5cVDx8mu5Xuy2PbGw8bExpu29ddY5z/CyVYNQEES2h5nlwyGA04jM00hHyjS4CMDfuBHSQouVem1Eac17sLZlGdcqi5ruxHd4oTRbUMQMsQmFNyRkYJdMTgeT1DVbxuNrqJTm16xro2K70XxfR1bk1a6Tpxjn3dy4mm4BHA71atAmNFW5qz/iFHXVFNEKcxxP0t1xuLrWHE6lW3suuiuaY0brs3o/i5GNRdr3tZjx/hqfjQxTzaX+E78yxevXPYnf0vheNX5x8j40MU82l/hO/Mnr1z2H9L4XjV+cfJYGz3H6jEqWWaoEYeycxDk2lo0hjD0k77uKnYt2q5TM1NW25s+1hX6bdrXSY14+c/Jrc5bQmUL3U9Kxs1Q3c9zyeSiPVYb3H0XCx38uKJ3aeMpeyuj1WVTF29O7T3ac5+SGjaPjAPKaotF/JNO3R2X4/aonrl3m2H+nNn6buk6/i4/XuTfJmf48QeKeoY2CpI8XSTyUvXpvvafQb9qmWMuLk7tXCWt7W2BXiU+ltTvUfrHn4+aaqY11WOcM+19FXzU0IpzHHp0643F28A7zqVdfyq6K5phuWy9g4uTi03a97WfCf4djI+fqitrBTVYhaJGnknRsLPlBvsbk9HcvWPlVV17tTFtjYFrGx/S2NeHPXjw/JOccqn09JUzx21xRPezULt1AXFwplyqaaZmGt4dqm7fot1cpmIV7k/PtfW4hT0swp+TlMgdojc13ixucLHV1gKDYyq67kUy2ramwMXGxK71uatY05z7YjwWerFpjKAgICAgICDDnAAkkADeSdwAR9iNeEKX2jZvNdIaWncRSRO3kf78g+d9EdHvVRlZG/O7TydC2Dsj1Wj012Ptz+kfPx/JCVEbGIJjsn52Z6mbuClYXWtf6S9hnzhdyuHORBrMxYJBiNM+mnG5wux/zo39DgpWJl14t2LlH/sPFy3FdOkvO2YMFnw6pfTTizmm7XDyZGdDx6F0XEyreTai5R/5Pgo7lubdWktapLwk2zbnmh+m/7tyrNs9iueXxhnxutp+u56IXOl21uP4S2upzC57o3NeyWKVoBdFKw3a6x49VuolY7lvfp0S8LLnFu78RrGkxMeMTzh8YNh80JllqKo1UkuneIxFExoG4NYCbek3S3RMazVOr1l5Fu5FNFq3uRHt1mfOeDarIhK92zf6Kl+s/23KDn/cjzbV0T7RX+H4w6WxuBj463WxrrPitqaHW3HrXjBiJidUnpXXVTVb3Z05tjtSwmjbQOn5OOOdr2CN7QGudc727uIWTMt0bmveh9HMvInKi3vTNMxOsI3seL/D5g3yDAdfvFvtUfB135XHSmKfVadeevBY2duaq/wCrvU/I6qryajsjt1r8UKs2Vc7R+ql7lW4fWt26S9hnzhd6uHOBBS+1rEOWxEQg3bTxhm7z3bz+CqM2vW5p4Oh9Gcf0eJvzzqn9GqzbgXgTMPcBbl6Vrn7v9y9yfc4e5Y71rcin2wm7Mz/Warsf41cPL6hb+RsR8LwyklJu9sfIyX464zoue2wPtVrj179uJaFtjG9XzblEctdY8p4/w2E+D0kji+Snhe929znRtLifSV7m3TM6zCLRmX6Kd2muYjzVBtUpYocQayKNkbeQYdLGhovc77BVWZTEXODfejd2u5iTNczM6zzTvIGEUkuFUr5KeF73Nfdzo2ucfHdxKm41umbUTMNZ23l36M65TTXMRw7/AGQ2eYqiLC8OqpoI2RWb4oY0NBldZrTYez3LJdmLVuZhCwLdedl0UXJmfPwjiqDJOEfCWJRxy3dGNU9Qb73MbvI9ri0e1VePb9Jc0lvu18z1LDmqjnyjz/iOK9H4dTui5EwxGIt0cnobp09Vlc7lOmmjmsZN2K/SRVOvjqobNOGuwzEpYoi5oje2Wnf0hh8Zvu4exUt6j0VyYh03Z2TGdh01198aT58p+a8cu4j4ZRU1T0yxtLgOh/Bw991cWq9+iKnN8/H9XyK7XhP6dymdpPO1T+x/SFU5fWy6FsDsFHv/AHdXFsOkw6SiqYiQ2aGGqhf1SADU337+wrzXRNuYqjzZsXIozKLlqvumaZ8u79FvVuJsrcDmqmcJaSQkea8NIc32EEK0qriuzNUeDQ7WNVjbSps1d1Ufl3foqrZtzzRds33D1W4nWx9dzdtv/wDH3Pd/2hfKunMhAQEBAQEBBV+0zOfl4fSP4XbVStPT0xNPf7lXZeT/AGU+9ufR/Y3LJvR+GPjPw/NWCrm5iAgmOyfnZnqZu4KVhda1/pL2GfOF3K4c5EBBG88ZVixWm07m1MQLqeXqd5p/VKstmbRqw7uv9s84+u9gv2Yu0+158raSWnlkhmYWSxOLHscLEELodu5TcoiuidYlS1UzTOkt/s255ofpv+7cq/bPYrnl8YZsbrafrueiFzpduOo/y3/Qd3L5PJ7t/ejzaPIJ/wAKovVfiVhxuqhY7a7dc80gWdVq92zf6Ol+s/23KDn/AHI821dE+0V/h+MK/wAtU+KyCX4NE9gW8ryTw0X6L3PaoNqLs67jadoXMGiafWtPZrDjzBSYpGQcQbVWv4rpi5zL9QPC/Yvl2m5H39XvBu4VcaY00+7TX5rF2Rz0Pg8kcIc2s3OqNZBL29Bb+r6FPwpo3dI5tT6T28n0sVV/c7tO7z9qS525qr/q7+5SMjqqvJTbI7da/FCrNlPO0fqpe5VuH1rdukvYZ84Xerhzh8SvDWuceDQXHsAXyZ0faaZqmIh57Mvh+KBznANqasXc4hobGXjeb9TVR6+kuecuq7vqmFpEfdp/XT5rD2rNp5qGJ8UsLnU8gs1kjHHQRbgDwU7M3aqImJ5NU6NTdtZNVNdMxFUd8TzcOxnELx1VIT5DmzsHoI0u7gvmBXwmlk6V4+ldF6O/h8YWUrBqCmNr3OTfUM7yqnN6x0Lov2OfxSsLZzzRR/Rf945TsXqoart7t9z3ftDobWSfgp1uBmiv2X/92XjN6pJ6M6evR5SiuxkN8MqifK8G3dnKNv8Ago2B9+fJd9K5n1ejw3vhK3laNDUxtgA+E4/qsd/35FU53We50Hot2KfxT+0J3suv8D09/Pmt2cq5TMPqoa10j/5Cvyj9oVntJ52qf2P6Qq/L62W47A7BR7/3TrHME8Ny/SlovNT00c0fWbMGpvuU25a37EeMQ1nDzfVtq16/dqqmJ/PgiuSMZtQYnQPO51PLPDc/O0We0ewA+wqNj3PsVUT4LvbGFrlWMmnuqiJ/Pg12zbnmi7ZvuHrHidbH13Je3/8Aj7nu/wC0L5V05kICAgICAghG0XN4oYzS07v+7lbvIO+Bh+d29Sh5WRuRuxzbHsLZE5VfprsfYj9Z+SlySTc7yd5J6Sql0KOAj6ICCY7J+dmepm7gpWF1rX+kvYZ84XcrhzkQEBBBdpeTBiERqqZo8MhbwG7l4x8z6XV7le7G2p6tX6O5P2J/SfH5omVj+kjejmrLZuCMaogQQRI8EEWIPJu3ELZ9sTrg3J9kfvCvxo0vR9dz0Oudrt1MTqjBEZBDJPYgGOMNLrHid54LzXVuxrpqz49qLte7NUU+2XRyzikVVCHQUz6eAAGK7WMY5p80NXi1XFUcI0hJ2hi12LmlyuKqu/jMz79W5WVXq92zf6Ol+s/23KDn/cjzbV0T7RX+H4w6uxb/AC636cXc5ecDlLN0t+9a8p+CS7RqiFmF1LZXM1PaGxNdbUZLi1gpGVMRbnVUbBt3Ks2iaI4Rz8lb7KQ/4VZpvYRSa+rTbpVfh6+lbd0k3fUZ18YWnnbmqv8Aq71ZZHVVeTSdkdutfihVWyxwbisZJAHJS7ybDgq3D61u/SOJnBnTxhdnhEfns/fCt9Yc69HX4T+TQbQcR8GwupcDZ0jRAzfY3fuNuwXPsWDJr3bcrPYeP6fNojujjPuU5lvLlTickkdPoBiYHudI4taATYDcOPH3KqtWars6UugbQ2jZwqYqu68Z04N7LsxxJjXO1Ux0tLrCR1zYXsPFWacK5Edysp6T4dVURpVx9n8uls4xDwbFIQ42bLqhdc2Avwv7QvGLXu3ISdvY/psKrTnHFe6unM1MbXucm+oZ3lVOb1joXRfsc/ilYWznmij+i/7xynYvVQ1Xb3b7nu/aHZzrhhrMOqYWi79Gtg63sOoD7F6yKN+3MMOycmMbLouTy10nyngqHZ9i7aDEo3ynTHIHU8pPzA4ixP7TW39qq8a5uXNZb5tzEnKw5po4zH2o9un8TK9zI0N1lzQy2rUSNOnrv1K5173M4pmZ3dOKg864r8IYlNJFdzNTYILfOa3cCO03PtVJkV+kuTMOn7JxfU8OmivhPOff8oXVlbDfA6Cmpz5UcY128873faSrezRuURS53tHJ9Yyq7vdM8PLuU5tJ52qf2P6QqrL62XQNgdgo9/7rjysP8Oovq0X9AVrZ6uPJz/aPa7n4p/dTOeMJdhuIytju2OX5aEj/AI33u32G49gVTkW5t3J0dB2Pl05mJTNXGY4T5x/HF9bNueaLtm+4evuJ1sfXc+bf/wCPue7/ALQvlXTmQgICAgINHnLHHYdRSVDIzJJ5EfiksY48HPtwaPt4LDfu+jo1hZbKwYzMiLdU6Rznx08I9qgaupkmkfLK4vkkcXPe7i5xVJVVNU6y6hat0WqIoojSI5Q4l8ZBAQEEx2T87M9TN3BSsLrWv9Jewz5wu5XDnIgICAgh1fk5gxikxSmAb8o7wqMbgSWOAkHp3i6ubW05nDrxrnh9mffy+SLVY/8ArFdPvTFUyU+JmkseBxLSB22XyeT1ROlUS1WUaKWmw+mgmGmSNml4vexuVjsUzTbiJTdp36L+VXco5TLcLKgIftKwOpxCmgjpmB7mTa3AuDbN0EfiouXaquUxFK+6P51nEvV1XZ0iY0/VX8eQcZZfQwNvx0zab+5QYxb0Npq2/s+rnOvuckezvF5XASBgHS6SbVYL7GJdnm81dIsC3H2dfdCx8mZSiwqNx1crUSACSW1hbzWjoCn2MeLUe1qO1tr159ccNKY5R8ZbHNFJJUUFXBENUksLmMF7XcfSsl6maqJiEXZ16izlW7lfKJ1lUI2eYuOETR2SgKq9Uu+DfJ6Q4E86v0ctPkLF2vY4xiwe0n5YcAV6jFu6sde3sCaZiJ7vBNdpGC11fHSwUrA6OMuklJcG+PYNb9hf71LyrddyIilr2wM3GxK7ly9Okzwjy5z8HLs1y3Nh0NQalobNNIODg75No3faXL7iWZtxO9zY+kG0reZco9FOtMR+s/UJmpbX1NV+QcTZWyy00bDG2odLAdYHih+pm73KpqxbkVzNMd7oFnb+HVj00Xap1mnSeHs0lcNOXFjC8WcWjUONnW3q1jlxaDXERVO7yVxtEynXV9aJqeNroxE1ly8N8YE33KBlWK669aW3bC2tjYuNuXZ0nWe5MMmYfLSYdT087Q2WMODgDe13k8fapViiaLcRKg2tkUZGXXctzwnT9m7WZXK3zns5M8j6mgLGvedUkDvFaXdLmno7FX38PeneobdsnpHFqiLWTxiOU/NE/wDpPHSOQMVRyXDSZvkvdq/BRvQX+Wkrz/8AW2ZE+k3qdfLj+yZZJ2e+CyNqq0tfKzfHC3exjvOcekqXj4m7O9Xza/tfpD6eibOPwpnnPfPksJTmqqozrkzEavEJ54Imujfp0kvAJs0dCrMjGuV3JmIbxsnbOJj4lNu5Vxj2LIwCmfDR0sUgs+OGNjxe9nBoBVhbiaaIiWo5tym5kV108pmZaLaJlp2JUrORANTA+8dzbUx25zb+4+xYcqz6SnhzhZbC2lGFen0k/Yqjj5xylE8lZLxGkxKmqJ42tijMmsh4JF4nNG7tIUXHxrlFyKphebX21iZGHXat1cZ07vbErYVm0cQEBAQEHxLG17Sx7Q5rhZzXC4I6iF8mNeb1TVNM60zpKqs7bO3Ra6rDwXR73SU3F0fWWdY9HQq3IxNPtUfk3bZHSKK9LOTOk91Xj5+32q4ItuO4jcQehQG266iPogIJjsn52Z6mbuClYXWtf6S9hnzhdyuHORAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBBBs65BirdVRSBsVVxczhHMfT1O9Kh5GLFf2qebZNkbfrxtLV7jR+sfwp+rpZYJHRTMdHIw2cx4sQVVVUzTOkt+tXaLtEV0TrE97hXxkEEy2TD/ABVvohl7gpWF1rXuk3YZ84XarhzoQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEEfzXlSmxOPxxonaPk52jxh6D1hYL1im7HHmtNm7VvYNf2eNM84+uUqTx/AqnD5jDUMt5kg8iRvWD+CqLlqq3OlTouFnWcy3v2p8474axY01M9kvOg9TL3KXhda17pN2L3wuxW7nQgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICDo4xhNPWwugqYw9h4dDmO85p6CvFdumuNKknFy7uLci5anSf381LZwyXUYa4vbealJ8WYDe30PHQfSqi/jVW+Pc6HsvbVrNjdnhX4fJ29kvOg9TL3L3hdawdJuxe+F2K3c6EBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEHxNE2RrmPa1zHCzmuAII6iF8mInhL1TVVRMVUzpMIlhOSmUOKCspXAUz45GuhdfVE8jdpPS37R6VGoxooub1PJe5O2qsrC9Bej7UTHHxj2+1MFKUAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwgygICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIMICDKAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwgIMoCDCDKDCDKAgICAgICAgICAgICAgICAgICAgICAgICAgICDAQZQCgICAgICAgICD/2Q==">
          <br>
          <b>Blaton</b>
          <p class="my-4">
            <i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</i>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <img class="img-fluid d-block rounded-circle mx-auto" src="foto/ocmw.png" style="max-width: 100%; height: auto;">
          <br>
          <b>OCMW</b>
          <p class="my-4">
            <i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</i>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <img class="img-fluid d-block rounded-circle mx-auto" src="data:image/png;base64,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">
          <p class="my-4">
            <b>Spie</b>
          </p>
          <p class="my-4">
            <i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</i>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php
include 'footer.php';
?>