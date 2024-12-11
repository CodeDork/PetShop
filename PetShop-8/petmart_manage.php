<?php include("./includes/header.php");?>

<?php
session_start();
require('./includes/connect_db.php');

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_category'])) {
        // Add a new category
        $category_name = mysqli_real_escape_string($dbc, trim($_POST['category_name']));
        $q = "INSERT INTO categories (category_name) VALUES ('$category_name')";
        if (mysqli_query($dbc, $q)) {
            echo "<p>Category added successfully!</p>";
        } else {
            echo "<p>Error: Could not add category.</p>";
        }
    } elseif (isset($_POST['update_category'])) {
        // Update an existing category
        $id = (int) $_POST['category_id'];
        $category_name = mysqli_real_escape_string($dbc, trim($_POST['category_name']));
        $q = "UPDATE categories SET category_name='$category_name' WHERE id=$id";
        if (mysqli_query($dbc, $q)) {
            echo "<p>Category updated successfully!</p>";
        } else {
            echo "<p>Error: Could not update category.</p>";
        }
    } elseif (isset($_POST['delete_category'])) {
        // Delete a category
        $id = (int) $_POST['category_id'];
        $q = "DELETE FROM categories WHERE id=$id";
        if (mysqli_query($dbc, $q)) {
            echo "<p>Category deleted successfully!</p>";
        } else {
            echo "<p>Error: Could not delete category.</p>";
        }
    }
}

// Fetch categories for display
$q = "SELECT * FROM categories ORDER BY id ASC";
$r = mysqli_query($dbc, $q);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Categories</title>
</head>
<body>
    <h1>Manage Categories</h1>

    <!-- Add Category -->
    <h2>Add Category</h2>
    <form action="manage_categories.php" method="POST">
        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name" required>
        <input type="submit" name="add_category" value="Add Category">
    </form>

    <!-- Update or Delete Category -->
    <h2>Existing Categories</h2>
    <form action="manage_categories.php" method="POST">
        <table>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <input type="text" name="category_name" value="<?php echo $row['name']; ?>">
                </td>
                <td>
                    <!-- Hidden field to pass the category ID -->
                    <input type="hidden" name="category_id" value="<?php echo $row['id']; ?>">
                    <input type="submit" name="update_category" value="Update">
                    <input type="submit" name="delete_category" value="Delete" onclick="return confirm('Are you sure you want to delete this category?');">
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </form>
</body>
</html>
