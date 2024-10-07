<?php

namespace App\Providers;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    // public function register()
    // {
    //     // Define the directory where your models are located
    //     $modelsDirectory = app_path('Models');

    //     // Scan the directory for subdirectories (e.g., 'Admin', 'HR', 'Sales')
    //     $directories = File::directories($modelsDirectory);

    //     // Get the base models directory files
    //     $baseModels = File::files($modelsDirectory);

    //     $breadcrumbs = collect(request()->segments())->map(function ($segment, $key) use ($directories, $baseModels) {
    //         // Initialize the name variable with the segment value
    //         $name = ucfirst($segment);

    //         // Function to attempt to resolve a model instance
    //         $resolveModelInstance = function ($namespace, $segment) {
    //             if (class_exists($namespace)) {
    //                 try {
    //                     return $namespace::find($segment);
    //                 } catch (\Exception $e) {
    //                     // Log or handle the exception as needed
    //                     Log::error("Error resolving model instance for {$namespace}: " . $e->getMessage());
    //                 }
    //             } else {
    //                 Log::error("Class {$namespace} does not exist.");
    //             }
    //             return null;
    //         };

    //         // Check base models directory
    //         foreach ($baseModels as $file) {
    //             // Get the class name without the .php extension
    //             $className = pathinfo($file, PATHINFO_FILENAME);

    //             // Generate the fully qualified class name
    //             $namespace = 'App\Models\\' . $className;

    //             // Attempt to resolve model instance
    //             $modelInstance = $resolveModelInstance($namespace, $segment);

    //             // If a model instance is found, retrieve its name attribute
    //             if ($modelInstance) {
    //                 $name = $modelInstance->name;
    //                 break;
    //             }
    //         }

    //         // Check subdirectories
    //         foreach ($directories as $directory) {
    //             // Get the name of the subdirectory (e.g., 'Admin', 'HR', 'Sales')
    //             $directoryName = basename($directory);

    //             // Generate the namespace for the subdirectory's models
    //             $namespace = 'App\Models\\' . $directoryName;

    //             // Check if the current segment matches any subdirectory name
    //             if (strtolower($segment) === strtolower($directoryName)) {
    //                 // Scan the subdirectory for model files
    //                 $subdirectoryModels = File::files($directory);

    //                 foreach ($subdirectoryModels as $file) {
    //                     // Get the class name without the .php extension
    //                     $className = pathinfo($file, PATHINFO_FILENAME);

    //                     // Generate the fully qualified class name
    //                     $modelClass = $namespace . '\\' . $className;

    //                     // Attempt to resolve model instance
    //                     $modelInstance = $resolveModelInstance($modelClass, $segment);

    //                     // If a model instance is found, retrieve its name attribute
    //                     if ($modelInstance) {
    //                         $name = $modelInstance->name;
    //                         break 2; // Break both loops
    //                     }
    //                 }
    //             }
    //         }

    //         return [
    //             'url' => url(implode('/', array_slice(request()->segments(), 0, $key + 1))),
    //             'name' => $name,
    //         ];
    //     })->toArray();

    //     View::share('breadcrumbs', $breadcrumbs);
    // }

    public function register()
    {
        $breadcrumbs = collect(request()->segments())->map(function ($segment, $key) {
            return [
                'url' => '/' . implode('/', array_slice(request()->segments(), 0, $key + 1)),
                'name' => ucfirst($segment),
            ];
        })->toArray();

        View::share('breadcrumbs', $breadcrumbs);
    }




    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
