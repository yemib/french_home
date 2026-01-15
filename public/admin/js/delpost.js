$.post('events/fetchdelpost.php', function(ajaxData){
    console.log(ajaxData);
    var fetch = $('#fetchpost');
    fetch.html (ajaxData);
});
