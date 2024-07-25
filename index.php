<?php
// Set the directory to the current directory
$dir = '.';

// Open the directory
if ($handle = opendir($dir)) {
    // Store the entries in an array
    $entries = [];
    while (false !== ($entry = readdir($handle))) {
        // Skip the current and parent directory entries
        if ($entry != "." && $entry != "..") {
            $entries[] = $entry;
        }
    }

    // Sort the entries in alphabetical order
    sort($entries);

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Directory Listing</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
                margin: 0;
                padding: 20px;
            }
            h1 {
                font-size: 24px;
                color: #333;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
            a {
                text-decoration: none;
                color: #007bff;
            }
            a:hover {
                text-decoration: underline;
            }
            .directory {
                font-weight: bold;
            }
            .file {
                color: #555;
            }
        </style>
    </head>
    <body>
        <h1>Directory Listing</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Last Modified</th>
            </tr>";

    // Loop through the sorted entries
    foreach ($entries as $entry) {
        // Check if the entry is a directory
        if (is_dir($entry)) {
            echo "<tr>
                    <td class='directory'><a href=\"$entry/index.php\">$entry</a></td>
                    <td class='directory'>-</td>
                    <td class='directory'>" . date("F d Y H:i:s", filemtime($entry)) . "</td>
                  </tr>";
        } else {
            $fileSize = filesize($entry);
            $lastModified = date("F d Y H:i:s", filemtime($entry));
            echo "<tr>
                    <td class='file'><a href=\"$entry\">$entry</a></td>
                    <td class='file'>" . formatSize($fileSize) . "</td>
                    <td class='file'>$lastModified</td>
                  </tr>";
        }
    }

    echo "</table>
        </body>
    </html>";

    closedir($handle);
} else {
    echo "Could not open directory.";
}

// Function to format file size
function formatSize($bytes) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.2f", $bytes / pow(1024, $factor)) . ' ' . @$units[$factor];
}
?>