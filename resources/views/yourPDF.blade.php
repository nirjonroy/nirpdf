
<!DOCTYPE html>
<html>
<head>
    <title>Dcart </title>
</head>
<body>
	@foreach (Category::all() as $category) {
    echo $category->name;
	}
	@endforeach
</body>
</html>