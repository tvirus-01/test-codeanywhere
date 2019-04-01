$(window).on('resize', function(){
  if($(window).height() > 500){
    $('#mar').addClass('mar-50');
    $('#wellcome').addClass('text-warning');
    $('#mar').removeClass('mar-25');  
    $('#wellcome').removeClass('text-success');    
  }else{
    $('#mar').addClass('mar-25');
    $('#mar').removeClass('mar-50');
    $('#wellcome').addClass('text-danger');
    $('#wellcome').removeClass('text-success'); 
  }
});