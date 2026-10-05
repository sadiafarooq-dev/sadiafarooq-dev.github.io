<?php
// Small security helpers used across the site (loaded by conn.php and at the top of each page).

if (!function_exists('esc')) {
    /** Escape a value before putting it inside a quoted SQL string ('...'). */
    function esc($value)
    {
        global $conn;
        return mysqli_real_escape_string($conn, (string) $value);
    }

    /** Escape a value before printing it into HTML. */
    function e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Save an uploaded image safely into $dir and return the new file name.
     * Only real images (jpg, jpeg, png, webp, gif, avif) are accepted, and the file
     * gets a random name so nobody can upload a script or overwrite another file.
     * Returns '' if nothing valid was uploaded.
     */
    function save_upload($file, $dir = 'upload/')
    {
        if (empty($file) || empty($file['name']) || $file['error'] !== UPLOAD_ERR_OK) {
            return '';
        }
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif', 'avif'];
        if (!in_array($ext, $allowed, true) || @getimagesize($file['tmp_name']) === false && $ext !== 'avif') {
            return '';
        }
        $name = bin2hex(random_bytes(8)) . '.' . $ext;
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        return move_uploaded_file($file['tmp_name'], rtrim($dir, '/') . '/' . $name) ? $name : '';
    }

    /**
     * Check a login password. Passwords are stored as secure hashes; accounts
     * created before this change still hold the plain password, so those are
     * accepted once and upgraded to a hash automatically.
     */
    function check_password($plain, $stored, $table, $column, $id)
    {
        global $conn;
        if (password_verify($plain, $stored)) {
            return true;
        }
        if ($stored !== '' && hash_equals($stored, $plain)) {
            $hash = esc(password_hash($plain, PASSWORD_DEFAULT));
            mysqli_query($conn, "UPDATE `$table` SET `$column`='$hash' WHERE id=" . (int) $id);
            return true;
        }
        return false;
    }
}
