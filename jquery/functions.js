$(function(){
    var restitionDescription = $("#restrition-description");
    var signupFormBackground = $(".signup-form");
    var btnSignup = $("#signup-open");
    var btnCloseSignupForm = $(".close-button-image");
    var restritionYesCheckbox = $(".restrition-yes-checkbox");
    var alergicDescription = $("#alergic-description");
    var alergicYesCheckbox = $(".alergic-yes-checkbox");
    var btnCadastramento = $("#btn-cadastramento");
    
    signupFormBackground.hide();
    restitionDescription.hide();
    alergicDescription.hide();


    btnSignup.click(function(){
        signupFormBackground.fadeIn(500);
    });

    btnCadastramento.click(function(){
        signupFormBackground.fadeIn(500);
    });

    btnCloseSignupForm.click(function(){
        signupFormBackground.fadeOut(500);
    });

    restritionYesCheckbox.click(function(){
        restitionDescription.slideToggle();
    });

    alergicYesCheckbox.click(function(){
        alergicDescription.slideToggle();
    });




    //Navbar appears when scrolling down the page
    $(window).on('scroll', function(){
        if($(window).scrollTop()){
            $('nav').addClass('black'); //The "class" attribute is called on styles.css (Don't delete!)
        }

        else
        {
            $('nav').removeClass('black');
        }
    });



});