<!DOCTYPE html>
<html>
    <head>
		@include('layouts.partials.head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Table Map</title>
		<link rel="stylesheet" href="{{ asset('css/mapping.css') }}">

      	<script src="{{ asset('js/interact.min.js') }}"></script>

		<script type="text/javascript">			
		
		coloursTo = {
			red: 'rgb(255, 99, 132)',
			orange: 'rgb(255, 159, 64)',
			yellow: 'rgb(255, 205, 86)',
			green: 'rgb(75, 192, 192)',
			blue: 'rgb(54, 162, 235)',
			purple: 'rgb(153, 102, 255)',
			grey: 'rgb(201, 203, 207)'
		};
		
		//on load

		// target elements with the "draggable" class
		interact('.draggable')
		  .draggable({
			// enable inertial throwing
			inertia: true,
			// keep the element within the area of it's parent
			restrict: {
			  restriction: "parent",
			  endOnly: true,
			  elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
			},
			// enable autoScroll
			autoScroll: true,
			// call this function on every dragmove event
			onmove: dragMoveListener,
		  });

		  function dragMoveListener (event) {
			var target = event.target,
				// keep the dragged position in the data-x/data-y attributes
				x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
				y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

			// translate the element
			target.style.webkitTransform =
			target.style.transform =
			  'translate(' + x + 'px, ' + y + 'px)';

			// update the position attributes
			target.setAttribute('data-x', x);
			target.setAttribute('data-y', y);
		  }

		  // this is used later in the resizing and gesture demos
		  window.dragMoveListener = dragMoveListener;
		  
			interact('.dropzone').dropzone({
			  // only accept elements matching this CSS selector
			  accept: '.drag-drop',
			  // Require a 75% element overlap for a drop to be possible
			  overlap: 0.75,

			  // listen for drop related events:
			  ondropactivate: function (event) {
				// add active dropzone feedback
				event.target.classList.add('drop-active');
			  },
			  ondragenter: function (event) {
				var draggableElement = event.relatedTarget,
					dropzoneElement = event.target;

				// feedback the possibility of a drop
				dropzoneElement.classList.add('drop-target');
				draggableElement.classList.add('can-drop');
			  },
			  ondragleave: function (event) {
				// remove the drop feedback style
				event.target.classList.remove('drop-target');
				event.relatedTarget.classList.remove('can-drop');
				event.relatedTarget.textContent = event.relatedTarget.textContent.replace("T2", "None");
				event.relatedTarget.textContent = event.relatedTarget.textContent.replace("T1", "None");
					
			  },
			  ondrop: function (event) {
				if (event.target.classList.contains("T1")){
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("None", "T1");
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("T2", "T1");
				}
				else if (event.target.classList.contains("T2")){
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("None", "T2");
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("T1", "T2");
				}
				else if (event.target.classList.contains("T2")){
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("None", "T2");
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("T1", "T2");
				}
				else if (event.target.classList.contains("T2")){
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("None", "T2");
					event.relatedTarget.textContent = event.relatedTarget.textContent.replace("T1", "T2");
				}
				
			  },
			  ondropdeactivate: function (event) {
				// remove active dropzone feedback
				event.target.classList.remove('drop-active');
				event.target.classList.remove('drop-target');
			  }
			});
			//data-x="261" data-y="39" style="transform: translate(261px, 39px);

  
		</script>
		<body>
		<div class="container">  
			<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
			  <a class="navbar-brand" href="./">Home</a>
			</nav>
			
			<div class="resize-container">			
				
				<div style="position: absolute; margin-left:200px; margin-top:170px;" id="outer-dropzone" class="dropzone draggable T1">
					<div id="inner-dropzone" class="dropzone">T1</div>	
				</div>
				
				<div style="position: absolute; margin-left:600px; margin-top:170px;" id="outer-dropzone" class="dropzone draggable T2">
					<div id="inner-dropzone" class="dropzone">T2</div>	
				</div>
				
				<div style="position: absolute; margin-left:250px; margin-top:5px;" id="outgoing">Out-going</div>
				<div style="position: absolute; margin-left:10px; margin-top:5px;" id="ingoing">In-going</div>
				<div style="position: absolute; margin-left:900px; margin-top:430px;" id="entrance">Entrance</div>
				
				<div style="position: absolute; margin-left:204px; margin-top:260px;" id="drag-1" class="draggable drag-drop">S-1 T1</div>
				<div style="position: absolute; margin-left:386px; margin-top:260px;" id="drag-2" class="draggable drag-drop">S-2 T1</div>
				<div style="position: absolute; margin-left:786px; margin-top:260px;" id="drag-3" class="draggable drag-drop">S-3 T2</div>
				<div style="position: absolute; margin-left:604px; margin-top:260px;" id="drag-4" class="draggable drag-drop">S-4 T2</div>
			
				<div style="position: absolute; margin-left:320px; margin-top:35px;" id="drag-3" class="draggable drag-drop">S-5</div>
				<div style="position: absolute; margin-left:80px; margin-top:35px;" id="drag-4" class="draggable drag-drop">S-6</div>
				
			</div>
		</div>
		</body>
</html>
