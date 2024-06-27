

$(document).ready(function() {
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
    } 
    
    //Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (p) {
      window.location.hash = p.target.hash;
    })
    /** */
       const currentlocation = location.href; 
   const menuitem = document.querySelectorAll('.navbar-nav .nav-link');
    const menulength = menuitem.length
   for (let i = 0; i<menulength; i++){
    if(menuitem[i].href === currentlocation) {
      menuitem[i].className = "active" 
       }
   }
       
    });
    /*password*/
     $('.field .glyphicon').on('click', function() {
      var attr =
        $(this)
          .prev()
          .attr('type') == 'password'
          ? 'text'
          : 'password';
      $(this)
        .prev()
        .attr('type', attr);
      $(this).toggleClass('active');
    });
    /*nav*/
    $(window).on('scroll',function(){
      if($(window).scrollTop()){
        $('.navbar-index').addClass('chang');
        $('.navbar-index .nav-link').css("color","#4C6373");
        $('.navbar-index .nav-item .active').css("color","#CA002C");
        $('.img-2').css("display" , "block") ;
        $('.img-1').css("display" , "none") ;
       
      }
      else{
        $('.navbar-index').removeClass('chang');
        $('.navbar-index ul li a').css("color","#fff");
        $('.navbar-index .nav-item .active').css("color","#fff");
        $('.img-1').css("display" , "block") ;
        $('.img-2').css("display" , "none") ;
  
    
      }
    })
    $('#paginate2').click(function(e){
      e.preventDefault()
       
  $('.check-one').removeAttr('hidden');
   $('.gov').attr("hidden",true);
  
  
  });
  $('#paginate3').click(function(e){
    e.preventDefault()
     
  $('.check-tow').removeAttr('hidden');
  $('.component-form').attr("hidden",true);
  
  
  });
  $('#chang-email').click(function(m){
    m.preventDefault()
     
  $('.investigation').css('display','block');
  
  $('.form-emaile').attr("hidden",true);
  });
    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
     
      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function(e){
        if (e < onStar) {
          $(this).addClass('hover');
        }
        else {
          $(this).removeClass('hover');
        }
      });
      
    }).on('mouseout', function(){
      $(this).parent().children('li.star').each(function(e){
        $(this).removeClass('hover');
      });
    });
    
    
    /* 2. Action to perform on click */
    $('#stars li').on('click', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');
      
      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }
      
      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      }
      
     
    });
    jQuery(document).ready(function($) {
      $('*[data-href]').on('click', function() {
          window.location = $(this).data("href");
      });
  });
  (function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
  /** */
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUpload").change(function() {
    readURL(this);
  });
  // Javascript to enable link to tab
  
  /*uploud-file*/
  var hiddenBtn = document.getElementById('hiddenBtn');
  var chooseBtn = document.getElementById('chooseBtn');
  
  hiddenBtn.addEventListener('change', function() {
      if (hiddenBtn.files.length > 0) {
          chooseBtn.innerText = hiddenBtn.files[0].name;
      } else {
          chooseBtn.innerText = 'Choose';
      }
  });