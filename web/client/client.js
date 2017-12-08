$(function(){
    $('#affiche').click(function(){
        $('#ajout_client').toggle() // AFFICHE ET CACHE A CHAQUE CLIQUE SUR LE BOUTTON
    });
});

$('tr[data-href]').on("click", function () {
    document.location = $(this).data('href');
});
