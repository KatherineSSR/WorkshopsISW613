<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
<h1>Add New Student</h1>
<form action="/students/store" method="post">
    <label>First Name:</label>
    <input type="text" name="first_name" required><br><br>
    
    <label>Last Name:</label>
    <input type="text" name="last_name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    
    <label>Career:</label>
    <select name="career_id" required>
        <option value="">Select Career</option>
        <?php foreach ($careers as $career): ?>
            <option value="<?= $career['id'] ?>"><?= esc($career['name']) ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Save</button>
    <a href="/students">Cancel</a>
</form>
</body>
</html>
