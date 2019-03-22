//rainy day code
	var nbDrop = 100;
	var rain = 0;

		function randRange(minNum, maxNum) {
			return (Math.floor(Math.random() * (maxNum - minNum) + 1) + minNum);
		}

		function createRain() {
			for (i = 1; i < nbDrop; i++){
				var dropLeft = randRange(0, 1600);
				var dropTop = randRange(-1000, 1400);

				$('.rain').append('<div class="drop" id="drop' + i + '"></div>');
				$('#drop'+ i).css('left', dropLeft);
				$('#drop'+ i).css('top', dropTop);
			}	
		}

		function hide() {
			var rainBtn = document.getElementById('rain');
			rainBtn.style.display = 'none';
		}


//move Box animation on index page
	
//put code here



//canvas file design 

var canvas = document.querySelector('canvas');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var context = canvas.getContext('2d');

context.fillRect(100, 100, 20, 100);
context.fillRect(200, 300, 20, 100);
context.fillRect(300, 200, 20, 100);

console.log(canvas);
