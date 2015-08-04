$(document).ready(function () {
var colors = ['#1F3D99','#2447B2','#2952CC','#2E5CE6','#3366FF','#4775FF','#5C85FF','#7094FF','#85A3FF','#99B2FF'];

$("*").on("click", function() {
    $(function() {
    $("*").each(function() {
         $(this).css('background-color', colors[Math.floor(Math.random() * colors.length)]);
    });
});
})



});

