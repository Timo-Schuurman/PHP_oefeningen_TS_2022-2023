
   
    <h1>750 Belgische biertjes</h1>
    <h2>https://15euros.nl/api/bier_basic.php</h2>
    <div id="bier_div">
        hier komen de biertjes
    </div>

    <script>
        axios.get('https://15euros.nl/api/bier_basic.php')
            .then(function (response){
                let biertjes = response.data 
                console.log(biertjes);

                let htm = "hallo";
                // htm += "<br>"+biertjes[0].naam + ","+ biertjes[0].brouwer
                htm += "<h1>Biertjes:</h2><br>" 
                biertjes.forEach( function(biertje, index) {
                    htm += 1 + index + ": " + biertje.naam + biertje.brouwer +"<br>";
                });
                    
             

                document.getElementById("bier_div").innerHTML = htm
            })
    </script>
    

