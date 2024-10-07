<?php

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

if (!function_exists('handaleFileUpload')) {
    function handaleFileUpload(UploadedFile $file, $folder = 'default')
    {
        if (!$file->isValid()) {
            abort(422, 'Invalid file');
        }

        $extension = $file->getClientOriginalExtension();
        $folderType = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']) ? 'images' : 'files';

        $path = Storage::disk('public')->putFile("$folderType/$folder", $file);

        if (!$path) {
            abort(500, 'Error occurred while moving the file');
        }

        // Return only the file path as a string
        return $path;
    }
}

if (!function_exists('noImage')) {
    function noImage()
    {
        return 'https://static.vecteezy.com/system/resources/thumbnails/004/141/669/small/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg';
    }
}

if (!function_exists('customUpload')) {
    function customUpload(UploadedFile $mainFile, string $uploadPath, ?int $reqWidth = null, ?int $reqHeight = null): array
    {
        // $originalName = pathinfo($mainFile->getClientOriginalName(), PATHINFO_FILENAME);

        // $hashedName = substr($mainFile->hashName(), -12);

        // $fileName = $originalName . '_' . $hashedName;

        $originalName = pathinfo($mainFile->getClientOriginalName(), PATHINFO_FILENAME);
        $fileExtention = $mainFile->getClientOriginalExtension();
        $currentTime = Str::random(10) . time();
        $fileName = $currentTime . '.' . $fileExtention;

        if (!is_dir($uploadPath)) {
            if (!mkdir($uploadPath, 0755, true)) {
                abort(404, "Failed to create the directory: $uploadPath");
            }
        }

        if (strpos($mainFile->getMimeType(), 'image') === 0) {
            $requestImgPath = "{$uploadPath}/requestImg";
            // if (!is_dir($requestImgPath)) {
            //     if (!mkdir($requestImgPath, 0777, true)) {
            //         abort(404, "Failed to create the directory: $requestImgPath");
            //     }
            // }
            if (!is_dir($requestImgPath)) {
                // Create directory
                // $localPath = storage_path("app/$fullUploadPath");
                if (!mkdir($requestImgPath, 0755, true)) {
                    abort(404, "Failed to create the directory: $requestImgPath");
                }
                // Ensure directory permissions are set correctly
                chmod($requestImgPath, 0755);
            }

            $img = Image::read($mainFile);
            $img->save("$uploadPath/$fileName");
            if ($reqWidth !== null && $reqHeight !== null) {
                $img->resize($reqWidth, $reqHeight, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save("$requestImgPath/$fileName");
            }
            // $mainFile->storeAs($requestImgPath, $fileName);
        } else {
            $mainFile->storeAs('public/files/', $fileName);
        }

        $output = [
            'status' => 1,
            'file_name' => $fileName,
            'file_extension' => $mainFile->getClientOriginalExtension(),
            'file_size' => $mainFile->getSize(),
            'file_type' => $mainFile->getMimeType(),
        ];

        return array_map('htmlspecialchars', $output);
    }
}
