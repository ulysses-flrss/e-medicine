$(document).ready(function () {

    $("#li-cita").hover(function() {
        $("#cita").attr("src", "../../assets/imgs/document(1).png");
    }, function () {
        $("#cita").attr("src", "../assets/imgs/document.png");
    })


    $("#li-doctor").hover(function() {
        $("#doctor").attr("src", "../../assets/imgs/doctor(1).png");
    }, function () {
        $("#doctor").attr("src", "../../assets/imgs/doctor.png");
    })

    $("#li-familiares").hover(function() {
        $("#familiares").attr("src", "../assets/imgs/family.png");
    }, function () {
        $("#familiares").attr("src", "../assets/imgs/group.png");
    })
    
    $("#li-faq").hover(function() {
        $("#faq").attr("src", "imgs/faq (1).png");
    }, function () {
        $("#faq").attr("src", "imgs/faq.png");
    })

    $("#li-about").hover(function() {
        $("#about").attr("src", "imgs/information(2).png");
    }, function () {
        $("#about").attr("src", "imgs/information.png");
    })

    $("#li-comentarios").hover(function() {
        $("#comentarios").attr("src", "../assets/imgs/comments.png");
    }, function () {
        $("#comentarios").attr("src", "imgs/comment.png");
    })


    $("#li-logout").hover(function() {
        $("#logout").attr("src", "imgs/sign-out.png");
    }, function () {
        $("#logout").attr("src", "imgs/logout.png");
    })

})