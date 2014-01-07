var toggleButton = document.getElementById('open-intro');


function toggleResults(){

$("#Results").toggle(500);

}

function toggleInfo(){

$("#moreInfo").toggle(500);

}

function toggleResults(){

$("#Results").toggle(500);

}


$('.open-intro').click(function() {
    $('#wrapper').animate({
    //opacity: 1,
    left: '0',
  }, 500, function() {
    // Animation complete.
  });
    $('.open-intro').hide();
    $('.close-intro').show();
});


$('.close-intro').click(function() {
    $('#wrapper').animate({
    //opacity: 0.25,
    left: '-225',
  }, 400, function() {
    // Animation complete.
  });
    $('.open-intro').show();
    $('.close-intro').hide();
});
