/**
 * Created by HATIM on 15/07/2016.
 */
var clicked = false;
$(document).ready(function () {
    $("nav ul li").click(function () {
        if (clicked == false){
            console.log("The List Item is clicked !");
            $(this).attr("class","active");
            $(this).attr("data-text","old");
            clicked = true;
        } else
        {
            $('li[data-text="old"]').removeAttr("data-text");
            $('li[class="active"]').removeAttr("class");
            console.log("The data-text attribute is cleaned");
            $(this).attr("class","active");
        }
    });
});