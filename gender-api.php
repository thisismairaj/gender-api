<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gender Checking API</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 bg-primary text-white p-3 text-center">
				<h1 class="display-2">Find Out What Gender a Name Is.</h1>
			</div>
			<div class="col-sm-6 py-4 mx-auto text-center">
					<div class="form-group">
						<label for="name">Name: </label><input class="passed form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-large" type="submit" name="submit" onclick="getData(passed.value)">Submit</button>
					</div>
			</div>
		</div>
			<div class="row">
				<div class="col-sm-8 text-center mx-auto">
					<h2 id="demo1"></h2>
					<h3 id="demo"></h3>
				</div>
			</div>
	</div>

	<script>
		const passed = document.querySelector('input.passed');

		const promise = fetch("https://gender-api.com/get?name=");

		function json(response){
			return response.json();
		}

		function getData(param){
			const promise = fetch('https://gender-api.com/get?name=' + param + '&key=' + private_key);

			promise.then(
					data => data.json()
				).then(data => {
					let ans = data.gender;
					document.getElementById('demo1').innerHTML = "There is " + data.accuracy + "% chance, that.."
					document.getElementById('demo').innerHTML = passed.value.charAt(0).toUpperCase() + passed.value.slice(1) + " is a " + ans.charAt(0).toUpperCase() + ans.slice(1) + " name";
				});
		}

	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
</body>
</html>