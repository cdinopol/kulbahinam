<html>
	<head>
		<link rel="stylesheet" text="text/css" href="style.css">
		<script type="text/javascript" src="perlin.js"></script>
	</head>
	<body>
		<div id="map-container">
		</div>
	</body>
</html>


<script type="text/javascript">
	var newmap = [];
	var width = 50;
	var height = 50;
	var pn = new Perlin('yawase');
	
	var map = document.createElement("div");
	map.setAttribute("id", "map");
	
	var mapStr = "";
	
	for(var x = 0; x < width; x++) {
		newmap[x] = [];
		
		for(var y = 0; y < height; y++) {
			
			newmap[x][y] = '';
			noise = pn.noise(x/4, y/3, 0);

			if (noise >= 0 && noise < 0.3) {
				newmap[x][y] = 'A';
				mapStr += '<img class="tile" src="tileset/tree-1.png" style="top: '+ (x*50) +'px; left: '+ (y*50) +'px;">';
			}
			else if (noise >= 0.3 && noise < 0.4) {
				newmap[x][y] = 'B';
				mapStr += '<img class="tile" src="tileset/hill-1.png" style="top: '+ (x*50) +'px; left: '+ (y*50) +'px;">';
			}else {
				newmap[x][y] = 'C';
				mapStr += '<img class="tile" src="tileset/blank.png" style="top: '+ (x*50) +'px; left: '+ (y*50) +'px;">';
			}
		}
	}
	
	map.innerHTML = mapStr;
	document.getElementById("map-container").appendChild(map);
	
	console.log(newmap);
</script>