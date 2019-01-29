let today = new Date();

$('.weingutdate').append(today.getFullYear());
$('.homedate').append(today.getFullYear());


// icon changer

if (today.getMonth() >= 0 && today.getMonth() <= 3){
  $('#icon').attr('src', function(){
    return './media/freezy.png';
  });
}
else if (today.getMonth() >= 4 && today.getMonth() <= 7) {
  $('#icon').attr('src', function(){
    return './media/redschy.png';
  });
}
else if (today.getMonth() >= 8 && today.getMonth() <= 11) {
  $('#icon').attr('src', function(){
    return './media/rosy.png';
  });
}
