<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students List</h1>
    <a href="/students/create">+ Add New Student</a> | <a href="/careers">View Careers</a>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Email</th>
            <th>Career</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= esc($student['student_code']) ?></td>
                <td><?= esc($student['first_name']) ?> <?= esc($student['last_name']) ?></td>
                <td><?= esc($student['email']) ?></td>
                <td><?= esc($student['career_name'] ?? 'No career') ?></td>
                <td>
                    <a href="/students/edit/<?= $student['id'] ?>">Edit</a> |
                    <a href="/students/delete/<?= $student['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
