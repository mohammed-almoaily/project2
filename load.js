var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;
var loader = document.getElementById("#loader");

function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#ffffffff';
	ctx.strokeStyle = "#ffffffff";
	ctx.textAlign = "center";
	ctx.font="35px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
	    myModal.show();
		clearTimeout(sim);
        loader.style.display = "none";
	}
	al++;
}

const myModal = new bootstrap.Modal(document.getElementById('modal'), {
keyboard: false
});

var win = document.getElementById("#winner");

win.addEventListener("click", function(){
    loader.style.display = "block";
    sim = setInterval(progressSim, 20);
});