$(document).ready(function(){

	$(document).keydown(function(e){//up
	    if (e.keyCode == 38 ) {
	      speak("yes"); 
	      }         
	});
	$(document).keydown(function(e){//down
	    if (e.keyCode == 40 ) {
	      speak( "no" );  
	      }        
	});

	$(document).keydown(function(e){//space
	    if (e.keyCode == 32 ) {
	      reset();
	    }
	});


	  $("#yes").click(function(){
		speak("yes");
	  });
	
	  $("#no").click(function(){
		speak("no");
	  });
	  
  function speak(current){
      var audio = new Audio('sound/yes.mp3');
      var audio2 = new Audio('sound/no.mp3');
        if (current === 'yes') { audio.play();}
        if (current === 'no') { audio2.play();}
        
  }
});