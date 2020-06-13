$(document).ready(function(){


    var host = window.location.href;    


   $("#provinces").change(function() {


            $.getJSON(host + "/regencies/" + $("#provinces option:selected").val(), function(data) {

             //console.log(data);            

                var temp = [];

                //CONVERT INTO ARRAY

                $.each(data, function(key, value) {

                    temp.push({v:value, k: key});

                });

                //SORT THE ARRAY

                temp.sort(function(a,b){

                   if(a.v > b.v){ return 1}

                    if(a.v < b.v){ return -1}

                      return 0;

                });

                //APPEND INTO SELECT BOX

                $('#regencies').empty();

                $('#regencies').append('<option>Select Provinces</option>');

                $('#districts').empty();

                $('#districts').append('<option>NA</option>');

                $('#villages').empty();

                $('#villages').append('<option>NA</option>');

                $.each(temp, function(key, obj) {

                    $('#regencies').append('<option value="' + obj.k +'">' + obj.v + '</option>');

                });

            });                

            

        }); 


        $("#regencies").change(function() {


            $.getJSON(host + "/districts/" + $("#regencies option:selected").val(), function(data) {

                //console.log(data);

                var temp = [];

                //CONVERT INTO ARRAY

                $.each(data, function(key, value) {

                    temp.push({v:value, k: key});

                });

                //SORT THE ARRAY

                temp.sort(function(a,b){

                   if(a.v > b.v){ return 1}

                    if(a.v < b.v){ return -1}

                      return 0;

                });

                //APPEND INTO SELECT BOX

                $('#districts').empty();

                $.each(temp, function(key, obj) {

                    $('#districts').append('<option value="' + obj.k +'">' + obj.v + '</option>');           

                });            

            });

            

        }); 

        $("#districts").change(function() {


            $.getJSON(host + "/villages/" + $("#districts option:selected").val(), function(data) {

                //console.log(data);

                var temp = [];

                //CONVERT INTO ARRAY

                $.each(data, function(key, value) {

                    temp.push({v:value, k: key});

                });

                //SORT THE ARRAY

                temp.sort(function(a,b){

                   if(a.v > b.v){ return 1}

                    if(a.v < b.v){ return -1}

                      return 0;

                });

                //APPEND INTO SELECT BOX

                $('#districts').empty();

                $.each(temp, function(key, obj) {

                    $('#districts').append('<option value="' + obj.k +'">' + obj.v + '</option>');           

                });            

            });

            

        }); 



});//end of document ready