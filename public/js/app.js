$(document).ready(function(){  
    // coupon remove class
    $(".cst-soucription-tab-i.fas.fa-heart").click(function(){
        var invisible = $(".cst-coupon-tab-i")
        if (invisible) {
            invisible.removeClass( "cst-coupon-tab-i" ).addClass( "ttr" );
        }
    });

    // /sign/profil  
    $(".crt-status").on("input", function(){
        var status = $(this).val()
        var token = $('.csrf_token').val()

        if(status == "particulier"){
            urlnavigation = `/sign/user/one?status=${status}&userto=${token}`
            urlajax = "/sign/user/one"
        }else if (status == 'entreprise') {
            urlnavigation = `/sign/user/two?status=${status}&userto=${token}`
            urlajax = "/sign/user/two"
        } else if (status == 'auxiliaire') {
            // urlnavigation = ``
        }
        
        try { 
            url = urlnavigation
            $.ajax({
                url:urlajax,
                type: "POST",
                dataType: "json",
                data: {
                    "status": status
                },
                async: true,
                success: function (data)
                {
                    console.log(data)
                    $(location).prop('href', url);
                }
            });
        }
        catch(err) {  //We can also throw from try block and catch it here
            console.log(err);
        }
    });


    $('#modalopen').click(function(){
        var data = {
            'name': $("input[name=email]").val(),
            'password': $("input[name=password]").val(),
            'repeterpassworf' : $("input[name=repeterpassword]").val(),
        }

        var vericationPassword = (x, y ,t) => { 
            x >= y ? (sendRequetAjax(t) ) :( message = 'no correct');
            return message;
        }

        var sendRequetAjax =(params)=>{
            // try { 
            //     url = '/sign/login'
            //     $.ajax({
            //         url:urlajax,
            //         type: "POST",
            //         dataType: "json",
            //         data: {
            //             "status":params 
            //         },
            //         async: true,
            //         success: function (data)
            //         {
            //             $(location).prop('href', '/sign/login');
            //         }
            //     });
            // }
            // catch(err) {  //We can also throw from try block and catch it here
            //     console.log(err);
            // }

            $(location).prop('href', '/sign/login');
        }

       console.log( vericationPassword(data.password,data.repeterpassworf,data));
    });


    // apppaking
    $('#plus-cercle').click(function(){
        if($("div.d-none")){
            $("div#ajoutVehicule").addClass("d-flex").removeClass("d-none");
            $("div#table").addClass("d-none");
        }     
    });

    $('input#Enregistrer').click(function(){
        $("div#table").removeClass("d-none");
        $("div#ajoutVehicule").addClass("d-none").removeClass("d-flex");
        $("div#table_parking").removeClass("d-none");
        $("div#quitterVehicules").removeClass("d-none");
    })

    // dashbord_paiement_initial
    $('#mtnMonney').change(function(){
        $("div#sendNumero").removeClass("d-none");
        $("#paiementValider").removeClass("d-none");
    });

    $('#moovMonney').change(function(){
        $("div#sendNumero").removeClass("d-none");
    });

    $('.paiementEnregistrer').click(function(){
        $("div#paiementModifie").removeClass("d-none");
        $("div#paiementValider").addClass("d-none");
    });

    $('.paiementModifie').click(function(){
        $("div#paiementValider").removeClass("d-none");
        $("div#paiementModifie").addClass("d-none");
    });

    // dashbord_commande
    $('.kindoSoucription').click(function(){
        if($("div.cardre_aroundi")){
            $("div.cardre_aroundi").removeClass("d-none");
        }     
    });
    $('#soucription-kindo').click(function(){
        if($("div.liste-cmd-soucription")){
            $("div.liste-cmd-soucription").removeClass("d-none");
        }     
    });

    $('#sectVoiture').click(function(){
        if($("div#selectValiderVoiture")){
            $("button#modelClose").addClass("display-none");
            $("div#selectValiderVoiture").removeClass("d-none");
        }
    });

    $('button#selectvalider').click(function(){
        if($("div.tableValidation")){
            $("div.tableValidation").addClass("d-none");
            $("#facture").removeClass("d-none");
        }
    });

    $('button#validerFacture').click(function(){
        if($("div#factureConfirmer")){
            $("div#facture").addClass("d-none");
            $("div#factureConfirmer").removeClass("d-none");

            setTimeout(() => {
                $("div#factureConfirmer").addClass("d-none");
                $("#factureImp").removeClass("d-none");
            }, 3000);
           
            $("#ex1").attr('style', 'max-width: 504px !important;position: fixed; z-index: 1050;display: inline-block;outline: 0px;margin-top: -10%;inset: 35% 20rem auto 31% !important');
        }
    });

    
      // dashbord_client
      $('input#ValiderReception').click(function(){
        $("div.ValiderReception").addClass("d-none");
        $("div#factureImp").removeClass("d-none");
    });

});