function resize() {
					if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							makesmall();
					}
			    else if ( $(window).width() < 739) {
			    	makesmall();
			    }
			    else {
			    	makebig();
			    }
			}
			$(window).on("resize", resize);
			function makesmall()  {
				/*document.getElementById("sub_holder").style.display="block";
				document.getElementById("outer_wrapper").style.width="100%";
				$('.highlow').css('font-size', '6vw');
				$('.dividers').css('font-size', '6vw');
				$('#bartxt').css('font-size', '6vw');*/
              document.getElementById("topbar").style.display="block"
			}
			function makebig()  {
				document.getElementById("sub_holder").style.display="flex";
				document.getElementById("outer_wrapper").style.width="50%";
				$('.highlow').css('font-size', '3vw');
				$('.dividers').css('font-size', '3vw');
				$('#bartxt').css('font-size', '3vw');
			}