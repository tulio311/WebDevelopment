var aparecidos = 0;
function aparecerDiscos(){
    var value = getComputedStyle(document.body).getPropertyValue('--resp');
    $("body").css("padding","0px");
        
        if(value == 1){
            $("#discos").css("display","block");
            $("#discos").css("top","15%");
            $("#discos").css("width","50%");
            $("#discos").css("left","25%");
            
        }else{
            $(".container").css("display","inline-block");
            $(".container").css("width","50%");
            $(".container").css("padding-left","80px");
            $(".container").css("display","inline-block");
            $(".container").css("margin-left","0px");
            $(".container").css("margin-right","0px");
            $("#discos").css("display","inline-block");
            $("#discos").css("width","300px");
            $("#discos").css("left","auto");
            $("#discos").css("top","auto");
        }
        
        $(".container").css("justify-conten","none");
        //$(".table").css("width","50%");

        
        $("#discos").css("position","fixed");
        
        $("#discos").css("min-height","300px");

}

/*

$(".disc").click(function (){


    $("body").css("padding","0px");
    $(".container").css("display","inline-block");
    $(".container").css("margin-left","0px");
    $(".container").css("margin-right","0px");
    $(".container").css("width","50%");
    $(".container").css("justify-conten","none");
    //$(".table").css("width","50%");

    $("#discos").css("display","inline-block");
    $("#discos").css("width","300px");
    $("#discos").css("min-height","300px");

    $("#d1").html("True");
    $("#d2").html("Stories");
    $("#d3").html("Tim");









});
*/
for(let num=0;num<3;num++){
    $("#d"+num).click(function (){

        if(window[artistaGlobal + num]=== undefined){
            
        }else{
            var value = getComputedStyle(document.body).getPropertyValue('--resp');
            if(value==1){
                $("#pop").css("width","55%");
                $("#pop").css("left","30%");
            }else{
                $("#pop").css("width","20%");
                $("#pop").css("left","40%");
            }
            $("#pop").css("display","block");
    
            $("#overlay").css("display","block");
    }

        


    });
}

$("#overlay").click(function(){

    $("#pop").css("display","none");
    $("#overlay").css("display","none");


});

var artistaGlobal;



$(artistas).each( function( i, artist ) {

	$("#" + artist).click(function(){
        artistaGlobal = artist;
        console.log(artist);
        if(aparecidos == 0){
            aparecerDiscos();
        }
		$(".d").html("");
        
        $(window["d" + artist]).each(function (i,disco){

            if(window["f"+artist][i] == 1){
                $("#d"+i).css("background-color","#AFE1AF");
            }else{
                $("#d"+i).css("background-color","lightgray");
            }

            console.log("#d" + i);

            console.log(window[artist + i]=== undefined);
            
            if(window[artist + i]=== undefined){/*
                //$("#d" + i).attr("class","d");
                $("#d"+i).hover(function() {
                    $(this).css("background-color","lightgray");
                });*/
                var color="lightgray";
                if(window["f"+artist][i] == 1){
                    color = "#AFE1AF";
                } 

                $("#d"+i).mouseover(function() {
                    $(this).css("background-color",color);
                }).mouseout(function() {
                    $(this).css("background-color",color);
                });
            }else{

                var color="lightgray";
                if(window["f"+artist][i] == 1){
                    color = "#AFE1AF";
                } 


                $("#d"+i).mouseover(function() {
                    $(this).css("background-color","aliceblue");
                }).mouseout(function() {
                    $(this).css("background-color",color);
                });              //$("#d" + i).attr("class","d dc");*/
            }
            
            $("#d" + i).html(disco);
            //$("#d" + (i+1)).attr("id",artist + i);
            
        });
	});

    for(let n=0;n<10;n++){
        $("#d" + n).click(function(){

            $(".rola").html("");

            console.log(window[artistaGlobal + n].length);
            
            if(window[artistaGlobal + n].length >= 13){
                $("#pop").css("position","absolute");
            }else{
                $("#pop").css("position","fixed");
            }

            console.log(artistaGlobal + n);
            $(window[artistaGlobal + n]).each(function(i,rola){
                $("#rola" + i).html(rola);
            });
        });
    }
    

});


