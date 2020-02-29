$(function(){

    var homeContent = $("#home-section");
    var profileContent = $("#profile-section");
    var editContent = $("#edit-section")


    var btnInicio = $("#btn-menu-inicio");
    var btnPerfil = $("#btn-menu-perfil");
    var btnEditar = $("#btn-menu-editar");



    profileContent.hide();
    editContent.hide();


    btnInicio.click(function(){
        homeContent.fadeIn();
        editContent.hide();
        profileContent.hide();
        $("#page-title").text("Início");
    });

    btnPerfil.click(function(){
        homeContent.hide();
        editContent.hide();
        profileContent.fadeIn();
        $("#page-title").text("Perfil");
    });

    btnEditar.click(function(){
        homeContent.hide();
        profileContent.hide();
        editContent.fadeIn();
        $("#page-title").text("Editar site");
    });


});