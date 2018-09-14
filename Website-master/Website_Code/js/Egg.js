var egg = new Egg();

var instructions = "k,e,n,n,e,t,h";
var easterEggName = "Easter egg";

var action = function () {
    console.log("Triggered");
};

egg.addCode(instructions, action, easterEggName)
    .addHook(function () {
        console.log("Hook called for: " + this.activeEgg.keys);
        // Name of the easter egg
        console.log(this.activeEgg.metadata);
        alert('To all my friends, i miss you. i love you, always will always have <3 xxx')

        var img = new Image();
        var div = document.getElementById('x');
         
        img.onload = function() {
          div.appendChild(img);
        };
         
        img.src = 'hart.png' 

        

    }).listen();


    

   