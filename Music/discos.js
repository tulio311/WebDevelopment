let rolas = {};

// This function makes the fetch request and returns the response data
async function getData() {

    try {
        const response = await fetch('http://localhost:8000/rolas.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        });

        const responseData = await response.json();  // Parse the JSON response
        return responseData;  // Return the response data
    } catch (error) {
        console.error('Error:', error);
        return null;  // Return null on error
    }
}

// Example of calling the getData() function and then accessing the responseData
async function main() {
    rolas = await getData();
    //rolas = responseData;  // Wait for the fetch to complete
    //console.log('Response Data:', responseData);  // Always log the most recent responseData
}

main();  // Call the function

/*
function callback(data){
    rolas = data;
}

fetch('http://localhost:8000/rolas.php', {
    method: 'GET', // or 'PUT', 'PATCH', etc.
    headers: {
        'Content-Type': 'application/json', // Specify the content type as JSON
    }
})
.then(response => response.json())  // Parse the response as JSON
.then(responseData => {
    callback(responseData);
    //console.log('Response:', responseData);  // Handle the JSON response
})
.catch(error => {
    console.error('Error:', error);  // Handle errors
});
*/

setTimeout(() => {
    console.log(rolas);  // Will show the most updated data
}, 2000); 


const nArtistas = document.getElementsByClassName('table-row').length;

console.log(nArtistas);

function createArray(n) {
    let arr = [];
    for (let i = 1; i <= n; i++) {
        arr.push(i);
    }
    return arr;
}


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


function searchDiscos(id){

    let arr = [];

    for(row in rolas){
        //console.log(row);
        if (rolas[row]['artistID'] == id){
            arr.push([row,rolas[row]['name'],rolas[row]['finished'],rolas[row]['songs']]);
        }
    }
    return arr;
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


function isAloneSong(i){

    let fin = rolas[i]['finished'];
    let songs = JSON.parse(rolas[i]['songs']);
    let name = rolas[i]['name'];

    if(songs.length == 1 && fin == 1 && songs[0] == name){
        return 1;
    }else{
        return 0;
    }

}


for(let num=0;num<8;num++){
    $("#d"+num).click(function (){

        let discos = searchDiscos(artistaGlobal);

        console.log(artistas);

        if(isAloneSong(discos[num][0])){
            
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

var artistas = createArray(nArtistas);


$(artistas).each( function( i, artist ) {

    

	$("#_" + artist).click(function(){
        artistaGlobal = artist;
        console.log(artist);
        if(aparecidos == 0){
            aparecerDiscos();
        }
		$(".d").html("");

        let discos = searchDiscos(artist);

        $(discos).each(function (i,disco){

            if(disco[2] == 1){
                $("#d"+i).css("background-color","#AFE1AF");
            }else{
                $("#d"+i).css("background-color","lightgray");
            }

            //console.log("#d" + i);

            //console.log(window[artist + i]=== undefined);
            
            if(isAloneSong(disco[0])){/*
                //$("#d" + i).attr("class","d");
                $("#d"+i).hover(function() {
                    $(this).css("background-color","lightgray");
                });*/
                var color="lightgray";
                if(disco[2] == 1){
                    color = "#AFE1AF";
                } 

                $("#d"+i).mouseover(function() {
                    $(this).css("background-color",color);
                }).mouseout(function() {
                    $(this).css("background-color",color);
                });
            }else{

                var color="lightgray";
                if(disco[2] == 1){
                    color = "#AFE1AF";
                } 


                $("#d"+i).mouseover(function() {
                    $(this).css("background-color","aliceblue");
                }).mouseout(function() {
                    $(this).css("background-color",color);
                });              //$("#d" + i).attr("class","d dc");*/
            }
            
            $("#d" + i).html(disco[1]);
            //$("#d" + (i+1)).attr("id",artist + i);
            
        });
	});

    for(let n=0;n<10;n++){
        $("#d" + n).click(function(){

            $(".rola").html("");

            console.log(artistaGlobal);

            let discos = searchDiscos(artistaGlobal);

            //console.log(discos);

            let canciones = JSON.parse(discos[n][3]);

            //console.log(canciones);

            for(let j=0;j<canciones.length;j++){
                document.getElementById("rola"+String(j)).innerHTML = canciones[j];
            }

            //console.log(window[artistaGlobal + n].length);
            
            if(canciones.length >= 13){
                $("#pop").css("position","absolute");
            }else{
                $("#pop").css("position","fixed");
            }

            //console.log(artistaGlobal + n);

            /*
            $(discos).each(function(i,disco){
                $("#rola" + i).html(rola);
            });*/
        });
    }
    

});


