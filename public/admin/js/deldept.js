$.post('events/fetchdeldept.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetchdept');
    fetch.html (ajaxData);
});
