<!doctype html>
<html>
    <head>
		@include('layouts.partials.head')
		
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<div class="row">
			<div class="col-8"><div id="drawing"></div></div>
		</div>
		
		<div class="row">
		    <div class="col-6 col-md-3"></div>
			<div class=".col-6 .col-md-4">
			<button type="button" class="btn btn-outline-primary">Bookings</button>
			<button type="button" class="btn btn-outline-success">Waiting times</button>
			<button type="button" class="btn btn-outline-danger">Warnings</button>
			</div>
		</div>
		
		<script>
		//area
		var draw = SVG('drawing').size(800, 605)
		
		//table1
		var table1 = draw.rect(140, 100).fill('#fff').move(40, 40).stroke({ color: '#f06', width: 3 })
		var table1text = draw.text("Table1").move(80, 80)
	
		//table2
		var table2 = draw.rect(140, 100).fill('#fff').move(40, 300).stroke({ color: '#f06', width: 3 })
		var table2text = draw.text("Table2").move(80, 340)	
		
		var line1 = draw.line(0, 600, 0, 0).move(20, 15).stroke({ color: '#f06', width: 10 })
		var line2 = draw.line(0, 600, 0, 0).move(795, 20).stroke({ color: '#f06', width: 10 })
		var line3 = draw.line(800, 0, 0, 0).move(20, 600).stroke({ color: '#f06', width: 10 })
		var line4 = draw.line(800, 0, 0, 0).move(20, 20).stroke({ color: '#f06', width: 10 })
		
		</script>
		
</html>
