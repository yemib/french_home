$.post('events/fetchdelprog.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetchprog');
    fetch.html (ajaxData);
});
