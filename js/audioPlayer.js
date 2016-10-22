        function audioPlayer(){
            var currentSong = 0;
            $("#mytrack")[0].src = $("#playlist li a")[0];
            //$("#audioPlayer")[0].play();
            $("#playlist li a").click(function(e){
               e.preventDefault(); 
               $("#mytrack")[0].src = this;
               $("#mytrack")[0].play();
               $("#playlist li").removeClass("current-song");
                currentSong = $(this).parent().index();
                $(this).parent().addClass("current-song");
            });
            
            $("#mytrack")[0].addEventListener("ended", function(){
               currentSong++;
                if(currentSong == $("#playlist li a").length)
                    currentSong = 0;
                $("#playlist li").removeClass("current-song");
                $("#playlist li:eq("+currentSong+")").addClass("current-song");
                $("#mytrack")[0].src = $("#playlist li a")[currentSong].href;
                $("#mytrack")[0].play();
            });
        }