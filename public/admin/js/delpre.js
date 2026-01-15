$.post('events/fetchdelpre.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetchpre');
    fetch.html (ajaxData);
});
