<?php

if (!function_exists('generalUploadImages')) {
    /**
     * Handles the upload of various types of files.
     *
     * @param string $field_name The name of the input field.
     * @param string $path The path where the file should be uploaded.
     * @return array An array containing the upload status, message, and file name if successful.
     */
    function generalUploadImages($field_name, $path)
    {
        // Ensure the upload directory exists
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        // Get the file from the request
        $file = \Config\Services::request()->getFile($field_name);
        print($file); die();
        // Define allowed types and max size
        $allowedTypes = ['png', 'doc', 'docx', 'pdf', 'jpg', 'jpeg', 'gif', 'eps', 'ai', 'xls', 'xlsx', 'tiff', 'tif', 'webp', 'svg'];
        $maxSize = 200000; // in KB

        // Check if the file is valid and within size limits
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Validate file type
            $fileExtension = $file->getClientExtension();
            if (!in_array($fileExtension, $allowedTypes)) {
                return array('type' => 'error', 'msg' => 'Invalid file type');
            }

            // Validate file size
            $fileSizeKB = $file->getSizeByUnit('kb');
            if ($fileSizeKB > $maxSize) {
                return array('type' => 'error', 'msg' => 'File size exceeds the maximum limit');
            }

            // Generate a random file name
            $newName = $file->getRandomName();
            // Move the file to the target path
            if ($file->move($path, $newName)) {
                // Return the new file name
                return array('file' => $newName, 'msg' => 'success', 'type' => 'success');
            } else {
                return array('type' => 'error', 'msg' => 'Failed to move the uploaded file');
            }
        } else {
            // Return the validation errors
            return array('type' => 'error', 'msg' => $file ? $file->getErrorString() : 'No file uploaded');
        }
    }
}
