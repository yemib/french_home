$.post('events/fetchdelint.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetchint');
    fetch.html (ajaxData);
});
