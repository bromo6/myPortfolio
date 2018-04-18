$(document).ready(function(){
    new TypeIt('#type1', {
        strings: ["I am a Full Stack Developer", "I am a Designer", "I am a Builder", "I am an Athlete"],
        speed: 50,
        breakLines: false,
        autoStart: false,
        loop: true,
        loopDelay: 500

    })

    // .type("I am a Full Stack Developer")
    // .pause(500)
    // .delete(20)
    // .type("Designer")
    // .pause(500)
    // .delete(8)
    // .type("Builder")
    // .pause(500)
    // .delete(9)
    // .type("an Athlete");




})
