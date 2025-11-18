<!DOCTYPE html>
<html>
<head>
    <title>Create Career</title>
</head>
<body>
<h1>Add New Career</h1>
<form action="/careers/store" method="post">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>
    
    <label>Description:</label>
    <input type="text" name="description" required><br><br>

    <label>Duration (years):</label>
    <input type="number" name="duration_years" required><br><br>
    <button type="submit">Save</button>
    <a href="/careers">Cancel</a>
</form>
</body>
</html>

