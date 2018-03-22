function colorLoop(){

	var time = 0;
	var counter = 0;

	for (var i=0;i<53;i++)
	{
		time += 100;
		
		if (counter === 0)
		{
			setTimeout(function(){changeBackground('#6699FF')}, time);
			counter++;
		}
		else if (counter == 1)
		{
			setTimeout(function(){changeBackground('#FF9933')}, time);
			counter++;
		}
		else if (counter == 2)
		{
			setTimeout(function(){changeBackground('#FFFF66')}, time);
			counter++;
		}
		else if (counter == 3)
		{
			setTimeout(function(){changeBackground('#99CC66')}, time);
			counter++;
		}
		else if (counter == 4)
		{
			setTimeout(function(){changeBackground('#66FF99')}, time);
			counter++;
		}
		else if (counter == 5)
		{
			counter = 0;
		}
	}


}