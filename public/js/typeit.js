$(document).ready(function(){
    new TypeIt('#type1', {
        speed: 50,
        autoStart: false
    })
    .type("my")
    .pause(500)
    .delete(2)
    .type("My name is <strong>Brandon</strong>.")
    .break()
    .pause(1000)
    .type("I'm ")
    .delete(3)
    .type(" am a Full Stack Devle")
    .pause(500)
    .delete(2)
    .type("eloper.");



})
