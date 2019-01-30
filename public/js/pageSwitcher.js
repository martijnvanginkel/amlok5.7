$(document).ready(function(){

    var url = window.location.href;

    $('.pages .menuItem div a').filter(function() {
        return this.href == url;
    }).addClass('onPage');
    
});